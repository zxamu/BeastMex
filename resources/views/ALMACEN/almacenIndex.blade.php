@extends('layouts.app')

@section('titulo','Almacen')

@section('content')

@include('ALMACEN.almacenIndex')

<h3 class="display-1 text-center text-danger mt-4"> Almacen</h3>

<div class="container">

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

    <div class="table-responsive ">

        <table class="table ">

            <button type="button" class="btn btn-dark m-5" data-bs-toggle="modal" data-bs-target="#create">
                <i class="bi bi-floppy"></i>  Nuevo producto
            </button>


            <thead class="bg-dark text-white ">

                <tr>
                    <th scope="col">Id: </th>
                    <th scope="col">Nombre: </th>
                    <th scope="col">No. Serie: </th>
                    <th scope="col">Marca: </th>
                    <th scope="col">Cantidad: </th>
                    <th scope="col">Costo: </th>
                    <th scope="col">Precio de Compra: </th>
                    <th scope="col">Precio de Venta: </th>
                    <th scope="col"> </th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    @foreach ($allproducts as $item)
                    <tr>
                        <td scope="row">{{$item->id}}</td>
                        <td>{{$item->nombre_producto}}</td>
                        <td>{{$item->no_serie}}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>{{$item->costo}}</td>
                        <td>{{$item->compra}}</td>
                        <td>{{$item->precio_venta}}</td>
                        <td>{{$item->fecha_ingreso}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-list-stars"></i> Opciones
                                </button>
                                <ul class="dropdown-menu">
                                    <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                                        <i class="bi bi-pencil-square"></i> - Editar 
                                      </button>
                                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                                        <i class="bi bi-trash"></i> - Borrar 
                                      </button>
                                </ul>
                              </div>    
                             
                        </td>
                        
                    </tr>
                    @include('ALMACEN.almacenOptions')
                    @endforeach
            </tbody>
        </table>

    </div>{{-- cierre tableresp --}}
    
</div> {{-- cierre col-8 --}}

</div>{{-- cierre row --}}

</div>



@endsection