<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "user";
    protected $fillable = ['TYPE','FNAME','LNAME','EMAIL','PASSWORD','ADDRESS','PHONE','RESET_TOKEN','updated_at','created_at'];

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
