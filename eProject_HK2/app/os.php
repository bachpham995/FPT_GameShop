<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class os extends Model
{
    protected $table = "os";
    protected $fillable = ['NAME','created_at','updated_at'];
}
