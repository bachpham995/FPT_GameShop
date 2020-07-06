<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_requirement extends Model
{
    protected $table = "game_requirement";
    protected $primaryKey = "ID";
    public $incrementing = true;
}
