<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vacunas extends Model
{
    public function Clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
}
