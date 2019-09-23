<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    //
    public function personalizados()
     {
         return $this->hasMany('App\Paciente');
     }
}
