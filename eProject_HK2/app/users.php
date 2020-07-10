<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "user";
    protected $fillable = ['TYPE','FNAME','EMAIL','PASSWORD','ADDRESS','PHONE','updated_at','created_at'];
}
