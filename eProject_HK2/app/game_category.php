<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_category extends Model
{
    protected $table = "game_category";
    protected $primaryKey = ['GAME_ID', 'CATEGORY_ID'];
    public $incrementing = false;
}