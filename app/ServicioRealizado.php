<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioRealizado extends Model
{
    //
    public function Clinica()
    {
        return $this->belongsTo('App\Clinica');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function Servicio()
    {
        return $this->belongsTo('App\Servicio');
    }
}
