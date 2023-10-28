@extends('layouts.plantilla')

@section('titulo','inicio')

@section('contenido')
<p class="fs-1 text-danger">NEWS</p>
<div class="container mt-3 col-md-6">

<div class="card mb-3">
    <img src="{{ asset('images/imagen1.jpg') }}" alt="Mi imagen">
    <div class="card-body">
      <h5 class="card-title">Gobierno de Salta</h5>
      <p class="card-text">La Secretaría de las Mujeres presentará la producción literaria “Ellas hicieron”</p>
      <p class="card-text"><small class="text-body-secondary">Se trata de una colección de relatos sobre personalidades femeninas que fueron protagonistas de la historia. Nació en el marco del taller de lectura y escritura del organismo provincial: “Una voz que cuenta. Queremos decir y lo escribimos”.</small></p>
    </div>
  </div>
</div>
    @endsection
