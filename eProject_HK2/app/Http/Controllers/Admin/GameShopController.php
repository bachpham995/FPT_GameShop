<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\game;
use App\Http\Requests\LoginRequest;
use App\user;
use Illuminate\Contracts\Session\Session;
use ReflectionClass as GlobalReflectionClass;

class GameShopController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function login(){
        return view('client.login');
    }

    public function products(){
        $products = game::all();
        return view('client.products', ['products'=>$products]);
    }
    public function contact(){
        return view('client.contact');
    }
    public function support(){
        return view('client.support');
    }
    public function register(){
        return view('client.register');
    }

    public function checkLog(LoginRequest $request){
        $email = $request->input('emailLogin');
        $pass = $request->input('passwordLogin');
        $request->session()->forget('user');

        $user = user::where('EMAIL',$email)->first();
        if(!empty($user) && $user->PASSWORD == $pass){
            $request->session()->put('user',$user);
            if($user->TYPE == 0){
                return redirect("supervisor/member/home")->with('success','Login success');
            }else if($user->TYPE == 1){
                return redirect("admin/products/home")->with('success','Login success');
            }else{
                return redirect("index")->with('success','Login success');
            }
        }else{
            return redirect('login')->with('message','Wrong email or password');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect('login');
    }

    public function viewAbout(){
        return view('client/About');
    }
    public function viewProductdetail($id){
        $game = game::find($id);
        return view('client/productDetail')->with(["game"=>$game]);
    }
}
