<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeastMexController;

use App\Http\Controllers\controladorAlmacen;
use App\Http\Controllers\controladorCompras;
use App\Http\Controllers\controladorGerencia;
use App\Http\Controllers\controladorVentas;

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
Route::get('/', [controladorCompras::class, 'metodoLogin']);

Route::get('/compraConsultarOrdenCompra', [controladorCompras::class, 'metodoConsultarOC']);

Route::get('/comprasBuscarProductos', [controladorCompras::class, 'metodoBuscarProductos']);

Route::get('/comprasRegistroProveedores', [controladorCompras::class, 'metodoRegistroProveedor']);

//Crear una ruta tipo POST
Route::post('/pLogin', [BeastMexController::class, 'metodoInicioSesion']);

Route::post('/pBuscarProductos', [controladorCompras::class, 'metodoComprasBP']);

Route::post('/pRegistrarProveedor', [controladorCompras::class, 'metodoRegistroP']);

//ALMACEN
Route::get('/almacenRegistrarProducto',[controladorAlmacen::class,'metodoRegistroProducto'])->name('paginaActualizar');
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
Route::get('/gerenciaBuscarUsuario',[controladorGerencia::class,'metodoBuscarU']);