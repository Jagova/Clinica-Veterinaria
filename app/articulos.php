<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
	public function clinica()
    {
        return $this->belongsTo('App\Clinica');
    }
    
}
