<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;
use App\game_category;
use App\Http\Controllers\GameShopController;
use Illuminate\Support\Collection;
use ReflectionClass;

class game extends Model
{
    protected $table = "game";
    // protected $fillable = ['NAME','DESCRIPTION','STATUS','PRICE','SALE','AGE_REQ','CPU','GPU','STORAGE','OS','RAM','LINKDOWNLOAD','LINKDEMO', 'FEATURE','created_at','updated_at'];
    protected $guarded = [];

    public function getCategories(){
        $game_categories = game_category::where("GAME_ID", "=", $this->ID)->pluck("CATEGORY_ID")->all();
        $categories = category::whereIn("ID", $game_categories)->pluck("NAME")->all();
        return join(", ", $categories);
    }

    public function getCategoriesID(){
        return game_category::where("GAME_ID" , "=" ,$this->ID)->pluck("CATEGORY_ID");
    }

    public function getProducers(){
        $game_producers = game_producer::where("GAME_ID" , "=" ,$this->ID)->pluck("PRODUCER_ID")->all();
        $producers = producer::whereIn("ID", $game_producers)->pluck("NAME")->all();
        return join(", ", $producers);
    }

    function getProducersID(){
        return game_producer::where("GAME_ID" , "=" ,$this->ID)->pluck("PRODUCER_ID");
    }

    public function getPublishers(){
        $game_publisher = game_publisher::where("GAME_ID" , "=" ,$this->ID)->pluck("PUBLISHER_ID")->all();
        $publisher = publisher::whereIn("ID", $game_publisher)->pluck("NAME")->all();
        return join(", ", $publisher);
    }

    public function getPublishersID(){
        return game_publisher::where("GAME_ID" , "=" ,$this->ID)->pluck("PUBLISHER_ID");
    }


    public function getShortPrice(){
        return round($this->PRICE, 2). " $";
    }



    public function getShortSalePrice(){
        if($this->SALE > 0){
            return round(($this->PRICE*(100 - $this->SALE)/100), 2)."$";
        }
        return round($this->PRICE, 2). " $";

    }

    public function getSale(){
        return $this->SALE > 0?'-'.$this->SALE."%":'';
    }

    public function getIntroduceImageDirectory(){
        $image = game_image::where([["GAME_ID",'=', $this->ID],['COVER','=','1']])->first();
        return $image ? $image->URL : "";
    }

    public function getStatus(){
        switch ($this->STATUS) {
            case '1':
                return 'Available';
                break;

            case '2':
                return 'Unavailable';
                break;

            case '3':
                return 'Incoming';
                break;

            default:
                # code...
                break;
        }
    }


    public function nextID(){
        $all = game::all();
        if(sizeof($all) == 0){
            return 1;
        }
        return game::all()->pluck("ID")->max() + 1;
    }

    public function getGameQuantity($id){
        $gameId = 0;
        $arrayGameId = cart_item::where("CART_ID",'=',$id)->pluck("GAME_ID");
        for($i=0; $i < count($arrayGameId) ; $i++ ){
              if($arrayGameId[$i] == $this->ID)
              {
                    $gameId = $arrayGameId[$i];
              }
        }
        $gameQuantity = cart_item::where([["CART_ID",'=',$id],["GAME_ID",'=',$gameId]])->pluck("GAME_QUANTITY");
        return  $gameQuantity[0] ? $gameQuantity[0] : null;
    }

    public function  getTotal($quantity){
        $total = 0;
        $priceOfGame = $this->PRICE;
        $saleOfGame = $this->SALE;
        $total= $quantity * ( $priceOfGame - (($priceOfGame*$saleOfGame)/100) );
        return round($total,2)." $";
     }

    public function Rating(){
        $ratings = comment::where('GAME_ID',$this->ID)->pluck('RATING');
        if($ratings->count() > 0)
            return round(collect($ratings)->avg());
        return 0;
    }

    public function Comments(){
        return comment::where('GAME_ID','=',$this->ID)->get();
    }

    public function gridComments(){
        $pageLenght = 5;
        $count = 0;
        $comments = new Collection();
        $newPage = new Collection();
        foreach ($this->Comments() as $cmt) {
            $count++;
            $newPage->add($cmt);
            if($count == $pageLenght or $cmt == $this->Comments()->last()){
                $comments->add($newPage);
                $newPage = new Collection();
                $count = 0;
            }
        }
        return $comments;
    }

    public function commentsPageNum(){
        $pageLenght = 5;
        $amount = $this->Comments()->count();
        if ($amount % $pageLenght == 0){
            return intval($amount/$pageLenght);
        }

        return intval(ceil($amount/$pageLenght));
    }

    public function getRandomGames(){
        return game::inRandomOrder()->where('ID','!=',$this->ID)->limit(10)->get();
    }
}
