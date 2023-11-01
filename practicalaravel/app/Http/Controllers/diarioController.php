<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }
    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoRecuerdos(){
        return view('recuerdos');
    }
    public function metodoGuardar(validadorFormDiario $req){
        return redirect('/formulario')->with('confirmacion', 'tu recuerdo llefo al controlador');
    }


    public function store(Request $request)
{
  
    $nombreLibro = $request->input('nombre'); // Suponiendo que el nombre del libro proviene del formulario

    return redirect('/formulario')->route('formulario.create')->with('confirmacion', "Has guardado correctamente el libro \"$nombreLibro\"");
}
}
