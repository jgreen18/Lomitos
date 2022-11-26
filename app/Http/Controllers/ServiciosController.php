<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios(){
        return view("vusuario.servicios");
    }

    public function spa(){
        return view("vusuario.spa");
    }

    public function guarderia(){
        return view("vusuario.guarderia");
    }
    public function paseos(){
        return view("vusuario.paseos");
    }
    public function hoteleria(){
        return view("vusuario.hoteleria");
    }
    public function medicina(){
        return view("vusuario.medicina_preventiva");
    }
    public function domicilios(){
        return view("vusuario.cuidados_domicilio");
    }

}