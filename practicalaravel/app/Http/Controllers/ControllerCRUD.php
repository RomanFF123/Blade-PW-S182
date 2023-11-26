<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;
use DB;
use Carbon\Carbon; 

class ControllerCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaRecuerdos= DB::table('tb_recuerdos')->get();
        return view('recuerdos',compact('consultaRecuerdos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormDiario $request)
    {
        DB::table('tb_recuerdos')->insert([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/recuerdo/create')->with('confirmacion', 'Recuerdo Almacenado en la Base de Datos');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorFormDiario $req, string $id)
    {
        DB::table('tb_recuerdos')->where('id',$id)->update([
            'titulo'=>$req->input('txtTitulo'),
            'recuerdo'=>$req->input('txtRecuerdo'),
            'updated_at'=>Carbon::now(),
        ]);
        return redirect('recuerdo/create')->with('confirmacion','Tu recuerdo modificado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    DB::table('tb_recuerdos')->where('id', $id)->delete();
    return redirect()->route('recuerdo.index')->with('confirmacion', 'Recuerdo eliminado exitosamente');
}
}
