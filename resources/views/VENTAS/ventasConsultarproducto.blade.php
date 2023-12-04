@extends('layouts.plantilla')

@section('titulo', 'Consultar producto')

@section('contenido')

<div class="container">

    <div class="container mt-5 col-md-6">

        <form method="POST" action="{{ route('Buscarproducto') }}">
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

        </form>

        <div class="card mt-3">
            <h5 class="card-header">Productos</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre producto</th>
                                <th>No. Serie</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Compra</th>
                                <th>Precio venta</th>
                                <th>Fecha ingreso</th>
                                <th>Comprar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($consulpro as $item)
                            @include('partials/VENTAS/modal_VentasConsultar')
                                <tr>
                                    <td>{{ $item->id_producto }}</td>
                                    <td>{{ $item->nombre_producto }}</td>
                                    <td>{{ $item->no_serie }}</td>
                                    <td>{{ $item->marca }}</td>
                                    <td>{{ $item->cantidad }}</td>
                                    <td>{{ $item->costo }}</td>
                                    <td>{{ $item->compra }}</td>
                                    <td>{{ $item->precio_venta }}</td>
                                    <td>{{ $item->fecha_ingreso }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="agregarALista({{ $item->id_producto }})">Agregar a Lista</button>
                                    </td>
                                    <td>
                                        <!-- Botones para editar y eliminar -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{ $item->id_producto }}">Editar</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#borrar{{ $item->id_producto }}">Borrar</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">No se encontraron productos</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<div class="mt-3">
    <h5>Lista de Compras</h5>
    <div id="listaCompras">
        @include('partials.VENTAS.listaCompras', ['listaCompras' => session('listaCompras', [])])
    </div>
    <button type="button" class="btn btn-primary" onclick="generarTicketCompra()">Generar Ticket de Compra</button>
</div>

<script>
   function agregarAListaCompra(idProducto) {
    $.ajax({
        url: "{{ route('agregarAListaCompra') }}",
        type: "POST",
        data: {
            id_producto: idProducto,
            _token: '{{ csrf_token() }}' // Agrega el token CSRF
        },
        success: function (response) {
            // Actualiza la lista de compras
            $('#listaCompras').html('');
            $.each(response.listaCompras, function (index, producto) {
                $('#listaCompras').append('<p>' + producto.nombre_producto + '</p>');
            });
        },
        error: function (error) {
            console.error(error);
        }
    });
}

function generarTicketCompra() {
    $.ajax({
        url: "{{ route('generarTicketCompra') }}",
        type: "POST",
        data: {
            _token: '{{ csrf_token() }}' // Agrega el token CSRF
        },
        success: function (response) {
            alert(response.mensaje);
            // Limpia la lista de compras después de generar el ticket
            $('#listaCompras').html('');
        },
        error: function (error) {
            console.error(error);
        }
    });
}

</script>

@endsection





