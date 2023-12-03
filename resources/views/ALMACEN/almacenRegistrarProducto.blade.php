@extends('layouts.plantilla')

@section('titulo','BeastMex')

@section('contenido')


<div class="container mt-5 col-md-6">
  <p class="fw-bolder fs-3 text-center">ALMACEN</p>
  <p class="fw-medium fs-5 text-center">REGISTRAR PRODUCTO</p>
</div>

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
        <input type="text" name="txtNombre" class="form-control" value="{{old('txtNobre')}}">
        <label for="floatingInputGroup1">Nombre producto</label>
        {{$errors->first('txtNombre')}}
      </div>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
      <div class="form-floating">
        <input type="text" name="txtSerie" class="form-control" value="{{old('txtSerie')}}">
        <label for="floatingInputGroup1">No. Serie</label>
        {{$errors->first('txtSerie')}}
      </div>
    </div>


    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-workspace"></i></span>
      <div class="form-floating">
        <input type="text" name="txtMarca" class="form-control"  value="{{old('txtMarca')}}">
        <label for="floatingInputGroup1">Marca</label>
        {{$errors->first('txtMarca')}}
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtCantidad" class="form-control"  value="{{old('txtCantidad')}}">
        <label for="floatingInputGroup1">Cantidad</label>
        {{$errors->first('txtCantidad')}}
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="date" name="txtFecha" class="form-control" value="{{old('txtFecha')}}">
        <label for="floatingInputGroup1">Fecha ingreso</label>
        {{$errors->first('txtFecha')}}
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtFolio" class="form-control" value="{{old('txtFolio')}}">
        <label for="floatingInputGroup1">Folio</label>
        {{$errors->first('txtFolio')}}
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtCosto" class="form-control" value="{{old('txtCosto')}}">
        <label for="floatingInputGroup1">Costo de compra</label>
        {{$errors->first('txtCosto')}}
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtPrecio" class="form-control" value="{{old('txtPrecio')}}">
        <label for="floatingInputGroup1">Precio de venta</label>
        {{$errors->first('txtPrecio')}}
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar producto</button>
  </form>
</div>
</div>
@endsection
