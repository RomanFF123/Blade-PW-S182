<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbook=libro::all();
        return view('libros.index', compact('allbook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo =$request->txtTit;
        $addLibro->autor =$request->txtAut;
        $addLibro->paginas =$request->txtPag;
        $addLibro->anio =$request->txtAnio;
        $addLibro->save();

        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $uptlibro= libro::find($id);
        $uptLibro->titulo =$request->txtTit;
        $uptLibro->autor =$request->txtAut;
        $uptLibro->paginas =$request->txtPag;
        $uptLibro->anio =$request->txtAnio;
        $uptLibro->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $deslibro= libro::find($id);
    $deslibro= delete();
    return redirect()->back();

    }
}
