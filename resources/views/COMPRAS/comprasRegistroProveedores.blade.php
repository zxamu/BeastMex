@extends('layouts.app')

@section('titulo','BeastMex')

@section('contenido')

@include('partials.navbar')

<div class="container mt-5 col-md-6">
  <p class="fw-bolder fs-3 text-center">COMPRAS</p>
  <p class="fw-medium fs-5 text-center">ALTA DE PROVEEDORES</p>
</div>
    
<div class="container mt-5 col-md-6">
    @if(session()->has('Registro Proveedor'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('Registro Proveedor')}}</strong>
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
  <p class="fw-medium fs-5 text-center">- Datos personales -</p>
  <form method="POST" action="/pRegistrarProveedor">
    @csrf
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
    <p class="fw-medium fs-5 text-center">- Datos de la empresa -</p>  

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-workspace"></i></span>
        <div class="form-floating">
          <input type="text" name="txtEmpresa" class="form-control" placeholder="Nombre de la empresa">
          <label for="floatingInputGroup1">Nombre de la empresa</label>
        </div>
      </div>
  
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtRZ" class="form-control" placeholder="Razon social">
          <label for="floatingInputGroup1">Razon social</label>
        </div>
      </div>

    <p class="fw-medium fs-5 text-center">- Domicilio de la empresa -</p> 

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtCalle" class="form-control" placeholder="Calle">
          <label for="floatingInputGroup1">Calle</label>
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtColonia" class="form-control" placeholder="Colonia">
          <label for="floatingInputGroup1">Colonia</label>
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtNumero" class="form-control" placeholder="Numero">
          <label for="floatingInputGroup1">Numero</label>
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtTel" class="form-control" placeholder="Telefono">
          <label for="floatingInputGroup1">Telefono</label>
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtCorreo" class="form-control" placeholder="Correo">
          <label for="floatingInputGroup1">Correo</label>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Registrar usuario</button>
    </form>
  </div>

@endsection