<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    //
    public function Clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
    public function Doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
