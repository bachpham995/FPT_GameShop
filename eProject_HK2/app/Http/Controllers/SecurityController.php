<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailForgetRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\RegisterRequests;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SecurityController extends Controller
{

    public function checkLog(LoginRequest $request)
    {
        $email = $request->input('emailLogin');
        $pass = $request->input('passwordLogin');
        $request->session()->forget('user');

        $user = user::where('EMAIL', $email)->first();

        if (!empty($user)) {
            $check = Hash::check($pass, $user->PASSWORD);
            if ($check) {
                $request->session()->put('user', $user);
                if ($user->TYPE == 0) {
                    return redirect("supervisor/member/home");
                } else if ($user->TYPE == 1) {
                    return redirect("admin/products/home");
                } else {
                    // $request->session()->forget('user');
                    $check = session('redirect');
                    if ($check != null) {
                        return redirect()->action('User\CartController@viewListCart');
                    } else {
                        return redirect("index");
                    }
                }
            } else {
                return redirect()->back()->with('message', 'Wrong email or password!');
            }
        } else {
            return redirect()->back()->with('message', 'Wrong email or password!');
        }
    }

    public function postRegister(RegisterRequests $request)
    {
        $emails = user::select('EMAIL')->get();
        $user = new user();
        $user->TYPE = 2;
        $user->FNAME = $request->firstName;
        $user->LNAME = $request->lastName;
        $user->EMAIL = $request->email;
        $user->PASSWORD = Hash::make($request->password);
        foreach ($emails as $email) {
            if ($request->email == $email->EMAIL) {
                return redirect()->back()->with('message', 'Email already exists! Please try another.');
            }
        }
        $user->save();
        return redirect('login');
    }
    public function forgetPassword()
    {
        return view('security.forgetForm');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('index');
    }
    public function getForgotPassword(EmailForgetRequest $request)
    {
        $result = user::where('EMAIL', $request->emailForget)->first();
    	if($result){
            user::where('EMAIL', $request->emailForget)->update(['RESET_TOKEN'=> Str::random(60)]);
            $user = user::where('EMAIL', $request->emailForget)->first();
            //Send email reset password.
            EmailController ::sendChangePasswordEmail($user, url('resetPassword')."/".$user->RESET_TOKEN);

            return redirect('/index');
    	} else {
    		return redirect()->back()->with('message','Email does not exist!');
    	}
    }

    public function resetPassword($token){
        $result = user::where('RESET_TOKEN',$token)->first();
        if($result){
    		return view('security.newPass',['results'=>$result]);
    	} else {
    		return "Wrong!!!";
    	}
    }

    public function newPass(PasswordResetRequest $request){
        $result = user::where('ID',$request->userId)->update(['PASSWORD'=>Hash::make($request->password),'RESET_TOKEN'=>null]);
        return redirect('/index');
    }
}
