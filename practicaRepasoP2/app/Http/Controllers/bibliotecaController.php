<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class bibliotecaController extends Controller
{
    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoInicio(){
        return view('welcome');
    }
}
