<?php

namespace App\Http\Controllers;

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

        $type = 0;
        $fname = $request->input('txtFirstName');
        $lname = $request->input('txtLastName');
        $email = $request->input('txtEmail');
        $phone = $request->input('txtPhone');
		$address = $request->input('txtAdress');
        // $accountName = $request->input('txtAccountName');
        $accountPass = $request->input('txtAccountPass');
		$confirmPass = $request->input('txtConfirmPass');
        $status = 1;
        
        DB::table('user')->insert([

            'type' => $type,
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            // 'username' => $accountName,
            'password' => $accountPass,
            'status' => $status
        ]);
        // not finish yet
        return redirect()->action('UserController@myAccount');
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
                return redirect("/");
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
