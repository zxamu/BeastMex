@extends('layouts.plantilla')

@section('titulo','Inicio de sesion')

@section('contenido')

@include('sweetalert::alert')

<div class="container mt-5 col-md-6">
  @if (session()->has('Inicio de sesion'))
      <script>
        Swal.fire({
          'Inicio de sesion exitoso',
          'Has iniciado sesion',
          'success',
        });
      </script>
  @endif
<form method="POST" action="pLogin">
  @csrf
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
      <div class="form-floating">
        <input type="email" name="txtCorreo" class="form-control" placeholder="Ingrese correo">
        <label for="floatingInputGroup1">Ingrese correo</label>
      </div>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="password" name="txtContra" class="form-control" placeholder="Ingrese contraseña">
        <label for="floatingInputGroup1">Ingrese contraseña</label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
  </form>
</div>
@endsection