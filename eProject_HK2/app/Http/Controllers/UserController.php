<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register (){
        return view ('user.register');
    }

    public function postRegister (Request $request) {
        $fname = $request->input('txtFirstName');
        $lname = $request->input('txtLastName');
        $email = $request->input('txtEmail');
        $phone = $request->input('txtPhone');
		$address = $request->input('txtAdress');
        $accountPass = $request->input('txtAccountPass');
        // login table
        $user = new user();
        $user->TYPE = 2;
        $user->FNAME = $fname;
        $user->LNAME = $lname;
        $user->EMAIL = $email;
        $user->PASSWORD = $accountPass;
        $user->ADDRESS = $address;
        $user->PHONE = $phone;
        $user->save();
        return redirect()->action('UserController@signin');
    }

    public function signin () {
        return view ('user.signin');
    }

    public function checkSignin (Request $request) {
        $accountEmail = $request->input('txtEmail');
        $accountPass = $request->input('txtAccountPass');

        $user = DB::table('user')->where('email', $accountEmail)->first();
        if ($user == null) {
            //
        } else {
            if ($user->PASSWORD != $accountPass) {
                //
            } else {
                $request->session()->put('customer', $user);
                return $this->userList();
            }
        }
    }

    public function userList () {
        $users = DB::table('user')->get();
        return view('user.userList')->with(['users' => $users]);
    }

    public function myAccount() {

    }

}
//  Date: July 11 2020
// Author : Do Thinh
// Note: 
