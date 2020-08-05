<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function home()
    {
        $cart = cart::all();
        return view('admin.order.home')->with(["cart" => $cart]);
    }
    public function viewDetail($id){
        $item = cart::getItemCart($id);
        return view('admin.order.detail')->with(["item"=>$item]);
    }
}
