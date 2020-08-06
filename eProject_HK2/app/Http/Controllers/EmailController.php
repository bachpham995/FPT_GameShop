<?php

namespace App\Http\Controllers;

use App\Mail\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public static function sendChangePasswordEmail($user, $token)
    {

        //  ['receiver'=>$user->FNAME,'url' => $token];
         $emailParam = new \stdClass();
         $emailParam->receiver = $user->FNAME;
         $emailParam->url = $token;
         $newEmail = new EmailService($emailParam);
         $newEmail->emailParam = $emailParam;
         //$newEmail->build($emailParam);
        //  dd($newEmail);
        Mail::to($user->EMAIL)->send($newEmail);

        if (Mail::failures()) {
            return view('client.index');
        }
    }
}
