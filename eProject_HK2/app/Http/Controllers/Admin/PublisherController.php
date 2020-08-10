<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function home()
    {
        $publishers = publisher::where('RETIRED','0')->get();
        return view('admin.publisher.home')->with(["publisher" => $publishers]);
    }
    public function create()
    {
        return view('admin.publisher.create');
    }
    public function postCreate(Request $request)
    { 
        $check = publisher::where("NAME",$request["NAME"])->count();
        if ($check != 0) {
            $validate = 'The publisher must not duplicate';
            return view('admin.publisher.create')->with(["validate" => $validate]);
        }
        $publisher = $request->all();
        $pls = new publisher($publisher);
        $pls->save();
        return redirect()->action('Admin\PublisherController@home');
    }
    public function delete($id)
    {
        $pls = publisher::where('ID', $id);
        $pls->update(['RETIRED' => '1']);
        return redirect()->action('Admin\PublisherController@home');
    }
    public function update($id)
    {
        $publisher = publisher::find($id);
        return view('admin.publisher.update')->with(["publisher" => $publisher]);
    }
    public function postUpdate(Request $request, $id)
    {   
        $check = publisher::where("NAME",$request["NAME"])->count();
        if($check != 0){
            
            $validate = 'The publisher already exists on the database';
            return view('admin.publisher.create')->with(["validate" => $validate]);
        }
        $publisher = $request->all();
        $pls = publisher::where('ID', $id);
        $pls->update(['NAME' => $publisher['NAME']]);
        return redirect()->action('Admin\PublisherController@home');

    }

}
