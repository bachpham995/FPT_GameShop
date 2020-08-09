<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\game;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class GameShopController extends Controller
{
    public function index(){
        $new_product = game::orderByDesc('created_at')->limit(10)->get();
        $sale_product = game::whereRaw('SALE <> 0',array(10))->get();
        $top10Product = game::join(DB::raw(
            '(SELECT A.GAME_ID, sum(A.GAME_QUANTITY)
             FROM cart_item A join cart B on A.CART_ID = B.ID join game C on A.GAME_ID = C.ID
             GROUP BY A.GAME_ID
             ORDER BY sum(A.GAME_QUANTITY) desc
             limit 10) TopProduct')
        ,function($join){
            $join->on('game.Id','=','TopProduct.GAME_ID');
        })->get();
        
        return view('client.index')->with(['newProduct' => $new_product, 'saleProduct' => $sale_product,'topProduct' => $top10Product]);
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
