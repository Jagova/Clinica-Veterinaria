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
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }

    public function shopPerrosAlimento()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->where('subcategoria_id', '=', 1 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }

    public function shopPerrosSuplementos()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->where('subcategoria_id', '=', 2 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }

    public function shopPerrosCamas()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->where('subcategoria_id', '=', 4 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }

    public function shopPerrosJuguetes()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->where('subcategoria_id', '=', 5 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }

    public function shopPerrosTransportadoras()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->where('subcategoria_id', '=', 6 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }

    public function shopPerrosRopa()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->where('subcategoria_id', '=', 7 )->get();
        
        return view('shop.perros.index',
        [
            'articulosPerros'=>$articulosPerros,
        ]
        );
    }
    public function shopPerrosHigiene()
    {
        //Categoria perros
        $articulosPerros = \App\articulos::where('categoria_id', '=', 2 )->where('subcategoria_id', '=', 8 )->get();
        
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

    public function shopGatosAlimento()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 1 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }

    public function shopGatosPremios()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 3 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }
    public function shopGatosSuplementos()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 2 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }
    public function shopGatosCamas()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 4 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }

    public function shopGatosJuguetes()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 5 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }
    public function shopGatosTransportadoras()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 6 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }
    public function shopGatosMuebles()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 9 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }
    public function shopGatosHigiene()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 8 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }
    public function shopGatosRopa()
    {
        //Categoria gatos
        $articulosGatos = \App\articulos::where('categoria_id', '=', 1 )->where('subcategoria_id', '=', 7 )->get();
        
        return view('shop.gatos.index',
        [
            'articulosGatos'=>$articulosGatos,
        ]
        );
    }
    public function shopMamiferos()
    {
        //Categoria peuqeñas especies
        $articulosMamiferos = \App\articulos::where('categoria_id', '=', 6 )->get();
        
        return view('shop.mamiferos.index',
        [
            'articulosMamiferos'=>$articulosMamiferos,
        ]
        );
    }
    public function shopMamiferosAlimento()
    {
        //Categoria peuqeñas especies
        $articulosMamiferos = \App\articulos::where('categoria_id', '=', 6 )->where('subcategoria_id', '=', 1 )->get();
        
        return view('shop.mamiferos.index',
        [
            'articulosMamiferos'=>$articulosMamiferos,
        ]
        );
    }
    public function shopMamiferosTransportadoras()
    {
        //Categoria peuqeñas especies
        $articulosMamiferos = \App\articulos::where('categoria_id', '=', 6 )->where('subcategoria_id', '=', 6 )->get();
        
        return view('shop.mamiferos.index',
        [
            'articulosMamiferos'=>$articulosMamiferos,
        ]
        );
    }
    public function shopAves()
    {
        //Categoria aves
        $articulosAves = \App\articulos::where('categoria_id', '=', 3 )->get();
        
        return view('shop.aves.index',
        [
            'articulosAves'=>$articulosAves,
        ]
        );
    }
    public function shopAvesAlimento()
    {
        //Categoria aves
        $articulosAves = \App\articulos::where('categoria_id', '=', 3 )->where('subcategoria_id', '=', '1')->get();
        
        return view('shop.aves.index',
        [
            'articulosAves'=>$articulosAves,
        ]
        );
    }
    public function shopAvesTransportadoras()
    {
        //Categoria aves
        $articulosAves = \App\articulos::where('categoria_id', '=', 3 )->where('subcategoria_id', '=', '6')->get();
        
        return view('shop.aves.index',
        [
            'articulosAves'=>$articulosAves,
        ]
        );
    }


    public function shopReptiles()
    {
        //Categoria reptiles
        $articulosReptiles = \App\articulos::where('categoria_id', '=', 4 )->get();
        
        return view('shop.reptiles.index',
        [
            'articulosReptiles'=>$articulosReptiles,
        ]
        );
    }
    public function shopReptilesAlimento()
    {
        //Categoria reptiles
        $articulosReptiles = \App\articulos::where('categoria_id', '=', 4 )->where('subcategoria_id', '=', 1 )->get();
        
        return view('shop.reptiles.index',
        [
            'articulosReptiles'=>$articulosReptiles,
        ]
        );
    }
    public function shopReptilesTransportadoras()
    {
        //Categoria reptiles
        $articulosReptiles = \App\articulos::where('categoria_id', '=', 4 )->where('subcategoria_id', '=', 6 )->get();
        
        return view('shop.reptiles.index',
        [
            'articulosReptiles'=>$articulosReptiles,
        ]
        );
    }

    public function shopPeces()
    {
        //Categoria perros
        $articulosPeces = \App\articulos::where('categoria_id', '=', 5 )->get();
        
        return view('shop.peces.index',
        [
            'articulosPeces'=>$articulosPeces,
        ]
        );
    }

    public function shopPecesAlimento()
    {
        //Categoria perros
        $articulosPeces = \App\articulos::where('categoria_id', '=', 5 )->where('subcategoria_id', '=', 1 )->get();
        
        return view('shop.peces.index',
        [
            'articulosPeces'=>$articulosPeces,
        ]
        );
    }

    public function shopPecesAcuarios()
    {
        //Categoria perros
        $articulosPeces = \App\articulos::where('categoria_id', '=', 5 )->where('subcategoria_id', '=', 10 )->get();
        
        return view('shop.peces.index',
        [
            'articulosPeces'=>$articulosPeces,
        ]
        );
    }
    public function shopPecesAccesorios()
    {
        //Categoria perros
        $articulosPeces = \App\articulos::where('categoria_id', '=', 5 )->where('subcategoria_id', '=', 11 )->get();
        
        return view('shop.peces.index',
        [
            'articulosPeces'=>$articulosPeces,
        ]
        );
    }
    public function shopInsectos()
    {
        //Categoria perros
        $articulosInsectos = \App\articulos::where('categoria_id', '=', 7 )->get();
        
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


        public function shopReportes()
        {
        //
        $reportesPerdidos = \App\Reporte::all();
        
        return view('shop.reportes.index_reportes',
        [
            'reportesPerdidos'=>$reportesPerdidos,
        ]
        );
    }
}
