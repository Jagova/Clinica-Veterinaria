<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public function clinica()
    {
        return $this->hasMany('App\Clinica');
    }
}
