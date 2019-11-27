<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    public function Clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
}
