<?php

namespace App\Http\Controllers;

use App\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisherHome(){
        $publisher = publisher::all();
        return view('admin.publisher.home')->with(["publisher"=>$publisher]);
    }
    public function create(){
        return view('admin.publisher.create');
    }
    public function publisherCreate(Request $request){

            $publisher = $request->all();
            $pls = new publisher($publisher);
            $pls->save();
        return redirect()->action('PublisherController@publisherHome');
    }
    public function delete($id){
            $pls = publisher::find($id);
            $pls->delete();
            return redirect()->action('PublisherController@publisherHome');
    }
}
