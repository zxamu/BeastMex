@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')


<div class="container mt-5 col-md-6">
    <p class="fw-bolder fs-3 text-center">COMPRAS</p>
    <p class="fw-medium fs-5 text-center">CONSULTAR PROVEEDORES</p>
</div>

<form action="{{ route('proveedor.search') }}" method="POST">
    @csrf
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
            <div class="form-floating">
            <input type="text" name="txtNombre" class="form-control" placeholder="NombreProducto" value="{{old('txtNombreproducto')}}">
            <label for="floatingInputGroup1">Nombre del proveedor</label>
            {{$errors->first('txtNombre')}}
            <button type="submit">Buscar</button>
            </div>
        </div>
</form>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($consulProve as $item)
      <tr>
        <th scope="row">{{$item->id_prov}}</th>
        <td>{{$item->nombre}}</td>
        <td>{{$item->ap}}</td>
        <td>{{$item->am}}</td>
      
        <td>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list-stars"></i> Opciones
                </button>
                <ul class="dropdown-menu">
                    <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id_prov}}">
                        <i class="bi bi-pencil-square"></i> - Editar 
                    </button>
                    <button type="button" class="btn btn-ñ danger m-1" data-bs-toggle="modal" data-bs-target="#delete{{$item->id_prov}}">
                        <i class="bi bi-trash"></i> - Borrar 
                    </button>
                </ul>
            </div>

        </td>

      </tr>
      @include('partials.modalComprasB')
      @include('partials.modalComprasEd')
      @endforeach

    </tbody>
</table>
</div>
@endsection