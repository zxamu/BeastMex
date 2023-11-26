<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VENTAS\validadorVentasCalculoGanancias;
use App\Http\Requests\VENTAS\validadorVentasConsultarTickets;
use App\Http\Requests\VENTAS\validadorVentasRegistro;

class controladorVentas extends Controller
{
    //VENTAS
    // interfaz ventasConsultarproducto

    public function metodoMostrarproducto(){
        return view('VENTAS/ventasConsultarproducto'); 
        }       
    
        public function metodoBuscarproducto(validadorFormbeastmex $req){
    
            Alert::success('Buscarproducto','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultarproducto')->with('confirmacion','Mostrar productos');
        }
    
    //interfaz ventas Registrar tickets
    
        public function metodoRegistroVenta(){
            return view('VENTAS/ventasRegistrartickets'); 
        }
    
        public function metodoGuardartickets(validadorFormbeastmex $req){
    
            Alert::success('Guardartickets','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasRegistrartickets')->with('confirmacion','Ticket guardado');
        }
    
    //interfaz calculo de ganancias
    
        public function metodoCalculodeganancias(){
        return view('VENTAS/ventasCalculodeganancias'); 
        }
    
        public function metodoMostrarcalculodegancnias(validadorVentasCalculoGanancias $req){
    
            //Alert::success('Mostrarcalculodeganancias','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasCalculodeganancias')->with('confirmacion','Mostrar Calculo de Ganancias');
        }
    
    //interfaz Consultar tikects
    
        public function metodoConsultartickets(){
            return view('VENTAS/ventasConsultartickets'); 
        }
    
        public function metodoMostrartickets(validadorVentasConsultarTickets $req){
    
            //Alert::success('Mostrartickets','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultartickets')->with('confirmacion','Mostrar Tikets');
        }
    
        public function metodoImprimirtickets(validadorFormbeastmex $req){
    
            Alert::success('Imprimir','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultartickets')->with('confirmacion','Imprimiendo Tikets');
        }
}
