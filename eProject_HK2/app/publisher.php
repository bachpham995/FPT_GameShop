<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    protected $table = "publisher";
    public $incrementing = true;
    protected $fillable = ['NAME','created_at','updated_at'];
}
