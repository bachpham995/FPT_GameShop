<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\game;
use App\user;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        $products = game::all();
        return view('admin.products.home')->with(["products"=>$products]);
    }
    public function create(){
        return view('admin.products.create');
    }
    public function postCreate(Request $request){
            $product = $request->all();
            $pds = new game($product);
            $pds->save();
        return redirect()->action('Admin\ProductController@home');
    }
    public function delete($id){
            game::where("ID",$id)->delete();
            return redirect()->action('Admin\ProductController@home');
    }
    public function update($id){
        $product = game::find($id);
        return view('admin.products.update')->with(["product"=>$product]);
    }
    public function postUpdate(Request $request,$id){
            $product = $request->all();
            $pds = game::where('ID',$id);
            $pds->update(['NAME'=>$product['NAME']]);
            return redirect()->action('Admin\ProductController@home');
    }

}
