<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_producer extends Model
{
    protected $table = "game_producer";
    public $incrementing = false;
    public function game(){
        $game = game::find($this->GAME_ID);
        return $game;
    }
    public function producer(){
        $producer = producer::find($this->PRODUCER_ID);
        return $producer;
    }
}
