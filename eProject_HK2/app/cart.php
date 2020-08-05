<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cart_item;
class cart extends Model
{
    protected $table = "cart";
    protected $fillable = ['ID','USER_ID','ORDER_DATE','PAID','created_at','updated_at'];
    public $game = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;


    public static function newItem($oldCart){
        return $oldCart != null?$oldCart:new cart();

    }

    public function AddCartItem($game,$id){
        $newGame = ['quanty' => 0 , 'price'=>$game->PRICE*((100-$game->SALE)/100),'gameInfor'=>$game ,'img'=>$game->getIntroduceImageDirectory()];
        if($this->game){
            if(array_key_exists($id,$this->game)){
                $newGame = $this->game[$id];
            }
        }
        $newGame['quanty']++;
        $newGame['price'] = round($newGame['quanty']*$game->PRICE*((100-$game->SALE)/100), 2);

        $this->game[$id] = $newGame;
        $this->totalPrice += round($game->PRICE*((100-$game->SALE)/100), 2);
        $this->totalQuanty++;
    }
    public function DeleteItemCart($id){
        $this->totalQuanty -= $this->game[$id]['quanty'];
        $this->totalPrice -= $this->game[$id]['price'];
        unset($this->game[$id]);
    }

    public function decreaseItemQuantity($game, $id){
        $newGame = ['quanty' => 0 , 'price'=>$game->PRICE*((100-$game->SALE)/100),'gameInfor'=>$game ,'img'=>$game->getIntroduceImageDirectory()];
        if($this->game){
            if(array_key_exists($id,$this->game)){
                $newGame = $this->game[$id];
            }
        }
        if($newGame['quanty'] > 0){
            $newGame['quanty']--;
            $newGame['price'] = round($newGame['quanty']*$game->PRICE*((100-$game->SALE)/100), 2);

            $this->game[$id] = $newGame;
            $this->totalPrice -= round($game->PRICE*((100-$game->SALE)/100), 2);
            $this->totalQuanty--;
        }
    }

    public function UpdateQuantity($id,$quanty){
        $this->totalQuanty -= $this->game[$id]['quanty'];
        $this->totalPrice -= $this->game[$id]['price'];

        $this->game[$id]['quanty'] = $quanty;
        $this->game[$id]['price'] = $quanty *  $this->game[$id]['gameInfor']->PRICE;

        $this->totalQuanty += $this->game[$id]['quanty'];
        $this->totalPrice += $this->game[$id]['price'];
    }
    public function getGame($id){
        $gameIdValue = cart_item::where("CART_ID", "=", $id)->pluck("GAME_ID")->all();
        $game = game::whereIn("ID", $gameIdValue)->get();
        return $game;
    }
    public function  getTotalPrice($id){
        $gameQuantity = cart_item::where("CART_ID", "=", $id)->pluck("GAME_QUANTITY")->all();
        $gameIdValue = cart_item::where("CART_ID", "=", $id)->pluck("GAME_ID")->all();
        $priceOfGame = game::whereIn("ID", $gameIdValue)->pluck("PRICE")->all();
        $saleOfGame = game::whereIn("ID", $gameIdValue)->pluck("SALE")->all();
        $totalPrice = 0;
        for ($i=0; $i < count($gameQuantity); $i++) {
            $total= $gameQuantity[$i] * ( $priceOfGame[$i] - (($priceOfGame[$i]*$saleOfGame[$i])/100) ) ;
            $totalPrice = $totalPrice + $total;
        }
        return round($totalPrice,2)." $";

    }

    public function getItemCart($id){
        $getItemCart = cart_item::where("CART_ID", "=", $id)->get();
        return  $getItemCart;
    }
}

