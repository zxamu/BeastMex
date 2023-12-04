<!-- Modal Actualizar -->
  
<div class="modal fade" id="update{{$item->id}}"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-bold text-danger" id="staticBackdropLabel">Actualizar Producto </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="{{route('almacen.update', $item->id)}}">
                
                @csrf 
                @method('PUT')
                
                <div class="mb-3">
                  <label  class="form-label">Nombre producto: </label>
                  <input type="text" class="form-control" name="txtNombre" value="{{$item->nombre}}">
                </div>

                <div class="mb-3">
                <label class="form-label">No. Serie: </label>
                <input type="text" class="form-control" name="txtNoserie" value="{{$item->noserie}}">
                </div>

                <div class="mb-3"> 
                <label class="form-label">Marca: </label>
                <input type="number" class="form-control" name="txtMarca" value="{{$item->marca}}">
                </div>

                <div class="mb-3"> 
                  <label class="form-label">Cantidad: </label>
                  <input type="number" class="form-control" name="txtCantidad" value="{{$item->cantidad}}">
                  </div>

                <div class="mb-3"> 
                <label class="form-label">Costo: </label>
                <input type="number" class="form-control" name="txtCosto" value="{{$item->costo}}">
                </div>

                <div class="mb-3"> 
                  <label class="form-label">Precio de compra: </label>
                  <input type="number" class="form-control" name="txtCompra" value="{{$item->compra}}">
                </div>

                <div class="mb-3"> 
                  <label class="form-label">Precio de venta: </label>
                  <input type="number" class="form-control" name="txtVenta" value="{{$item->venta}}">
                </div>
   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-warning"> <i class="bi bi-pencil-square"></i>  Actualizar productos </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Cancelar</button>
        </div>

      </div>
    </div>
  </div>


  <!-- Modal Para Eliminar  -->

  <div class="modal fade" id="destroy{{$item->id}}"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Borrar Libro </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form method="POST" action="{{route('almacen.destroy', $item->id)}}">
                @csrf 
                @method('DELETE')   
                <div class="text-dark fs-4 fw-semibold">
                  ¿Seguro que quieres eliminar {{$item->nombre}}?
                </div>           

   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-succes"> <i class="bi bi-trash"></i> Aceptar </button>
        </form>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>

      </div>
    </div>
  </div>
