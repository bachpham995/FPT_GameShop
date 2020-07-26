<?php

namespace App\Http\Controllers\User;

use App\game;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $game = game::all();
        return view('index')->with(["game"=>$game]);
    }
    
}
