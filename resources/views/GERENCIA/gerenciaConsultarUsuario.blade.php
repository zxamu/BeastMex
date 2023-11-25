@extends('layouts.plantilla')

@section('titulo','BeastMex')

@section('contenido')

<div class="container mt-5 col-md-6">
  <p class="fw-bolder fs-3 text-center">GERENCIA</p>
  <p class="fw-medium fs-5 text-center">CONSULTAR USUARIOS</p>
</div>
<div class="container mt-5 col-md-6">
<table class = "container">
<table class="table table-striped-columns">

  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre(s)</th>
      <th>AP</th>
      <th>AM</th>
      <th>Puesto</th>
      <th>Correo</th>
      <th>Contraseña</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Marco</td>
      <td>Hernandez</td>
      <td>Hernandez</td>
      <td>Auxiliar de ventas</td>
      <td>1234567@gmail.com</td>
      <td>1234567</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</table>
</div> {{-- div container --}}

@endsection