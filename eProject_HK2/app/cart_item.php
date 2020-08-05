<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_item extends Model
{
    protected $table = "cart_item";
    public $incrementing = false;
    protected $fillable = ['GAME_QUANTITY','DISCOUNT','created_at','updated_at'];

    public function game(){
        $game = game::find($this->GAME_ID);
        return $game;
    }
    public function cart(){
        $cart = cart::find($this->CART_ID);
        return $cart;
    }
}
