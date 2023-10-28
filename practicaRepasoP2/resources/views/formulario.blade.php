@extends('layouts.plantilla')

@section('titulo', 'Registro de Libros')
@section('contenido')

<div class="container mt-6 col-md-6">
  <h1>Registro de Libros</h1>

  <form class="row g-3" method="POST" action="/registrar">
    @csrf
    <div class="col-md-6">
      <label class="form-label" for="txtisbn">ISBN</label>
      <input type="text" class="form-control" name="txtisbn" placeholder="Ingresa 13 Digitos Numericos" value="{{ old('txtisbn') }}">
      <p class="text-danger fst-italic">{{ $errors->first('txtisbn') }} </p>
    </div>
    <div class="col-md-6">  
      <label class="form-label" for="txtTitulo">Título</label>
      <input type="text" class="form-control" name="txtTitulo" placeholder="Título del libro" value="{{ old('txtTitulo') }}">
      <p class="text-danger fst-italic">{{ $errors->first('txtTitulo') }} </p>
    </div>
    <div class="col-md-8">
      <label class="form-label" for="txtautor">Autor</label>
      <input type="text" class="form-control" name="txtautor" placeholder="Nombre del Autor" value="{{ old('txtautor') }}">
      <p class="text-danger fst-italic">{{ $errors->first('txtautor') }} </p>
    </div>
    <div class="col-md-4">
      <label class="form-label" for="txtpaginas">Páginas</label>
      <input type="text" class="form-control" name="txtpaginas" placeholder="Número de Páginas" value="{{ old('txtpaginas') }}">
      <p class="text-danger fst-italic">{{ $errors->first('txtpaginas') }} </p>
    </div>
    <div class="col-12">
      <label class="form-label" for="txteditorial">Editorial</label>
      <input type="text" class="form-control" name="txteditorial" placeholder="Nombre de Editorial" value="{{ old('txteditorial') }}">
      <p class="text-danger fst-italic">{{ $errors->first('txteditorial') }} </p>
    </div>
    <div class="col-12">
      <label class="form-label" for="txtemail">Email</label>
      <input type="text" class="form-control" name="txtemail" placeholder="Email de Editorial" value="{{ old('txtemail') }}">
      <p class="text-danger fst-italic">{{ $errors->first('txtemail') }} </p>
    </div>
 
    <div class="d-grid gap-2">
      <button class="btn btn-success" type="submit">Guardar Registro</button>
    </div>
    
    @if(session()->has('confirmacion'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('confirmacion') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  </form>


</div>
@endsection
