@extends('layouts.plantilla')

@section('titulo', 'Concultar producto')

@section('contenido')

<div class="container">
  @if(session()->has('confirmacion'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('confirmacion')}}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif


  @if($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $error }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      @endforeach
  @endif

<div class="container mt-5 col-md-6">

  <form method="POST" action="/Buscarproducto">
    @csrf

      <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
          <div class="form-floating">
            <input type="text" name="txtNombreProducto" class="form-control" placeholder="NombreProducto" value="{{old('txtNombreproducto')}}">
            <label for="floatingInputGroup1">Nombre del producto</label>
            {{$errors->first('txtNombreproducto')}}
          </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Consultar producto</button>
      </div>

  </form>  
</div>
</div>
  
@endsection