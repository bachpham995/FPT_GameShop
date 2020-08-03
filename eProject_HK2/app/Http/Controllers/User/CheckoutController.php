<?php

namespace App\Http\Controllers\User;

use App\game;
use App\Http\Controllers\Controller;
use App\cart;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    
    public function checkLoginWhenCheckout(){

        $user = session('user')?session('user')[0]:null;
        // dd($user);
        if($user == null){
        return view('client/login');
        }
        return view('client/checkout')->with(["user"=>$user]);
    }
    public function checkout(){
        return view('client/checkout');
    }
    public function gobill(){
        $user = session('user')?session('user')[0]:null;
        return view('client/checkout')->with(["user"=>$user]);
    }
    public function goBack(){
        return redirect()->action('User\HomeController@index');
    }
}
