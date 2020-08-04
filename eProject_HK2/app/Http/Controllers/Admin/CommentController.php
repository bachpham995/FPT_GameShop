<?php

namespace App\Http\Controllers\Admin;

use App\comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\game;

class CommentController extends Controller
{
    public function comment($id, Request $request){
        $game = game::find($id);
        $crrTime = time();
        $newComment = new comment();
        $newComment->GAME_ID = $id;
        $newComment->USER_ID = $request['user_id'];
        $newComment->RATING = $request['rating'];
        $newComment->DESCRIPTION = $request['description'];
        $newComment->created_at = $crrTime;
        $newComment->save();

        return view('client.viewComment',['game'=> $game],['page'=>1]);
    }

    public function goToPage($id, Request $request){
        $game = game::find($id);
        return view('client.viewComment',['game'=>$game],['page'=>$request['page']]);
    }
}
