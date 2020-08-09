<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $table = "feedback";
    protected $fillable = ['NAME','SUBJECT','EMAIL','MESSAGE','created_at','updated_at'];
}
