<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    protected $table = "publisher";
    protected $primaryKey = 'ID';
    public $incrementing = true;
    protected $fillable = ['ID','NAME','created_at','updated_at'];
}
