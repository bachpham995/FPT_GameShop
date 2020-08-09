<?php

namespace App\Http\Controllers\User;

use App\cart;
use App\cart_item;
use App\game;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CheckoutController extends Controller
{
    public function checkLogin(){
        $check = session('redirect');
        if ($check  != null) {
            return redirect('/Checkout');
        }
        return redirect("index");
    }
    public function goCheckout(Request $request)
    {
        $request->session()->forget('redirect');
        $user = session('user');
        return view('client/checkout')->with(["user" => $user]);
    }
    public function checkout()
    {
        return view('client/checkout');
    }
    public function goBill(Request $request,$id)
    {
        $t = time();
        $user = user::find($id);
        $cartNow = session('Cart') ? session('Cart') : null;
        $cart = cart::newItem($cartNow);
        $cart->USER_ID = $user->ID;
        $cart->ORDER_DATE = date("Y-m-d", $t);
        $cart->PAID = 1;
        if ($cartNow != null) {
            $arrayGame = $cartNow->game;
            $userCartArr = new Collection();
            foreach ($arrayGame as $g) {
                $cart_item = new cart_item();
                $cart_item->GAME_ID = $g['gameInfor']->ID;
                $cart_item->GAME_QUANTITY = $g['quanty'];
                $cart_item->DISCOUNT = $g['gameInfor']->SALE;
                $userCartArr->add($cart_item);
            }
            $cart->save();
            foreach ($userCartArr as $cartItem) {
                $cartItem->CART_ID = $cart->id;
                $cartItem->save();
            }
            $request->session()->forget('Cart');
            return view('client/bill')->with(["user" => $user, "cart" => $cart]);
        }
        return view('client/bill')->with(["user" => $user, "cart" => null]);
    }

    public function goBack()
    {
        return redirect("index")->with('success', 'Login success');
    }

}
