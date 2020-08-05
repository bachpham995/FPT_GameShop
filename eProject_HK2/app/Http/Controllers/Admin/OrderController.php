<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PublisherController extends Controller
{
    public function home()
    {
        $publisher = DB::table('cart');
        return view('admin.order.home')->with(["publisher" => $publisher]);
    }
    // public function create()
    // {
    //     return view('admin.publisher.create');
    // }
    // public function postCreate(Request $request)
    // { 
    //     $check = publisher::where("NAME",$request["NAME"])->count();
    //     if ($check != 0) {
    //         $validate = 'The publisher must not duplicate';
    //         return view('admin.publisher.create')->with(["validate" => $validate]);
    //     }
    //     $publisher = $request->all();
    //     $pls = new publisher($publisher);
    //     $pls->save();
    //     return redirect()->action('Admin\PublisherController@home');
    // }
    // public function delete($id)
    // {
    //     publisher::where("ID", $id)->delete();
    //     return redirect()->action('Admin\PublisherController@home');
    // }
    // public function update($id)
    // {
    //     $publisher = publisher::find($id);
    //     return view('admin.publisher.update')->with(["publisher" => $publisher]);
    // }
    // public function postUpdate(Request $request, $id)
    // {   
    //     $check = publisher::where("NAME",$request["NAME"])->count();
    //     if($check != 0){
            
    //         $validate = 'The publisher already exists on the database';
    //         return view('admin.publisher.create')->with(["validate" => $validate]);
    //     }
    //     $publisher = $request->all();
    //     $pls = publisher::where('ID', $id);
    //     $pls->update(['NAME' => $publisher['NAME']]);
    //     return redirect()->action('Admin\PublisherController@home');

    // }

}
