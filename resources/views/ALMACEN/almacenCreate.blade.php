<!-- Modal -->
<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-danger fw-bold " id="staticBackdropLabel">Ingresa un Libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="{{route('productos.store')}}">
                @csrf               
                <div class="mb-3">
                  <label  class="form-label">Nombre: </label>
                  <input type="text" class="form-control" name="txtNombre">
                </div>

                <div class="mb-3">
                <label class="form-label">No. Serie: </label>
                <input type="text" class="form-control" name="txtNoserie">
                </div>

                <div class="mb-3"> 
                <label class="form-label">Marca: </label>
                <input type="text" class="form-control" name="txtMarca">
                </div>

                <div class="mb-3"> 
                  <label class="form-label">Cantidad: </label>
                  <input type="number" class="form-control" name="txtCantidad">
                  </div>

                  <div class="mb-3"> 
                  <label class="form-label">Costo: </label>
                  <input type="number" class="form-control" name="txtCosto">
                  </div>

                  <div class="mb-3"> 
                  <label class="form-label">Compra: </label>
                  <input type="number" class="form-control" name="txtCompra">
                  </div>

                  <div class="mb-3"> 
                  <label class="form-label">Precio: </label>
                  <input type="number" class="form-control" name="txtPrecio">
                  </div>

                  <div class="mb-3"> 
                  <label class="form-label">Fecha: </label>
                  <input type="text" class="form-control" name="txtFecha">
                  </div>
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-success"> <i class="bi bi-floppy"></i> Guardar Libro </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Close</button>
        </div>

      </div>
    </div>
  </div>