<!-- Modal Editar-->
@foreach($consulpro as $item)
    <div class="modal fade" id="editar{{ $item->id_producto }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{ route('actualizarProducto', ['id_producto' => $item->id_producto]) }}">
                    @csrf
                        <div class="mb-3">
                          <label class="form-label">Nombre del Producto:</label>
                          <input type="text" name="txtNombre" class="form-control" value="{{ $item->nombre_producto }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Número de Serie:</label>
                          <input type="text" name="txtSerie" class="form-control" value="{{ $item->no_serie }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Marca:</label>
                          <input type="text" name="txtMarca" class="form-control" value="{{ $item->marca }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Cantidad:</label>
                          <input type="number" name="txtCantidad" class="form-control" value="{{ $item->cantidad }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Costo:</label>
                          <input type="text" name="txtCosto" class="form-control" value="{{ $item->costo }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Compra:</label>
                          <input type="text" name="txtCompra" class="form-control" value="{{ $item->compra }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Precio de Venta:</label>
                          <input type="text" name="txtPrecioventa" class="form-control" value="{{ $item->precio_venta }}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Fecha de Ingreso:</label>
                          <input type="date" name="txtFecha" class="form-control" value="{{ $item->fecha_ingreso }}">
                      </div>
                        <!-- Otras entradas del formulario -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

    <!-- Modal Borrar, contiene tres partes, la pregunta "segur que vas a borra" el recuerdo- titulo del recuerdo. 2 botones para confirmar y cancelar-->
    <div class="modal fade" id="borrar{{ $item->id_producto }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/ventasConsultarproducto/{{ $item->id_producto }}/delete">
              @csrf <!--Token de seguridad-->
              @method('delete')
              <div class="mb-3">
                  <div>
                  <label class="form-label">nombre producto: {{ $item->nombre_producto }}</label>
                  </div>
              </div>
      </div> <!-- Cierre del Modal Body-->
      <div class="modal-footer text-body-secondary">
          
        <div class="d-grip gap 2">
        <button type="submit" class="btn btn-primary">Eliminar</button>
    </form> <!--Cierre del form-->
    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        </div> <!-- Cierre del grip gap 2-->
        </div> <!-- Cierre del footer-->
</div> <!-- Cierre del modal-content-->
</div> <!-- Cierre del dialog-->
</div> <!-- Cierre del modal fade-->
