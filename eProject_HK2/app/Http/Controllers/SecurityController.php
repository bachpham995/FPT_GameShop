<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\user;

class SecurityController extends Controller
{

    public function checkLog(LoginRequest $request){
        $email = $request->input('emailLogin');
        $pass = $request->input('passwordLogin');
        $request->session()->forget('user');

        $user = user::where('EMAIL',$email)->first();
        
        if(!empty($user)){
            $check = Hash::check($pass, $user->PASSWORD);
            if($check){
                $request->session()->put('user',$user);
                if($user->TYPE == 0){
                    return redirect("supervisor/member/home");    
                }else if($user->TYPE == 1){
                    return redirect("admin/products/home");
                }else{
                    return redirect("index");
                }
            }else{
                return redirect()->back()->with('message','Wrong email or password!');
            }
        }else{
            return redirect()->back()->with('message','Wrong email or password!');
        }
    }

    public function postRegister(RegisterRequests $request){
        $emails = user::select('EMAIL')->get();
        $user = new user();
        $user->TYPE = 2;
        $user->FNAME = $request->firstName;
        $user->LNAME = $request->lastName;
        $user->EMAIL = $request->email;
        $user->PASSWORD = Hash::make($request->password);
        foreach($emails as $email){
            if($request->email == $email->EMAIL){
                return redirect()->back()->with('message','Email already exists! Please try another.');
            }
        }
        $user->save();
        return redirect('login');
    }
    public function forgetPassword(){
        return view('security.forgetForm');
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect('login');
    }
    public function getForgotPassword(Request $request)
    {
        $result = user::where('EMAIL', $request->emailForget)->first();
    	if($result){
            $result2 = user::where('EMAIL', $request->emailForget)->update(['RESET_TOKEN'=> Str::random(60)]);
            $a = user::where('EMAIL', $request->emailForget)->first();
            return url('resetPassword')."/".$a->RESET_TOKEN;
    	} else {
    		return redirect()->back()->with('message','Email does not exist!');
    	}
    }
    public function resetPassword($token){
        $result = user::where('RESET_TOKEN', $token)->first();
    }
}
