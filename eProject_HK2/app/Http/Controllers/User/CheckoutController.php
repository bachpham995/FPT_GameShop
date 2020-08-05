<?php

namespace App\Http\Controllers\User;

use App\game;
use App\Http\Controllers\Controller;
use App\cart;
use App\cart_item;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{

    public function checkLoginWhenCheckout(){

        $user = session('user');
        // dd($user);
        if($user == null){
        return view('client/login');
        }
        return view('client/checkout')->with(["user"=>$user]);
    }
    public function checkout(){
        return view('client/checkout');
    }



    public function goBill(Request $request){
        $t=time();
        $user = session('user')->get()->first();
        $cartNow = session('Cart') ? session('Cart') : null;
        $cart = cart::newItem( $cartNow);
        $cart->USER_ID = $user->ID;
        $cart->ORDER_DATE = date("Y-m-d",$t);
        $cart->PAID = 1;
        if( $cartNow != null){
            $arrayGame = $cartNow->game;
            $userCartArr = new Collection();
            foreach ($arrayGame as $g) {
                $cart_item = new cart_item();
                $cart_item->GAME_ID = $g['gameInfor']->ID;
                $cart_item->GAME_QUANTITY= $g['quanty'];
                $cart_item->DISCOUNT= $g['gameInfor']->SALE;
                $userCartArr->add($cart_item);
            }
            $cart->save();
            foreach ($userCartArr as $cartItem) {
                $cartItem->CART_ID = $cart->id;
                $cartItem->save();
            }
            // dd(DB::table('cart_item')->where('CART_ID',31)->get());
            $request->session()->forget('Cart');
            return view('client/bill')->with(["user"=>$user ,"cart"=>$cart]);
        }
        return view('client/bill')->with(["user"=>$user ,"cart"=>null]);
    }

    public function goBack(){
        return redirect("index")->with('success','Login success');
    }


}
