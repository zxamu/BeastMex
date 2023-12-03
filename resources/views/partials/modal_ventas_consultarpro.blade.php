<!-- Modal Borrar, contiene tres partes, la pregunta "segur que vas a borra" el recuerdo- titulo del recuerdo. 2 botones para confirmar y cancelar-->
<div class="modal fade" id="borrar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/ventasConsultarproducto/{{ $item->id }}/delete">
            @csrf <!--Token de seguridad-->
            @method('delete')
            <div class="mb-3">
                <div>
                <label class="form-label">prodcuto: {{ $item->nombre_producto }}</label>
                </div>
            </div>
    </div> <!-- Cierre del Modal Body-->
    <div class="modal-footer text-body-secondary">
        
      <div class="d-grip gap 2">
      <button type="submit" class="btn btn-primary">Eliminar</button>
  </form> <!--Cierre del form-->
      </div> <!-- Cierre del grip gap 2-->
      </div> <!-- Cierre del footer-->
</div> <!-- Cierre del modal-content-->
</div> <!-- Cierre del dialog-->
</div> <!-- Cierre del modal fade-->