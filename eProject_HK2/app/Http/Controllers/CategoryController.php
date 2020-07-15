<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function home()
    {
        $category = category::all();
        return view('admin.category.home')->with(["category"=>$category]);
    }
    public function create(){
        return view('admin.category.create');
    }
    public function postCreate(Request $request){
        $cetegory = $request->all();
        $c = new category($cetegory);
        $c->save();
        return redirect()->action('CategoryController@home');
    }
    public function update($id){
        $category = category::find($id);
        return view('admin.category.update')->with(["category"=>$category]);
    }
    public function postUpdate(Request $request,$id){
        $category = $request->all();
        $c = category::where('ID',$id);
        $c->update(['NAME'=>$category['NAME']]);
        return redirect()->action('CategoryController@home');
    }
    public function delete($id)
    {
        category::where("ID", $id)->delete();
        return redirect()->action('CategoryController@home');
    }
}
