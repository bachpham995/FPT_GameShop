<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use ReflectionClass as GlobalReflectionClass;

class GameShopController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function login(){
        return view('client.login');
    }

    public function checkLog(Request $request){
        $email = $request->input('emailLogin');
        $pass = $request->input('passwordLogin');

        $user = DB::table('user')->where('EMAIL',$email)->first();
        if(!empty($user) && $user->PASSWORD == $pass){
            $request->session()->push('user',$user);
            if($user->TYPE == 1){
                return redirect("admin/products/home");
            }else if($user->TYPE== 2){
                return redirect("client.index");
            }else{
                return redirect("supervisor/member/home");
            }
        }else{
            return redirect('client.login');
        }
    }
}
