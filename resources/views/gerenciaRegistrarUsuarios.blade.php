@extends('layouts.plantilla')

@section('titulo','Registro de usuarios')

@section('contenido')

<div class="container mt-5 col-md-6">
  <p class="fw-bolder fs-3 text-center">GERENCIA</p>
  <p class="fw-medium fs-5 text-center">REGISTRAR USUARIOS</p>
</div>
    
<div class="container mt-5 col-md-6">
  <p class="fw-medium fs-5 text-center">- Datos personales -</p>
  <form>
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
        <div class="form-floating">
          <input type="text" name="txtNombre" class="form-control" placeholder="Nombre(s)">
          <label for="floatingInputGroup1">Nombre(s)</label>
        </div>
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
        <div class="form-floating">
          <input type="text" name="txtAP" class="form-control" placeholder="Apellido paterno">
          <label for="floatingInputGroup1">Apellido paterno</label>
        </div>
      </div>
  
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
        <div class="form-floating">
          <input type="text" name="txtAM" class="form-control" placeholder="Apellido materno">
          <label for="floatingInputGroup1">Apellido materno</label>
        </div>
      </div>
  
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-workspace"></i></span>
        <div class="form-floating">
          <input type="text" name="txtPuesto" class="form-control" placeholder="Puesto">
          <label for="floatingInputGroup1">Puesto</label>
        </div>
      </div>
  
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtCorreo" class="form-control" placeholder="Correo">
          <label for="floatingInputGroup1">Correo</label>
        </div>
      </div>
  
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
        <div class="form-floating">
          <input type="password" name="txtContra" class="form-control" placeholder="Contraseña">
          <label for="floatingInputGroup1">Contraseña</label>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Registrar usuario</button>
    </form>
  </div>

@endsection