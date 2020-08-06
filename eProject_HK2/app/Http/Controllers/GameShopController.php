<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\game;

class GameShopController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function login(){
        return view('security.login');
    }
    
    public function register(){
        return view('security.register');
    }

    public function products(){
        $products = game::all();
        return view('client.products', ['products'=>$products]);
    }

    public function contact(){
        return view('client.contact');
    }
    public function support(){
        return view('client.support');
    }

    public function viewAbout(){
        return view('client/About');
    }
    public function viewProductdetail($id){
        $game = game::find($id);
        return view('client/productDetail')->with(["game"=>$game]);
    }
   
}
