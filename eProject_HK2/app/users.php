<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "user";
    protected $primaryKey = "ID";
    //public $incrementing = false;
    protected $fillable = ['ID','TYPE','FNAME','EMAIL','PASSWORD','ADDRESS','PHONE','updated_at','created_at'];
}
