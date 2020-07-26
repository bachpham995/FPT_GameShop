<?php

namespace App\Http\Controllers\User;

use App\cart;
use App\game;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class CartController extends Controller
{
   public function addCart($id){
        $game = game::find($id);
        if($game != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new cart($oldCart);
        }
   }
}
