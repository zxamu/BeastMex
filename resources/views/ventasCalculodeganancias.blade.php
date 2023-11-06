@extends('layouts.plantilla')

@section('titulo', 'Calculo de Ganancias')

@section('contenido')

@include('sweetalert::alert')

<div class="container mt-5 col-md-6">

  @if(session()->has('Mostrarcalculodeganancias'))
  <script>
    Swal.fire({
      'Exitoso',
      'Registro exitoso',
      'success'
    });
  </script>
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

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Calcular ganancias</button>
    </div>

  </form>
</div>
  
@endsection