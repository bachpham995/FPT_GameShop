<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\os;
use Illuminate\Http\Request;

class OsController extends Controller
{
    public function home(){
        $os = os::where('RETIRED','0')->get();
        return view('admin.os.home')->with(["os"=>$os]);
    }
    public function create(){
        return view('admin.os.create');
    }
    public function postCreate(Request $request){
        $os = $request->all();
        $o = new os($os);
        $o->save();
        return redirect()->action('Admin\OsController@home');
    }
    public function update($id){
        $os = os::find($id);
        return view('admin.os.update')->with(["os"=>$os]);
    }
    public function postUpdate(Request $request,$id){
            $os = $request->all();
            $o = os::where('ID',$id);
            $o->update(['NAME'=>$os['NAME']]);
            return redirect()->action('Admin\OsController@home');
    }
    public function delete($id)
    {
        $os = os::where('ID', $id);
        $os->update(['RETIRED' => '1']);
        return redirect()->action('Admin\OsController@home');
    }
}
