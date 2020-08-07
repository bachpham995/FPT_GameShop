<?php

namespace App\Http\Controllers\Admin;

use App\comment;
use App\Http\Controllers\Controller;

use App\game;
use App\game_category;
use App\game_image;
use App\game_producer;
use App\game_publisher;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
        return view('admin.products.images',["id"=>$id,"images"=>$images]);
    }

    public function createImage($id){
        return view('admin.products.createImage')->with('id', $id);
    }

    public function postCreateImage(Request $request, $id){
        if ($request->hasFile('IMAGE')) {
            $file = $request['IMAGE'];
            $cover = $request['COVER'];

            $game = game::find($id);
            $newImage = new game_image();
            $newImageID = $newImage->nextID();

            $newName = Str::random(30).'.'.$file->getClientOriginalExtension();
            $file->move('img/product',$newName);
            $newImage->URL = '/img/product/'.$newName;

            if($cover == '1'){
                game_image::where('GAME_ID','=',$id)->update(['COVER'=>'0']);
            }
            $newImage->COVER = $cover;
            $newImage->GAME_ID = $id;
            $newImage->created_at = time();
            $newImage->ID = $newImageID;
            $newImage->save();

            $images = game_image::where('GAME_ID','=',$id)->get();
            return redirect()->action('Admin\ProductController@image', ["id"=>$id,"images"=>$images]);
        }
    }

    public function updateImage($id){
        $image = game_image::find($id);
        return view('admin.products.updateImage')->with('image', $image);
    }

    public function postUpdateImage(Request $request, $id){
        $image = game_image::find($id);
        $images = game_image::where('GAME_ID','=',$image->GAME_ID)->get();
        $cover = $request['COVER'];
        $newURL = "";
        if ($request->hasFile('IMAGE')) {
            $file = $request['IMAGE'];
            //Delete Old Image
            $path_file = "img/".baseName($image->URL);
            if(File::exists($path_file)) {
                File::delete($path_file);
            }

            $newName = Str::random(30).'.'.$file->getClientOriginalExtension();
            $file->move('img/product',$newName);
            $newURL = '/img/product/'.$newName;

        }else{
            $newURL = $image->URL;
        }

        if($cover == '1'){
            game_image::where('GAME_ID','=',$image->GAME_ID)->update(['COVER'=>'0']);
        }

          $success = $image->where('ID',$id)
                    ->update(['URL'=>$newURL, 'COVER'=>$cover]);
        return redirect()->action('Admin\ProductController@image', ["id"=>$image->GAME_ID,"images"=>$images]);
    }

    public function deleteImage($id){
        // dd(File::get("img/".baseName(game_image::find($id)->URL)));
        $path_file = "img/".baseName(game_image::find($id)->URL);
        if(File::exists($path_file)) {
            File::delete($path_file);
        }
        //dd($imgFile);

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
