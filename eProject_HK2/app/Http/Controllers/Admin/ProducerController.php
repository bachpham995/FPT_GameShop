<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function home(){
        $producer = producer::where('RETIRED','0')->get();
        return view('admin.producer.home')->with(["producer"=>$producer]);
    }
    public function create()
    {
        return view('admin.producer.create');
    }
    public function postCreate(Request $request)
    {
        $check = producer::where("NAME",$request["NAME"])->count();
        if ($check != 0) {
            $validate = 'The publisher must not duplicate';
            return view('admin.producer.create')->with(["validate" => $validate]);
        }
        $producer = $request->all();
        $p = new producer($producer);
        $p->save();
        return redirect()->action('Admin\ProducerController@home');
    }
    public function update($id)
    {
        $producer = producer::find($id);
        return view('admin.producer.update')->with(["producer"=>$producer]);
    }
    public function postUpdate(Request $request,$id)
    {
        $check = producer::where("NAME",$request["NAME"])->count();
        if($check != 0){
            $validate = 'The producer already exists on the database';
            return view('admin.producer.create')->with(["validate" => $validate]);
        }
       $producer = $request->all();
       $p = producer::where('ID',$id);
       $p->update(['NAME'=>$producer['NAME']]);
       return redirect()->action('Admin\ProducerController@home');
    }
    public function delete($id)
    {
        $producer = producer::where('ID', $id);
        $producer->update(['RETIRED' => '1']);
        return redirect()->action('Admin\ProducerController@home');
    }
}
