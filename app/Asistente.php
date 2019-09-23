<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    //
    public function clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
