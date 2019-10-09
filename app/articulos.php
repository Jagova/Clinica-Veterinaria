<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
	public function clinica()
    {
        return $this->belongsTo('App\Clinica');
    }

        public function categoria()
    {
        return $this->belongsTo('App\categoria');
    }

            public function subcategoria()
    {
        return $this->belongsTo('App\subcategorias');
    }
    
}
