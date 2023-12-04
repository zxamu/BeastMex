<!-- listaCompras.blade.php -->

@foreach ($listaCompras as $producto)
    <p>{{ $producto->nombre_producto }} - {{ $producto->cantidad }} unidad(es)</p>
@endforeach
