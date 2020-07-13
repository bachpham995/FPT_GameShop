<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReflectionClass;
use ReflectionClass as GlobalReflectionClass;

class GameShopController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function checkLog(Request $request){
        $email = $request->input('emailLogin');
        $pass = $request->input('passwordLogin');

        $user = DB::table('user')->where('EMAIL',$email)->first();
        if(!empty($user) && $user->PASSWORD == $pass){
            $request->session()->push('user',$user);
            if($user->TYPE == 1){
                return redirect("admin/home");
            }else{
                return redirect("user/details");
            }
        }else{
            return redirect('login');
        }
    }

    public function adminHome(){
        $users = DB::table('user')->get();
        return view('admin.member.home')->with(["users"=>$users]);
    }
}
