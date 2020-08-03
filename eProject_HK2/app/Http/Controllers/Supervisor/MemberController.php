<?php

namespace App\Http\Controllers\Supervisor;
use App\Http\Controllers\Controller;

use App\user;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    public function home()
    {
        $member = user::all();
        return view('supervisor.member.home')->with(["users" => $member]);
    }

    public function initRegister () {
        $regInfo = (object)[];

        $regInfo->firstName = "";
        $regInfo->lastName = "";
        $regInfo->email = "";
        $regInfo->phone = "";
        $regInfo->address = "";
        
        return $regInfo;
    }

    public function create()
    {
        $regInfo = self::initRegister();

        return view('supervisor.member.create')->with(['regInfo' => $regInfo]);
    }

    public static function validateEmail ($email) {

    
        $checkEmail = User::where('EMAIL', $email)->count();

        if($checkEmail == 0){
            return false;
        }

        return true;
    }


    public function postCreate(Request $request)
    {   

        $mb = new user();
        $regInfo = self::initRegister();

        $email = $request['EMAIL'];
        $pass = $request['PASSWORD'];
        $conPass = $request['txtAccountConfirmPass'];

        $mb->FNAME = $request['FNAME'];
        $mb->LNAME = $request['LNAME'];
        $mb->ADDRESS = $request['ADDRESS'];
        $mb->PHONE = $request['PHONE'];
        $mb->TYPE = $request['TYPE'];
        $mb->PASSWORD = $request['PASSWORD'];

        $regInfo->firstName = $request['FNAME'];
        $regInfo->lastName = $request['LNAME'];
        $regInfo->email = $request['EMAIL'];
        $regInfo->phone = $request['PHONE'];
        $regInfo->address = $request['ADDRESS'];

        $mb->EMAIL = $email;

        if(self::validateEmail($email)){
            $invalidEmail = "This email has been already used!";
            return view('Supervisor.member.create')->with(['regInfo' => $regInfo,'invalidEmail' => $invalidEmail]);
            
        }
    
        if($pass != $conPass){
            $invalidPass = "*Confirm password does not match!";
            return view ('Supervisor.member.create')->with(['regInfo' => $regInfo, 'invalidPass' => $invalidPass]);
        }
        
        $mb->save();
        return redirect()->action('Supervisor\MemberController@home');
    }

    public function delete($id)
    {
        user::where("ID", $id)->delete();
        return redirect()->action('Supervisor\MemberController@home');
    }
    public function update($id)
    {
        $member = user::find($id);
        return view('supervisor.member.update')->with(["member"=>$member]);
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
        return redirect()->action('Supervisor\MemberController@home');
    }

    


}
