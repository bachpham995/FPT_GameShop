<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comment";
    protected $fillable = ['ID','GAME_ID','USER_ID','DESCRIPTION','created_at','updated_at'];
}
