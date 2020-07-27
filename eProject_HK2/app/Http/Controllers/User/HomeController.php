<?php

namespace App\Http\Controllers\User;

use App\game;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $game = game::all();
        return view('client/demoIndex')->with(["game"=>$game]);
    }
}
