@extends('layouts.plantilla')

@section('titulo','Recurdos')
@section('contenido')
    <h1 class="display-1 text-center text-danger mt-5"> Recuerdos </h1>    
    <div class="container">
        
    @foreach ($consultaRecuerdos as $recuerdo)
        
    <div class="card w-50 mt-5">
        <div class="card-body">
          <h5 class="card-title">{{$recuerdo->titulo}} </h5>
          <p class="card-text">{{$recuerdo->fecha}}  </p>
          <p class="card-text">{{$recuerdo->recuerdo}} </p>
          <a href="#" class="btn btn-warning">Editar</a>
          <a href="#" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
      @endforeach
    </div> {{-- Contenedor --}}
    @endsection