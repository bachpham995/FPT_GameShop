<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;
use App\game_category;
use App\Http\Controllers\GameShopController;
use ReflectionClass;

class game extends Model
{
    protected $table = "game";
    protected $fillable = ['NAME','DESCRIPTION','RATING','STATUS','PRICE','SALE','AGE_REQ','CPU','GPU','STORAGE','OS','RAM','LINKDOWLOAD','created_at','updated_at'];

    public function getCategories(){
        $game_categories = game_category::where("GAME_ID" , "=" ,$this->ID)->pluck("CATEGORY_ID")->all();
        $categories = category::whereIn("ID", $game_categories)->pluck("NAME")->all();
        return join(", ", $categories);
    }

    public function getProducers(){
        $game_producers = game_producer::where("GAME_ID" , "=" ,$this->ID)->pluck("PRODUCER_ID")->all();
        $producers = producer::whereIn("ID", $game_producers)->pluck("NAME")->all();
        return join(", ", $producers);
    }

    public function getPublishers(){
        $game_publisher = game_publisher::where("GAME_ID" , "=" ,$this->ID)->pluck("PUBLISHER_ID")->all();
        $publisher = publisher::whereIn("ID", $game_publisher)->pluck("NAME")->all();
        return join(", ", $publisher);
    }
}
