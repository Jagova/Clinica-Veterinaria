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
        $articulosPerros = \App\articulos::where('categoria_id', '=', 0 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }

    public function shopGatos()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }

    public function shopMamiferos()
    {
        //Categoria peuqeñas especies
        $articulosMamiferos = \App\articulos::where('categoria_id', '=', 5 )->get();
        
        return view('shop.mamiferos.index',
        [
            'articulosMamiferos'=>$articulosMamiferos,
        ]
        );
    }

    public function shopAves()
    {
        //Categoria aves
        $articulosAves = \App\articulos::where('categoria_id', '=', 2 )->get();
        
        return view('shop.aves.index',
        [
            'articulosAves'=>$articulosAves,
        ]
        );
    }

    public function shopReptiles()
    {
        //Categoria reptiles
        $articulosReptiles = \App\articulos::where('categoria_id', '=', 3 )->get();
        
        return view('shop.reptiles.index',
        [
            'articulosReptiles'=>$articulosReptiles,
        ]
        );
    }

    public function shopPeces()
    {
        //Categoria perros
        $articulosPeces = \App\articulos::where('categoria_id', '=', 4 )->get();
        
        return view('shop.peces.index',
        [
            'articulosPeces'=>$articulosPeces,
        ]
        );
    }

    public function shopInsectos()
    {
        //Categoria perros
        $articulosInsectos = \App\articulos::where('categoria_id', '=', 6 )->get();
        
        return view('shop.insectos.index',
        [
            'articulosInsectos'=>$articulosInsectos,
        ]
        );
    }

    public function shopServicios()
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
