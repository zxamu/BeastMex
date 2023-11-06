@extends('layouts.plantilla')

@section('titulo', 'Consultar Tickets')

@section('contenido')

@include('sweetalert::alert')

<div class="container mt-5 col-md-6">

  @if(session()->has('Mostrartickets'))
  <script>
    Swal.fire({
      'Exitoso',
      'Resultado exitoso',
      'success'
    });
  </script>
  endif


  @if($errors->any())

        @foreach ($errors->all() as $error)
            
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endforeach
    @endif

    <div>
      <form method="POST" action="/Mostrartickets">

        <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-calendar2-fill"></i></span>
          <div class="form-floating">
            <input type="date" name="txtFecha" class="form-control" placeholder="Fecha" value="{{old('txtFecha')}}">
            <label for="floatingInputGroup1">Fecha</label>
            {{$errors->first('txtFecha')}}
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Consultar ticket</button>
        </div>

        <form method="POST" action="/Imprimirtickets">
          <div class="text-center  mt-5">
          <button type="submit" class="btn btn-primary">Descargar ticket</button>
          </div>
        </form>

      </form>
    
    </div>
  
@endsection
