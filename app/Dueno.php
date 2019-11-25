<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    //
    public function Pacientes()
     {
         return $this->hasMany('App\Paciente');
     }

     public function User()
    {
        return $this->belongsTo('App\User');
    }
}
