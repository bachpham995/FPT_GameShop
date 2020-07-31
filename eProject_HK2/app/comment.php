<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class comment extends Model
{
    protected $table = "comment";
    protected $fillable = ['ID','GAME_ID','USER_ID','DESCRIPTION','created_at','updated_at'];

    function User(){
        $user = user::find($this->USER_ID);
        return $user->FNAME." ".$user->LNAME;
    }
}
