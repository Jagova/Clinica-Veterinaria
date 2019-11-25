<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public function Clinica()
    {
        return $this->belongsTo('App\Clinica');
    }

    public function Pacientes()
     {
         return $this->hasMany('App\Paciente');
     }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
