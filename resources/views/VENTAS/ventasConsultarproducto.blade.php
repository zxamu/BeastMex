@extends('layouts.plantilla')

@section('titulo', 'Consultar producto')

@section('contenido')

<div class="container">

  <div class="container mt-5 col-md-6">

      <form method="POST" action="/Buscarproducto/index">
        @csrf

          <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-box-seam-fill"></i></span>
              <div class="form-floating">
                <input type="text" name="txtNombreProducto" class="form-control" value="{{ old('txtNombreProducto') }}">
                <label for="floatingInputGroup1">Nombre del producto</label>
              </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Consultar producto</button>
          </div>

          <div class="card w-75 mb-3 mt-5"> {{-- ver datos de la consulta--}}
            <div class="card-body">
              <h5 class="card-title fw-semibold">{{ $item->nombre_producto }} </h5>
              {{-- de recuerdo cargamos la información de cada parte de la tabla--}}
              <p class="card-text fst-italic">{{ $item->no_serie }}  </p>
              <p class="card-text fw-lighter">{{ $item->marca }}  </p>
              <p class="card-text fw-lighter">{{ $item->cantidad }}  </p>
              <p class="card-text fw-lighter">{{ $item->costo }}  </p>
              <p class="card-text fw-lighter">{{ $item->precio_venta }}  </p>
              <p class="card-text fw-lighter">{{ $item->fecha_ingreso }}  </p>
            </div>
          </div> <!-- class -->

          <br><br>
          <div class="card">
            <div class="card-header">
              Venta de productos
            </div>
            <div class="card-body">
              <h5 class="card-title">Lista de productos</h5> {{-- cargar productos a la venta--}}
              <p>
                <a href="{{ route("ventasConsultarproducto.index") }}" class="btn btn-primary">Agregar</a>
              </p>
              <hr>
              <p class="card-text">
                <div class="table table-responsive">
                  <table class="table table-sm table-bordered">
                    <head>
                      <th>nombre_producto</th>
                      <th>no_serie</th>
                      <th>marca</th>
                      <th>cantidad</th>
                      <th>costo</th>
                      <th>compra</th>
                      <th>precio de venta</th>
                      <th>fecha de ingreso</th>
                      <th>Eliminar</th>
                    </head>
                    <tbody>

                    @foreach ($consulventas as $item)

                      <tr>
                        <td>{{ $item->nombre_producto}} </td>
                        <td>{{ $item->no_serie}} </td>
                        <td>{{ $item->marca}} </td>
                        <td>{{ $item->cantidad}} </td>
                        <td>{{ $item->costo}} </td>
                        <td>{{ $item->compra}} </td>
                        <td>{{ $item->precio_venta}} </td>
                        <td>{{ $item->fecha_ingreso}} </td>
                        <td></td>

                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
      </form>  
    @endforeach
  </div>
</div> <!-- container -->
  
@endsection
