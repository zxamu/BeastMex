<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ALMACEN\validadorAlmacenRegistro;

class controladorAlmacen extends Controller
{
     //ALMACEN

     public function metodoRegistroProducto(){
        return view('ALMACEN/almacenRegistrarProducto');
    }

    public function metodoActualizar(){
        return view('ALMACEN/almacenActualizar');
    }

    public function metodoBuscar(){
        return view('ALMACEN/almacenBuscar');
    }

    public function metodoConsultar(){
        return view('ALMACEN/almacenConsultar');
    }

    public function metodoGuardarAR(validadorAlmacenRegistro $req){
       /*  return "se guardo el registro"; ---Prueba de funcionamiento */
        
       return redirect('/')->with('confirmacion','El producto se guradó correctamente.');

    }

    public function metodoGuardarAct (validadorAlmacenRegistro $req){
       /*  return "se guardo el registro"; ---Prueba de funcionamiento */
       return redirect('/almacenActualizar')->with('confirmacion','El producto se actualizó correctamente.');
    }
}
