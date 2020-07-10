<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    protected $table = "game";
    protected $fillable = ['NAME','DESCRIPTION','RATING','STATUS','PRICE','KEY','SALE','created_at','updated_at'];
}
