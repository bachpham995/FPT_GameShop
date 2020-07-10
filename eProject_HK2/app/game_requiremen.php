<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_requirement extends Model
{
    protected $table = "game_requirement";
    protected $fillable = ['AGE_REQ','CPU','GPU','STORAGE','OS','RAM','created_at','updated_at'];
}
