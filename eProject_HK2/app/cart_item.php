<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_item extends Model
{
    protected $table = "cart_item";
    protected $primaryKey = "CART_ITEM_ID";
    public $incrementing = true;
}