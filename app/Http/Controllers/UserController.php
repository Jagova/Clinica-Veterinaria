<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    //
    public function logout()
    {        
        Auth::logout();
        return redirect('/');
    }

    public function shopPerros()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 1 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }
}
