<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeastMexController;

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

Route::get('/consultarOrdenCompra', [BeastMexController::class, 'metodoConsultarOC']);

Route::get('/buscarProductos', [BeastMexController::class, 'metodoBuscarProductos']);

//Crear una ruta tipo POST
Route::post('/pLogin', [BeastMexController::class, 'metodoGuardar']);

Route::post('/pBuscarProductos', [BeastMexController::class, 'metodoGuardar']);

//ALMACEN
Route::get('/almacenActualizar',[BeastMexController::class,'metodoActualizar'])->name('paginaActualizar');
Route::get('/almacenBuscar',[BeastMexController::class,'metodoBuscar'])->name('paginaBuscar');
Route::get('/almacenConsultar',[BeastMexController::class,'metodoConsultar'])->name('paginaConsultar');
Route::post('/guardarRegistro',[BeastMexController::class,'metodoGuardarAR'])->name('Guardar');
Route::post('/guardarRegistroAct',[BeastMexController::class,'metodoGuardarAct'])->name('GuardarAct');

//VENTAS

//interfaz de ventas consultar productos
Route::get('/ventasConsultarproducto',[BeastMexController::class,'metodoMostrarproducto'])->name('Mostrarproducto');

Route::post('Buscarproducto',[BeastMexController::class,'metodoBuscarproducto'])->name('Buscarproducto');

// interfaz de ventas resgistrar tickets
Route::get('/ventasRegistrartickets',[BeastMexController::class,'metodoRegistroventa'])->name('Registroventa');

Route::post('Guardartickets',[BeastMexController::class,'metodoGuardartickets'])->name('Guardartickets');

// interfaz de ventas calculo de ganancias
Route::get('/ventasCalculodeganancias',[BeastMexController::class,'metodoCalculodeganancias'])->name('Calculodeganancias');

Route::post('Mostrarcalculodegancnias',[BeastMexController::class,'metodoMostrarcalculodegancnias'])->name('Mostrarcalculodegancnias');

// interfaz de ventas consultar tikets
Route::get('/ventasConsultartickets',[BeastMexController::class,'metodoConsultartickets'])->name('Consultartickets');

Route::post('Mostrartickets',[BeastMexController::class,'metodoMostrartickets'])->name('Mostrartickets');
// imprimir tikets
Route::post('Imprimirtickets',[BeastMexController::class,'metodoImprimirtickets'])->name('Imprimirtickets');

//GERENCIA

Route::get('/gerencia', function () {
    return view('tabmenu');
});

Route::post('/guardarUsuario', [BeastMexController::class, 'metodoGuardar'])->name('Guardar');
