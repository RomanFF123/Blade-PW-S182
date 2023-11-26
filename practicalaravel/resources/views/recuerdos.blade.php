@extends('layouts.plantilla')

@section('titulo','Recuerdos')
@section('contenido')
    <h1 class="display-1 text-center text-danger mt-5"> Recuerdos </h1>    
        
    @foreach ($consultaRecuerdos as $recuerdo)
    <div class='container px-5 mt-3'> 
    <div class="card w-50 mt-5">
        <div class="card-body">
          <h5 class="card-title">{{$recuerdo->titulo}} </h5>
          <p class="card-text">{{$recuerdo->fecha}}  </p>
          <p class="card-text">{{$recuerdo->recuerdo}} </p>
          <div class='mb-2 d-grid mx-auto'>
            <button type='button' class='btn btn-outline-success' data-bs-target='#editar{{ $recuerdo->id }}' data-bs-toggle='modal'>
              Editar
            </button>
          </div>
          <div class='mb-2 d-grid mx-auto'>
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{ $recuerdo->id }}">
            Eliminar
         </button>
        </div>

        </div>
      </div>
      
      @include('partials.modal')
      @include('partials.modal-delete', ['recuerdo' => $recuerdo])
      @endforeach
    </div>
    @endsection