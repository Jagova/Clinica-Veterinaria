<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
	public function clinica()
    {
        return $this->hasMany('App\Clinica');
    }
}
