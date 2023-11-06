@extends('layouts.plantilla')

@section('titulo','Inicio de sesion')

@section('contenido')


<div class="container mt-5 col-md-6">
  
  @if(session()->has('Inicio de sesion'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('Inicio de sesion')}}</strong>
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