<?php

namespace App\Http\Controllers;

use App\producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function home(){
        $producer = producer::all();
        return view('admin.producer.home')->with(["producer"=>$producer]);
    }
    public function create()
    {
        return view('admin.producer.create');
    }
    public function postCreate(Request $request)
    {
        $producer = $request->all();
        $p = new producer($producer);
        $p->save();
        return redirect()->action('ProducerController@home');
    }
    public function update($id)
    {
        $producer = producer::find($id);
        return view('admin.producer.update')->with(["producer"=>$producer]);
    }
    public function postUpdate(Request $request,$id)
    {
       $producer = $request->all();
       $p = producer::where('ID',$id);
       $p->update(['NAME'=>$producer['NAME']]);
       return redirect()->action('ProducerController@home');
    }
}
