<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public function clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
}
