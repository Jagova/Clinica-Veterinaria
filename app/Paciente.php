<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public function dueno()
    {
        return $this->belongsTo('App\Dueno');
    }
    public function Clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
}
