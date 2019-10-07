<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategorias extends Model
{
     public function personalizados()
     {
         return $this->hasMany('App\articulos');
     }
}
