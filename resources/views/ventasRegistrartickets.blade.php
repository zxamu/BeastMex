@extends('layouts.plantilla')

@section('titulo', 'Venta')

@section('contenido')

@include('sweetalert::alert')

<div class="container mt-5 col-md-6">

  @if(session()->has('Guardartickets'))
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

  <div>
    <form method="POST" action="/Guardartickets">
    
    @csrf 

      <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-calendar2-fill"></i></span>
          <div class="form-floating">
            <input type="date" name="txtFecha" class="form-control" placeholder="Fecha" value="{{old('txtFecha')}}">
            <label for="floatingInputGroup1">Fecha</label>
            {{$errors->first('txtFecha')}}
          </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
        <div class="form-floating">
          <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" value="{{old('txtNombre')}}">
          <label for="floatingInputGroup1">Nombre(s)</label>
          {{$errors->first('txtNombre')}}
        </div>
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
        <div class="form-floating">
          <input type="text" name="txtAP" class="form-control" placeholder="Apellido paterno" value="{{old('txtAP')}}">
          <label for="floatingInputGroup1">Apellido paterno</label>
          {{$errors->first('txtAP')}}
        </div>
      </div>
  
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
        <div class="form-floating">
          <input type="text" name="txtAM" class="form-control" placeholder="Apellido materno" value="{{old('txtAM')}}">
          <label for="floatingInputGroup1">Apellido materno</label>
          {{$errors->first('txtAM')}}
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtNombreProducto" class="form-control" placeholder="NombreProducto" value="{{old('txtNombreproducto')}}">
          <label for="floatingInputGroup1">Nombre del producto</label>
          {{$errors->first('txtNombreProducto')}}
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
        <div class="form-floating">
          <input type="text" name="txtMarca" class="form-control" placeholder="Marca" value="{{old('txtMarca')}}">
          <label for="floatingInputGroup1">Marca</label>
          {{$errors->first('txtMarca')}}
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
        <div class="form-floating">
          <input type="decimal" name="txtCantidad" class="form-control" placeholder="Cantidad" value="{{old('txtCantidad')}}">
          <label for="floatingInputGroup1">Cantidad</label>
          {{$errors->first('txtCanidad')}}
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
        <div class="form-floating">
          <input type="decimal" name="txtPrecio" class="form-control" placeholder="Pecio" value="{{old('txtPrecio')}}">
          <label for="floatingInputGroup1">Precio</label>
          {{$errors->first('txtPrecio')}}
        </div>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
        <div class="form-floating">
          <input type="decimal" name="txtTotalcompra" class="form-control" placeholder="Totalcompra" value="{{old('txtTotalcompra')}}">
          <label for="floatingInputGroup1">Total de compra</label>
          {{$errors->first('txtTotalcompra')}}
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Guardar ticket</button>
      </div>

    </form>   
  </div>
  
  @endsection