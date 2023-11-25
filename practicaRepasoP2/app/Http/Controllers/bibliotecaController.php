<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ValidadorFormBiblioteca;

class bibliotecaController extends Controller
{
    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoRegistrar(ValidadorFormBiblioteca $req){
        $libro = $req->input('txtTitulo');
        return redirect('/formulario')->with('confirmacion', "Todo correcto: Libro \"$libro\" guardado");
    }




}

