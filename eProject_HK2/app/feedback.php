<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $table = "feedback";
    protected $fillable = ['USER_ID','RATE','created_at','updated_at'];
}
