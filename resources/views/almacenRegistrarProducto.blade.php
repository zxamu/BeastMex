@extends('layouts.plantilla')

@section('titulo','BeastMex')

@section('contenido')



<h2 class="display-1 text-center text-primary">Registro Producto</h2>

<div class="container mt-5 col-md-6">
<div class= "container">
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

    <form method="POST" action="/guardarRegistro"> 
      @csrf 
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
      <div class="form-floating">
        <input type="text" name="txtNombre" class="form-control" placeholder="Nombre(s)">
        <label for="floatingInputGroup1">Nombre producto</label>
      </div>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
      <div class="form-floating">
        <input type="text" name="txtSerie" class="form-control" placeholder="Apellido paterno">
        <label for="floatingInputGroup1">No. Serie</label>
      </div>
    </div>


    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-workspace"></i></span>
      <div class="form-floating">
        <input type="text" name="txtMarca" class="form-control" placeholder="Puesto">
        <label for="floatingInputGroup1">Marca</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtCantidad" class="form-control" placeholder="Correo">
        <label for="floatingInputGroup1">Cantidad</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtFecha" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Fecha ingreso</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtFolio" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Folio</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtCosto" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Costo de compra</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtPrecio" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Precio de venta</label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar producto</button>
  </form>
</div>
</div>
@endsection
