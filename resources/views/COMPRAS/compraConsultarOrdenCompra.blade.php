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
        <th scope="col">Folio de orden de compra</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
      <tr>
        <tr>
          @foreach ($consulOC as $item)
        <tr>
          <th scope="row">{{$item->id_producto}}</th>
          <td>{{$item->folio}}</td>        
          <td>
  
              <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-list-stars"></i> Opciones
                  </button>
                  <ul class="dropdown-menu">
                      <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="{{route('oc.generarOrdenCompra',$item->id_producto)}}">
                          <i class="bi bi-pencil-square"></i> - Descargar PDF 
                      </button>
                  </ul>
              </div>
  
          </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection