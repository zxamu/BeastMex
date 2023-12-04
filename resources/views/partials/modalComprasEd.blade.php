    <!-- Modal EDITAR/ACTUALIZAR -->
    <div class="modal fade" id="update{{ $item->id_prov }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>{{-- cierra body --}}
            <div class="modal-body">
                <form method="POST" action="/proveedor/{{ $item->id_prov }}/confirm">
                    @csrf
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtNombre" class="form-control" placeholder="Nombre(s)">
                          <label for="floatingInputGroup1">Nombre(s)</label>
                        </div>
                      </div>
                      
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtAP" class="form-control" placeholder="Apellido paterno">
                          <label for="floatingInputGroup1">Apellido paterno</label>
                        </div>
                      </div>
                  
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtAM" class="form-control" placeholder="Apellido materno">
                          <label for="floatingInputGroup1">Apellido materno</label>
                        </div>
                      </div>
                    <p class="fw-medium fs-5 text-center">- Datos de la empresa -</p>  
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-person-workspace"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtEmpresa" class="form-control" placeholder="Nombre de la empresa">
                          <label for="floatingInputGroup1">Nombre de la empresa</label>
                        </div>
                      </div>
                  
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtRZ" class="form-control" placeholder="Razon social">
                          <label for="floatingInputGroup1">Razon social</label>
                        </div>
                      </div>
                
                    <p class="fw-medium fs-5 text-center">- Domicilio de la empresa -</p> 
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtCalle" class="form-control" placeholder="Calle">
                          <label for="floatingInputGroup1">Calle</label>
                        </div>
                      </div>
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtColonia" class="form-control" placeholder="Colonia">
                          <label for="floatingInputGroup1">Colonia</label>
                        </div>
                      </div>
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtNumero" class="form-control" placeholder="Numero">
                          <label for="floatingInputGroup1">Numero</label>
                        </div>
                      </div>
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtEstado" class="form-control" placeholder="Estado">
                          <label for="floatingInputGroup1">Estado</label>
                        </div>
                      </div>
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtMunicipio" class="form-control" placeholder="Municipio">
                          <label for="floatingInputGroup1">Municipio</label>
                        </div>
                      </div>
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtTel" class="form-control" placeholder="Telefono">
                          <label for="floatingInputGroup1">Telefono</label>
                        </div>
                      </div>
                
                      <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
                        <div class="form-floating">
                          <input type="text" name="txtCorreo" class="form-control" placeholder="Correo">
                          <label for="floatingInputGroup1">Correo</label>
                        </div>
                      </div>      
            </div>
            <div class="modal-footer">
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-primary">Editar recuerdo</button>
                </form>
                </div>
            </div>{{-- cierra footer --}}
          </div>
        </div>
      </div>