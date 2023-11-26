<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorCompras extends Controller
{
    //COMPRAS
    public function metodoBuscarProductos(){
        return view('COMPRAS/comprasBuscarProductos');
    }

    public function metodoConsultarOC(){
        return view('COMPRAS/compraConsultarOrdenCompra');
    }

    public function metodoRegistroProveedor(){
        return view('COMPRAS/comprasRegistroProveedores');
    }

    public function metodoComprasBP(validadorCoomprasBuscarProducto $req){
        //return 'Se esta procesando tu inicio de sesion';
        //return 'Se esta procesando tu busqueda de producto';
        //Alert::success('Inicio de sesion','Haz iniciado sesion')->persistent(true);

        return redirect('/comprasBuscarProductos')->with('BusquedaProducto', 'Se esta procesando tu busqueda');
    }

    public function metodoRegistroP(validadorComprasRegistroProveedor $req){
        //return 'Se esta procesando tu inicio de sesion';
        //return 'Se esta procesando tu busqueda de producto';
        //Alert::success('Inicio de sesion','Haz iniciado sesion')->persistent(true);

        return redirect('/comprasRegistroProveedores')->with('Registro Proveedor', 'Se esta procesando tu registro de proveedor');
    }
}
