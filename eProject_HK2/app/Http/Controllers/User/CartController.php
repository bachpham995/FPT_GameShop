<?php

namespace App\Http\Controllers\User;

use App\game;
use App\Http\Controllers\Controller;
use App\cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function AddCart(Request $request, $id){
        $game = game::find($id);
        if($game != null){
           $oldCart = Session('Cart')?Session('Cart'):null;
           $newCart = new cart($oldCart);
           $newCart->AddCart($game,$id);
           $request->session()->put('Cart',$newCart);
            // dd($request);
        }
        return view('cart',compact('newCart'));
        // return view('admin.os.create');
    }
    // public function postCreate(Request $request){
    //     $os = $request->all();
    //     $o = new os($os);
    //     $o->save();
    //     return redirect()->action('OsController@home');
    // }

    
}
