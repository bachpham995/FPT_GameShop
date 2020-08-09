<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_category extends Model
{
    protected $table = "game_category";
    public $incrementing = false;
    public function game(){
        $game = game::find($this->GAME_ID);
        return $game;
    }
    public function category(){
        $category = category::find($this->CATEGORY_ID);
        return $category;
    }
}
