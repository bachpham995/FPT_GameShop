<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_image extends Model
{
    protected $table = "game_image";
    protected $fillable = ['URL','created_at','updated_at'];
}
