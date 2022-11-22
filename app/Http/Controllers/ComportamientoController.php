<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComportamientoController extends Controller
{
    public function __invoke(){
        return view("vusuario.prueba-comportamiento");
    }
   
}
