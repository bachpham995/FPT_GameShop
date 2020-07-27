<?php

namespace App\Http\Controllers\User;

use App\game;
use App\Http\Controllers\Controller;
use App\cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{

    public function AddCart(Request $request, $id){
        
        $game = game::find($id);
        // $request->session()->forget('Cart');
        // $value = $request->session()->get('Cart');
        if($game != null){
           $oldCart = session('Cart')?session('Cart'):null;
           $newCart = new cart($oldCart);
           $newCart->AddCart($game,$id);
           $request->session()->put('Cart',$newCart);
        }
        return view('client/cart',compact('newCart'));
    }
}
