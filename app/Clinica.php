<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    //
    public function personalizados()
     {
         return $this->hasMany('App\Doctor');
     }

     public function servicios()
     {
         return $this->hasMany('App\Servicio');
     }
}
