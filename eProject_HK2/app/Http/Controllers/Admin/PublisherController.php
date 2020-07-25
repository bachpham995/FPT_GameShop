<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\publisher;
use App\user;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function home(){
        $publisher = publisher::all();
        return view('admin.publisher.home')->with(["publisher"=>$publisher]);
    }
    public function create(){
        return view('admin.publisher.create');
    }
    public function postCreate(Request $request){

            $publisher = $request->all();
            $pls = new publisher($publisher);
            $pls->save();
        return redirect()->action('PublisherController@home');
    }
    public function delete($id){
            publisher::where("ID",$id)->delete();
            return redirect()->action('PublisherController@home');
    }
    public function update($id){
        $publisher = publisher::find($id);
        return view('admin.publisher.update')->with(["publisher"=>$publisher]);
    }
    public function postUpdate(Request $request,$id){
            $publisher = $request->all();
            $pls = publisher::where('ID',$id);
            $pls->update(['NAME'=>$publisher['NAME']]);
            return redirect()->action('PublisherController@home');
    }
}
