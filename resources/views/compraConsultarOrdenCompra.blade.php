@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')


<div class="container mt-5 col-md-6">
    <p class="fw-bolder fs-3 text-center">COMPRAS</p>
    <p class="fw-medium fs-5 text-center">CONSULTAR ORDENES DE COMPRA</p>
</div>

<div class="container mt-5 col-md-6">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">No. Orden de compra</th>
        <th scope="col">Acciones</th>
        <th scope="col">Handle</th>
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
</div>
@endsection