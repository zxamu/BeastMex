@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')
<div class="container mt-5 col-md-6">
<p class="fw-bolder fs-3 text-center">COMPRAS</p>
<p class="fw-medium fs-5 text-center">BUSCAR PRODUCTOS</p>
</div>
<div class="container mt-5 col-md-6">
    <form method="POST" action="pBuscarProductos">
      @csrf
        <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
          <div class="form-floating">
            <input type="text" name="txtNombreP" class="form-control" placeholder="Nombre del producto/No. Serie">
            <label for="floatingInputGroup1">Nombre del producto/No. Serie</label>
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
        <th scope="col">Acciones</th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
</table>
<button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>
@endsection