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



}

