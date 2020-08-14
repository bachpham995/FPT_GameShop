<?php

namespace App\Http\Controllers\Admin;

use App\feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function home(){
        $message = feedback::orderByDesc('created_at')->get();
        return view('admin.feedback.home',['message'=>$message]);
    }
    public function detail($id){
        $message_content = feedback::find($id);
        return view('admin.feedback.detail')->with(['content'=> $message_content]);
    }
    public function sendMail(Request $request){
        $details = [
            'message'=> $request->message
        ];
        Mail::to($request->email)->send(new \App\Mail\ReplyMail($details));
        
        if (Mail::failures()) {
            return view('client.index');
        }

        return redirect()->back()->with('success','Send success!');
    }
    public function delete($id){
        feedback::where('ID',$id)->delete();
        return redirect()->back()->with('success','Delete successfully!');
    }
}
