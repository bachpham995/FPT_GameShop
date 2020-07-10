<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producer extends Model
{
    protected $table = "producer";
    protected $fillable = ['NAME','created_at','updated_at'];
}
