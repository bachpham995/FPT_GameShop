<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\user;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function home()
    {
        $member = user::all();
        return view('admin.member.home')->with(["users" => $member]);
    }
    public function create()
    {
        return view('admin.member.create');
    }
    public function postCreate(Request $request)
    {
        $mb = new user();
        $mb->FNAME = $request['FNAME'];
        $mb->LNAME = $request['LNAME'];
        $mb->EMAIL = $request['EMAIL'];
        $mb->ADDRESS = $request['ADDRESS'];
        $mb->PHONE = $request['PHONE'];
        $mb->TYPE = $request['TYPE'];
        $mb->save();
        return redirect()->action('MemberController@home');
    }
    public function delete($id)
    {
        user::where("ID", $id)->delete();
        return redirect()->action('MemberController@home');
    }
    public function update($id)
    {
        $member = user::find($id);
        return view('admin.member.update')->with(["member"=>$member]);
    }
    public function postUpdate(Request $request, $id)
    {
        $mb = user::where('ID', $id);
        $mb->update([
            'FNAME' => $request['FNAME'],
            'LNAME' => $request['LNAME'],
            'EMAIL' => $request['EMAIL'],
            'ADDRESS' => $request['ADDRESS'],
            'PHONE' => $request['PHONE'],
            'TYPE' => $request['TYPE'],
        ]);
        return redirect()->action('MemberController@home');
    }
}
