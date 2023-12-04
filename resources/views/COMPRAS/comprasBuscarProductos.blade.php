@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')

<div class="container mt-5 col-md-6">
<p class="fw-bolder fs-3 text-center">COMPRAS</p>
<p class="fw-medium fs-5 text-center">BUSCAR PRODUCTOS</p>
</div>
<div class="container mt-5 col-md-6">
  @if(session()->has('BusquedaProducto'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('BusquedaProducto')}}</strong>
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
    <form method="POST" action="{{ route('prod.search') }}">
      @csrf
        <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
          <div class="form-floating">
            <input type="text" name="txtNombreP" class="form-control" placeholder="Nombre del producto/No. Serie">
            <label for="floatingInputGroup1">Nombre del producto</label>
          </div>
        </div>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Folio</th>
        <th scope="col">Nombre del producto</th>
        <th scope="col">No. Serie</th>
        <th scope="col">Marca</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Fecha de ingreso</th>
        <th scope="col">Costo de compra</th>
        <th scope="col">Precio venta</th>
{{--         <th scope="col">Acciones</th>  --}}
      </tr>
    </thead>
        <tr>
          @foreach ($consulProd as $item)
        <tr>
          <th scope="row">{{$item->id_producto}}</th>
          <td>{{$item->folio}}</td>
          <td>{{$item->nombre_producto}}</td>
          <td>{{$item->no_serie}}</td>
          <td>{{$item->marca}}</td>
          <td>{{$item->cantidad}}</td>
          <td>{{$item->fecha_ingreso}}</td>
          <td>{{$item->costo}}</td>
          <td>{{$item->precio_venta}}</td>
          
        
{{--           <td>

              <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-list-stars"></i> Opciones
                  </button>
                  <ul class="dropdown-menu">
                      <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#updateP{{$item->id_producto}}">
                          <i class="bi bi-pencil-square"></i> - Editar 
                      </button>
                      <button type="button" class="btn btn-ñ danger m-1" data-bs-toggle="modal" data-bs-target="#deleteP{{$item->id_producto}}">
                          <i class="bi bi-trash"></i> - Borrar 
                      </button>
                  </ul>
              </div>

          </td> --}}

        </tr>
{{--         @include('partials.modalComprasProductoB')
        @include('partials.modalComprasProductoEd') --}}
        @endforeach
    </tbody>
</table>
<button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>
@endsection