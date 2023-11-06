<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeastMexController extends Controller
{
    public function metodoLogin(){
        return view('login');
    }

    public function metodoBuscarProductos(){
        return view('buscarProductos');
    }

    public function metodoConsultarOC(){
        return view('consultarOrdenCompra');
    }


    public function metodoGuardar(validadorLogin $req){
        //return 'Se esta procesando tu inicio de sesion';
        //return 'Se esta procesando tu busqueda de producto';
        Alert::success('Inicio de sesion','Haz iniciado sesion')->persistent(true);

        return redirect('/')->with('Inicio de sesion', 'Se esta procesando tu inicio de sesion');
    }

    //VENTAS
    // interfaz ventasConsultarproducto

    public function metodoMostrarproducto(){
        return view('ventasConsultarproducto'); 
        }       
    
        public function metodoBuscarproducto(validadorFormbeastmex $req){
    
            Alert::success('Buscarproducto','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultarproducto')->with('confirmacion','Mostrar productos');
        }
    
    //interfaz ventas Registrar tickets
    
        public function metodoRegistroVenta(){
            return view('ventasRegistrartickets'); 
        }
    
        public function metodoGuardartickets(validadorFormbeastmex $req){
    
            Alert::success('Guardartickets','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasRegistrartickets')->with('confirmacion','Ticket guardado');
        }
    
    //interfaz calculo de ganancias
    
        public function metodoCalculodeganancias(){
        return view('ventasCalculodeganancias'); 
        }
    
        public function metodoMostrarcalculodegancnias(validadorFormbeastmex $req){
    
            Alert::success('Mostrarcalculodeganancias','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasCalculodeganancias')->with('confirmacion','Mostrar Calculo de Ganancias');
        }
    
    //interfaz Consultar tikects
    
        public function metodoConsultartickets(){
            return view('ventasConsultartickets'); 
        }
    
        public function metodoMostrartickets(validadorFormbeastmex $req){
    
            Alert::success('Mostrartickets','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultartickets')->with('confirmacion','Mostrar Tikets');
        }
    
        public function metodoImprimirtickets(validadorFormbeastmex $req){
    
            Alert::success('Imprimir','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultartickets')->with('confirmacion','Imprimiendo Tikets');
        }

        //ALMACEN

        public function metodoRegistro(){
            return view('welcome');
        }
    
        public function metodoActualizar(){
            return view('almacenActualizar');
        }
    
        public function metodoBuscar(){
            return view('almacenBuscar');
        }
    
        public function metodoConsultar(){
            return view('almacenConsultar');
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
