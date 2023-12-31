@extends('layouts.app')

@section('titulo','BeastMex')

@section('contenido')

@include('partials.navbar')

<div class="container mt-5 col-md-6">
  <p class="fw-bolder fs-3 text-center">ALMACEN</p>
  <p class="fw-medium fs-5 text-center">BUSCAR PRODUCTO</p>
</div>

<div class="container mt-5 col-md-6">
<nav class="navbar bg-body-tertiary justify-content-center">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Ingresa el producto" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<table class = "container">
<table class="table table-striped-columns">

  <thead>
    <tr>
      <th>ID</th>
      <th>Folio</th>
      <th>Nombre del Producto</th>
      <th>No. Serie</th>
      <th>Marca</th>
      <th>Cantidad</th>
      <th>Fecha Ingreso</th>
      <th>Costo de Compra</th>
      <th>Precio de Venta</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>PC123</td>
      <td>Procesador Intel i7</td>
      <td>ABC123456</td>
      <td>Intel</td>
      <td>20</td>
      <td>2023-11-05</td>
      <td>250.00</td>
      <td>299.99</td>
      <td>-</td>
    </tr>
    <tr>
      <td>2</td>
      <td>LAP456</td>
      <td>Memoria RAM DDR4 8GB</td>
      <td>XYZ789012</td>
      <td>Kingston</td>
      <td>50</td>
      <td>2023-11-06</td>
      <td>80.00</td>
      <td>99.99</td>
      <td>-</td>
    </tr>
    <tr>
        <td>3</td>
        <td>LAP808</td>
        <td>Auriculares Inalámbricos</td>
        <td>PQR910111</td>
        <td>Sony</td>
        <td>50</td>
        <td>2023-11-14</td>
        <td>60.00</td>
        <td>79.99</td>
        <td>-</td>
    <td>
    <tr>
        <td>4</td>
        <td>PC707</td>
        <td>Webcam Full HD</td>
        <td>XYZ789345</td>
        <td>Logitech</td>
        <td>35</td>
        <td>2023-11-13</td>
        <td>25.00</td>
        <td>39.99</td>
        <td>-</td>
    <td>
    <tr>
        <td>5</td>
        <td>LAP505</td>
        <td>Disipador de CPU Cooler Master</td>
        <td>MNO789012</td>
        <td>Cooler Master</td>
        <td>20</td>
        <td>2023-11-12</td>
        <td>40.00</td>
        <td>49.99</td>
        <td>-</td>
        <td>
  </tbody>
</table>
</table>
</div>
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item active" aria-current="page">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>

@endsection