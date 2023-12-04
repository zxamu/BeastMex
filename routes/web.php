<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeastMexController;

use App\Http\Controllers\controladorAlmacen;
use App\Http\Controllers\controladorCompras;
use App\Http\Controllers\controladorGerencia;
use App\Http\Controllers\controladorVentas;

use App\Http\Controllers\comprasCRUD;
use App\Http\Controllers\productosCRUD;
use App\Http\Controllers\ordenCompraCRUD;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

//COMPRAS
Route::get('/', [BeastMexController::class, 'metodoLogin']);

/* Route::get('/compraConsultarOrdenCompra', [controladorCompras::class, 'metodoConsultarOC']);

Route::get('/comprasBuscarProductos', [controladorCompras::class, 'metodoBuscarProductos']);

Route::get('/comprasRegistroProveedores', [controladorCompras::class, 'metodoRegistroProveedor']);


//Crear una ruta tipo POST
Route::post('/pLogin', [BeastMexController::class, 'metodoInicioSesion']);

Route::post('/pBuscarProductos', [controladorCompras::class, 'metodoComprasBP']);

Route::post('/pRegistrarProveedor', [controladorCompras::class, 'metodoRegistroP']);
 */
//CRUD COMPRAS
Route::get('/proveedor/create',[comprasCRUD::class,'create']);
Route::post('/proveedor',[comprasCRUD::class,'store']);
Route::get('/proveedor',[comprasCRUD::class,'index'])->name('proveedor.index');

Route::post('/proveedor/{id}/confirm',[comprasCRUD::class,'update'])->name('proveedor.update');

Route::delete('proveedor/{id}', [comprasCRUD::class, 'destroy'])->name('proveedor.destroy');

Route::post('proveedor/search', [comprasCRUD::class, 'search'])->name('proveedor.search');

//CRUD PRODUCTOS

Route::get('/producto/create',[productosCRUD::class,'create']);
Route::get('/producto',[productosCRUD::class,'index'])->name('prod.index');
Route::post('producto/search', [productosCRUD::class, 'search'])->name('prod.search');

//GENERAR ORDEN DE COMPRA

Route::get('/oc/create',[ordenCompraCRUD::class,'create']);
Route::get('/oc',[ordenCompraCRUD::class,'index'])->name('oc.index');
Route::post('oc/search', [ordenCompraCRUD::class, 'search'])->name('oc.search');
Route::get('/generaroc',[ordenCompraCRUD::class,'generarOrdenCompra'])->name('oc.generarOrdenCompra');


//ALMACEN
/* Route::get('/almacenRegistrarProducto',[controladorAlmacen::class,'metodoRegistroProducto'])->name('paginaActualizar');
Route::get('/almacenActualizar',[controladorAlmacen::class,'metodoActualizar'])->name('paginaActualizar');
Route::get('/almacenBuscar',[controladorAlmacen::class,'metodoBuscar'])->name('paginaBuscar');
Route::get('/almacenConsultar',[controladorAlmacen::class,'metodoConsultar'])->name('paginaConsultar');
Route::post('/guardarRegistro',[controladorAlmacen::class,'metodoGuardarAR'])->name('Guardar');
Route::post('/guardarRegistroAct',[controladorAlmacen::class,'metodoGuardarAct'])->name('GuardarAct');

//VENTAS

//interfaz de ventas consultar productos
Route::get('/ventasConsultarproducto',[controladorVentas::class,'metodoMostrarproducto'])->name('Mostrarproducto');

Route::post('/Buscarproducto',[controladorVentas::class,'metodoBuscarproducto'])->name('Buscarproducto');

// interfaz de ventas resgistrar tickets
Route::get('/ventasRegistrartickets',[controladorVentas::class,'metodoRegistroVenta'])->name('Registroventa');

Route::post('/Guardartickets',[controladorVentas::class,'metodoGuardartickets'])->name('Guardartickets');

// interfaz de ventas calculo de ganancias
Route::get('/ventasCalculodeganancias',[controladorVentas::class,'metodoCalculodeganancias'])->name('Calculodeganancias');

Route::post('/Mostrarcalculodegancnias',[controladorVentas::class,'metodoMostrarcalculodegancnias'])->name('Mostrarcalculodegancnias');

// interfaz de ventas consultar tikets
Route::get('/ventasConsultartickets',[controladorVentas::class,'metodoConsultartickets'])->name('Consultartickets');

Route::post('/Mostrartickets',[controladorVentas::class,'metodoMostrartickets'])->name('Mostrartickets');
// imprimir tikets
Route::post('/Imprimirtickets',[controladorVentas::class,'metodoImprimirtickets'])->name('Imprimirtickets');


//GERENCIA

Route::get('/gerencia',[controladorGerencia::class,'metodoGerencia'])->name('Gerencia');
Route::post('/guardarU', [controladorGerencia::class, 'metodoGuardarUser']);

//seccion de reportes
Route::get('/gerenciaReportesVentas',[controladorGerencia::class,'metodoRV']);
Route::get('/gerenciaReportesGanancias',[controladorGerencia::class,'metodoRG']);
Route::get('/gerenciaReportesCompras',[controladorGerencia::class,'metodoRC']);

//registro y actualizar usuario

Route::get('/gerenciaRegistrarUsuario',[controladorGerencia::class,'metodoRegistrarU']);
Route::get('/gerenciaActualizarUsuario',[controladorGerencia::class,'metodoActualizarU']);

//consultar y buscar
Route::get('/gerenciaConsultarUsuario',[controladorGerencia::class,'metodoConsultarU']);
Route::get('/gerenciaBuscarUsuario',[controladorGerencia::class,'metodoBuscarU']); */

/* Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
