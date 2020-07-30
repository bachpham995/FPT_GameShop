<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "cart";
    protected $fillable = ['ORDER_DATE','PAID','created_at','updated_at'];
    public $game = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart){
      if($cart){
            $this->game = $cart->game;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
      }
    }
    public function AddCart($game,$id){
        $newGame = ['quanty' => 0 , 'price'=>$game->PRICE,'gameInfor'=>$game ,'img'=>''];
        if($this->game){
            if(array_key_exists($id,$this->game)){
                $newGame = $this->game[$id];
            }
        }
        $newGame['img'] = game_image::where([["GAME_ID",'=', $id],['ID', '=',$id."_intro"]])->first()->URL;
        $newGame['quanty']++;
        $newGame['price'] = $newGame['quanty']*$game->PRICE;

        $this->game[$id] = $newGame;
        $this->totalPrice += $game->PRICE;
        $this->totalQuanty++;
    }
    public function DeleteItemCart($id){
        $this->totalQuanty -= $this->game[$id]['quanty'];
        $this->totalPrice -= $this->game[$id]['price'];
        unset($this->game[$id]);
    }
    public function UpdateQuantity($id,$quanty){
        $this->totalQuanty -= $this->game[$id]['quanty'];
        $this->totalPrice -= $this->game[$id]['price'];

        $this->game[$id]['quanty'] = $quanty;
        $this->game[$id]['price'] = $quanty *  $this->game[$id]['gameInfor']->PRICE;

        $this->totalQuanty += $this->game[$id]['quanty'];
        $this->totalPrice += $this->game[$id]['price'];
    }

}

