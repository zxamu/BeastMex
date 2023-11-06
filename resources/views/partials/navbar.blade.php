<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Importaciones BeastMex</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              GERENCIA
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/gerenciaRegistrarUsuario">Registrar usuarios</a></li>
              <li><a class="dropdown-item" href="/gerenciaConsultarUsuario">Consultar usuarios</a></li>
              <li><a class="dropdown-item" href="/gerenciaBuscarUsuario">Buscar usuarios</a></li>
              <li><a class="dropdown-item" href="/gerenciaActualizarUsuario">Actualizar usuarios</a></li>
              <li><a class="dropdown-item" href="#">Consulta de compras</a></li>
              <li><a class="dropdown-item" href="#">Consulta de ventas</a></li>
              <li><a class="dropdown-item" href="#">Consulta de almacen</a></li>
              <li><a class="dropdown-item" href="/gerenciaReportesCompras">Reportes compras</a></li>
              <li><a class="dropdown-item" href="/gerenciaReportesVentas">Reportes ventas</a></li>
              <li><a class="dropdown-item" href="/gerenciaReportesGanancias">Reportes ganancias</a></li>
            </ul>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              COMPRAS
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/comprasRegistroProveedores">Registrar proveedor</a></li>
              <li><a class="dropdown-item" href="/compraConsultarOrdenCompra">Consultar orden de compra</a></li>
              <li><a class="dropdown-item" href="/comprasBuscarProductos">Buscar productos</a></li>
            </ul>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              VENTAS
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/ventasConsultartickets">Consultar tickets</a></li>
              <li><a class="dropdown-item" href="/ventasCalculodeganancias">Calculo de ganancias</a></li>
            </ul>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ALMACEN
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/almacenRegistrarProducto">Registrar productos</a></li>
              <li><a class="dropdown-item" href="/almacenActualizar">Actualizar productos</a></li>
              <li><a class="dropdown-item" href="/almacenConsultar">Consultar productos</a></li>
              <li><a class="dropdown-item" href="/almacenBuscar">Buscar productos</a></li>
              </ul>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>