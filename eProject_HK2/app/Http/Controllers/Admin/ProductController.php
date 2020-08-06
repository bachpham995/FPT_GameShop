<?php

namespace App\Http\Controllers\Admin;

use App\comment;
use App\Http\Controllers\Controller;

use App\game;
use App\game_category;
use App\game_image;
use App\game_producer;
use App\game_publisher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

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
        try{
            $product = $request->all();
            $newGame = new game();
            $newGame->NAME = $product['NAME'];
            $newGame->DESCRIPTION = $product['DESCRIPTION'];
            $newGame->FEATURE = $product['FEATURE'];
            $newGame->STATUS = $product['STATUS'];
            $newGame->PRICE = $product['PRICE'];
            $newGame->SALE = $product['SALE'];
            $newGame->LINKDOWNLOAD = $product['LINKDOWNLOAD'];
            $newGame->LINKDEMO = $product['LINKDEMO'];
            $newGame->AGE_REQ = $product['AGE'];
            $newGame->CPU = $product['CPU'];
            $newGame->GPU = $product['GPU'];
            $newGame->OS = $product['OS'];
            $newGame->STORAGE = $product['STORAGE'];
            $newGame->RAM = $product['RAM'];
            $newGame->ID = $newGame->nextID();
            $newGame->save();

            foreach( $product['CATEGORY'] as $cate){
                $game_category = new game_category();
                $game_category->GAME_ID = $newGame->ID;
                $game_category->CATEGORY_ID = $cate;
                $game_category->save();
            }

            foreach( $product['PRODUCER'] as $producer){
                $game_producer = new game_producer();
                $game_producer->GAME_ID = $newGame->ID;
                $game_producer->PRODUCER_ID = $producer;
                $game_producer->save();
            }

            foreach( $product['PUBLISHER'] as $publisher){
                $game_publisher = new game_publisher();
                $game_publisher->GAME_ID = $newGame->ID;
                $game_publisher->PUBLISHER_ID = $publisher;
                $game_publisher->save();
            }
        }catch (\Throwable $th) {
            DB::rollback();
            return redirect()->action('Admin\ProductController@create');
        }

        return redirect()->action('Admin\ProductController@home');
    }
    public function delete($id){
            game::where("ID",$id)->delete();
            return redirect()->action('Admin\ProductController@home');
    }

    public function deleteComment($id){
        comment::where("ID",$id)->delete();
        return redirect()->back();
    }

    public function image($id){
        $images = game_image::where('GAME_ID','=',$id)->get();
        return view('admin.products.images')->with(["images"=>$images]);
    }

    public function deleteImage($id){
        game_image::where("ID",$id)->delete();
        return redirect()->back();
    }

    public function update($id){
        $product = game::find($id);
        return view('admin.products.update')->with(["product"=>$product]);
    }

    public function view($id){
        $product = game::find($id);
        return view('admin.products.view')->with(["product"=>$product]);
    }

    public function comment($id){
        $comments = comment::where('GAME_ID','=',$id)->get();

        return view('admin.products.comments')->with(["comments"=>$comments]);
    }

    public function postUpdate(Request $request,$id){
        $product = $request->all();
        DB::table('game')
              ->where('ID', $id)
              ->update(['NAME' => $product['NAME'],
                'DESCRIPTION' => $product['DESCRIPTION'],
                'FEATURE' => $product['FEATURE'],
                'STATUS' => $product['STATUS'],
                'PRICE' => $product['PRICE'],
                'SALE' => $product['SALE'],
                'LINKDOWNLOAD' => $product['LINKDOWNLOAD'],
                'LINKDEMO' => $product['LINKDEMO'],
                'AGE_REQ' => $product['AGE'],
                'CPU' => $product['CPU'],
                'GPU' => $product['GPU'],
                'OS' => $product['OS'],
                'STORAGE' => $product['STORAGE'],
                'RAM' => $product['RAM']
                ]);
        game_category::where('GAME_ID','=',$id)->delete();
        game_producer::where('GAME_ID','=',$id)->delete();
        game_publisher::where('GAME_ID','=',$id)->delete();

        if(isset($product['CATEGORY']) ){
            foreach($product['CATEGORY'] as $cate){
                $game_category = new game_category();
                $game_category->GAME_ID = $id;
                $game_category->CATEGORY_ID = $cate;
                $game_category->save();
            }
        }

        if(isset($product['PRODUCER'])){
            foreach($product['PRODUCER'] as $producer){
                $game_producer = new game_producer();
                $game_producer->GAME_ID = $id;
                $game_producer->PRODUCER_ID = $producer;
                $game_producer->save();
            }
        }
        if(isset($product['PUBLISHER'])){
            foreach($product['PUBLISHER'] as $publisher){
                $game_publisher = new game_publisher();
                $game_publisher->GAME_ID = $id;
                $game_publisher->PUBLISHER_ID = $publisher;
                $game_publisher->save();
            }
        }

        return redirect()->action('Admin\ProductController@home');
    }
}
