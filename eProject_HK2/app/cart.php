<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "cart";
    protected $fillable = ['ORDER_DATE','PAID','created_at','updated_at'];
}
