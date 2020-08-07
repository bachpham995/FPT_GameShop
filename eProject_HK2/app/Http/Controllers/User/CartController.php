<?php

namespace App\Http\Controllers\User;

use App\cart;
use App\game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addCart(Request $request, $id)
    {
        $game = game::find($id);
        if ($game != null) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = cart::newItem($oldCart);
            $newCart->AddCartItem($game, $id);
            $request->session()->put('Cart', $newCart);
        }
        return view('client/cart', compact('newCart'));
    }

    public function decreaseQuantity(Request $request, $id)
    {
        $game = game::find($id);
        if ($game != null) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $oldCart->decreaseItemQuantity($game, $id);
        }
        return view('client/cartView');
    }

    public function deleteItemCart(Request $request, $id)
    {

        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = cart::newItem($oldCart);
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
        // dd($id);
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = cart::newItem($oldCart);
        // dd(1);
        $newCart->DeleteItemCart($id);

        if (count($newCart->game) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
        return view('client/listCart');
    }
    public function updateQuantity(Request $request)
    {
        dd($request);
    }
    public function viewListCart()
    {
        return view('client/cartView');
    }
    public function viewCheckout()
    {
        return view('client/checkout');
    }
}
