@extends('layouts.app')

@section('titulo','BeastMex')

@section('contenido')

@include('partials.navbar')

<div class="container">
  
  <div class="d-block d-sm-none">
    <label for="Tab" class="sr-only">Tab</label>
  
    <select id="Tab" class="form-select w-100 rounded border border-gray-200">
      <option value="settings">Usuarios</option>
      <option value="messages">Registro</option>
    </select>
  </div>
  
  <div class="d-none d-sm-block">
    <div class="border-bottom border-gray-200">
      <ul class="nav nav-tabs gap-3">
        <li class="nav-item">
          <a href="#settings" class="nav-link p-3 text-sm font-weight-medium text-muted text-decoration-none">Usuarios</a>
        </li>
  
        <li class="nav-item">
          <a href="#messages" class="nav-link p-3 text-sm font-weight-medium text-muted text-decoration-none">Registro</a>
        </li>
      </ul>
    </div>
  </div>
  
  <div id="settings" class="tab-content">

    <div class="input-group mt-3 mb-3">
      <input type="text" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
    </div>

    <div class="container">

      <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="px-4 py-2 font-weight-bold text-dark">
                  Nombre
                </th>
                <th class="px-4 py-2 font-weight-bold text-dark">
                  E-mail
                </th>
                <th class="px-4 py-2 font-weight-bold text-dark">
                  Tipo
                </th>
                <th class="px-4 py-2 font-weight-bold text-dark">
                  Salario
                </th>
                <th class="px-4 py-2">Acciones</th>
              </tr>
            </thead>
        
            <tbody>
              <tr>
                <td class="px-4 py-2 font-weight-bold text-dark">
                  John Doe
                </td>
                <td class="px-4 py-2 text-muted">24/05/1995</td>
                <td class="px-4 py-2 text-muted">Web Developer</td>
                <td class="px-4 py-2 text-muted">$120,000</td>
                <td class="px-4 py-2">
                  <a
                    href="#"
                    class="btn btn-primary btn-sm"
                  >
                    Editar
                  </a>
                  <a
                    href="#"
                    class="btn btn-primary btn-sm"
                  >
                    Eliminar
                  </a>
                </td>
              </tr>
        
              <tr>
                <td class="px-4 py-2 font-weight-bold text-dark">
                  Jane Doe
                </td>
                <td class="px-4 py-2 text-muted">04/11/1980</td>
                <td class="px-4 py-2 text-muted">Web Designer</td>
                <td class="px-4 py-2 text-muted">$100,000</td>
                <td class="px-4 py-2">
                  <a
                    href="#"
                    class="btn btn-primary btn-sm"
                  >
                    Editar
                  </a>
                  <a
                    href="#"
                    class="btn btn-primary btn-sm"
                  >
                    Eliminar
                  </a>
                </td>
              </tr>
        
              <tr>
                <td class="px-4 py-2 font-weight-bold text-dark">
                  Gary Barlow
                </td>
                <td class="px-4 py-2 text-muted">24/05/1995</td>
                <td class="px-4 py-2 text-muted">Singer</td>
                <td class="px-4 py-2 text-muted">$20,000</td>
                <td class="px-4 py-2">
                  <a
                    href="#"
                    class="btn btn-primary btn-sm"
                  >
                    Editar
                  </a>
                  <a
                    href="#"
                    class="btn btn-primary btn-sm"
                  >
                    Eliminar
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
  
  <div id="messages" class="tab-content">
      <div class="container text-center">
        @if(session()->has('confirmacion'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('confirmacion')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif


        @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endforeach
        @endif
              <form method="POST" action="/guardarU" class="mb-4">
                <div class="mb-3">
                  
                  <label for="name" class="form-label">Nombre</label>
                  <input
                    class="form-control"
                    type="text"
                    id="name"
                    name="txtNombre"
                    placeholder="Nombre"
                  />
                  <p class="text-danger">{{$errors->first('txtNombre')}}</p>
                </div>
    
                <div class="row">
                  <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input
                      class="form-control"
                      type="email"
                      id="email"
                      name="txtEmail"
                      placeholder="Direccion de Email"
                    />
                    <p class="text-danger">{{$errors->first('txtEmail')}}</p>
                  </div>
    
                  <div class="col">
                    <label for="salary" class="form-label">Salario</label>
                    <input
                      class="form-control"
                      type="tel"
                      id="salary"
                      name="txtSalario"
                      placeholder="Salario"
                    />
                    <p class="text-danger">{{$errors->first('txtSalario')}}</p>
                  </div>
                </div>
    
                <div class="mt-3">
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="option1"
                      name="option"
                    />
                    <label
                      class="form-check-label"
                      for="option1"
                    >
                      Empleado
                    </label>
                  </div>
    
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="option2"
                      name="option"
                    />
                    <label
                      class="form-check-label"
                      for="option2"
                    >
                      Administrador
                    </label>
                  </div>
    
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      id="option3"
                      name="option"
                    />
                    <label
                      class="form-check-label"
                      for="option3"
                    >
                      Cliente
                    </label>
                  </div>
                </div>

                <div class="mt-3">
                  <button
                    type="submit"
                    class="btn btn-dark"
                  >
                    Guardar
                  </button>
                </div>
              </form>
  </div>
  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Por defecto, muestra la primera vista (Settings) y oculta las demás
    $("#settings").show();
    $("#messages, #archive, #notifications").hide();

    // Maneja el cambio de vista cuando se selecciona una pestaña
    $(".nav-link").click(function(e) {
      e.preventDefault();
      var tabId = $(this).attr("href").substring(1); // Obtén el ID de la vista
      $(".tab-content").hide(); // Oculta todas las vistas
      $("#" + tabId).show(); // Muestra la vista correspondiente
    });
  });
</script>

@endsection