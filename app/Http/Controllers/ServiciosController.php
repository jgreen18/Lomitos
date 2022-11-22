<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function __invoke(){
        return view("vusuario.servicios");
    }
}