<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_publisher extends Model
{
    protected $table = "game_publisher";
    public $incrementing = false;
    public function game(){
        $game = game::find($this->GAME_ID);
        return $game;
    }
    public function publisher(){
        $publisher = publisher::find($this->PUBLISHER_ID);
        return $publisher;
    }
}
