<?php

namespace App\Http\Controllers\Admin;

use App\feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function home(){
        $message = feedback::all();
        return view('admin.feedback.home',['message'=>$message]);
    }
}
