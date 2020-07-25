<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "user";
    protected $fillable = ['TYPE','FNAME','EMAIL','PASSWORD','ADDRESS','PHONE','updated_at','created_at'];

    function UserType(){
        switch ($this->TYPE) {
            case 0:
                return "Supervisor";
                break;

            case 1:
                return "Admin";
                break;

            case 2:
                return "User";
                break;

            default:
                # code...
                break;
        }
    }

}
