<?php

namespace App\Http\Controllers\User;

use App\game;
use App\Http\Controllers\Controller;
use App\cart;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function addCart(Request $request, $id)
    {

        $game = game::find($id);
        if ($game != null) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new cart($oldCart);
            $newCart->AddCart($game, $id);
            $request->session()->put('Cart', $newCart);
        }
        return view('client/cart', compact('newCart'));
    }
    public function deleteItemCart(Request $request, $id)
    {

        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (count($newCart->game) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
        return view('client/cart');
    }
    public function deleteItemListCart(Request $request, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (count($newCart->game) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
        return view('client/listCart');
    }
    public function updateQuantity(Request $request,$id,$quantity)
    {
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new cart($oldCart);
        $newCart->UpdateQuantity($id,$quantity);
        $request->session()->put('Cart', $newCart);

        return view('client/listCart');
    }
    public function viewListCart()
    {
        return view('client/cartView');
    }
    public function viewCheckout()
    {
        return view('client/demo');
    }
}
