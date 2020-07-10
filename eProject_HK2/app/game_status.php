<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_status extends Model
{
    protected $table = "game_status";
    protected $fillable = ['NAME','created_at','updated_at'];
}
