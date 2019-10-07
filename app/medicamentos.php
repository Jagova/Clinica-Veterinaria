<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamentos extends Model
{
    	public function clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
}
