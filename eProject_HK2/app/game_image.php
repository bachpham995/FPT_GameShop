<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_image extends Model
{
    protected $table = "game_image";
    protected $fillable = ['URL','created_at','updated_at'];

    public function nextID(){
        $all = game_image::all();
        if(sizeof($all) == 0){
            return 1;
        }
        return game_image::all()->pluck("ID")->max() + 1;
    }
}
