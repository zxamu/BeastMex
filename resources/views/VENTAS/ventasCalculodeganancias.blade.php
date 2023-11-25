@extends('layouts.plantilla')

@section('titulo', 'Calculo de Ganancias')

@section('contenido')

<div class="container mt-5 col-md-6">
  <p class="fw-bolder fs-3 text-center">VENTAS</p>
  <p class="fw-medium fs-5 text-center">- Calculo de ganancias -</p>
  </div>

<div class="container mt-5 col-md-6">
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

  <form method="POST" action="/Mostrarcalculodegancnias">

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-calendar2-fill"></i></span>
      <div class="form-floating">
        <input type="month" name="txtFecha" class="form-control" placeholder="Mes" value="{{old('txtFecha')}}">
        <label for="floatingInputGroup1">Mes</label>
        {{$errors->first('txtFecha')}}
      </div>
    </div>
  </form>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Calcular ganancias</button>
    </div>

</div>
  
@endsection