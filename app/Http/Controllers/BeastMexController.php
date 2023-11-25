<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorGerencia;
use App\Http\Requests\validadorCoomprasBuscarProducto;
use App\Http\Requests\validadorVentasConsultarTickets;
use App\Http\Requests\validadorVentasCalculoGanancias;
#use App\Http\Requests\validadorAlmacenRegistro;
use App\Http\Requests\validadorComprasRegistroProveedor;

use App\Http\Requests\ALMACEN\validadorAlmacenRegistro;


class BeastMexController extends Controller
{
    public function metodoLogin(){
        return view('login');
    }

    public function metodoBuscarProductos(){
        return view('COMPRAS/comprasBuscarProductos');
    }

    public function metodoConsultarOC(){
        return view('COMPRAS/compraConsultarOrdenCompra');
    }

    public function metodoRegistroProveedor(){
        return view('COMPRAS/comprasRegistroProveedores');
    }

    public function metodoInicioSesion(validadorLogin $req){
        //return 'Se esta procesando tu inicio de sesion';
        //return 'Se esta procesando tu busqueda de producto';
        //Alert::success('Inicio de sesion','Haz iniciado sesion')->persistent(true);

        return redirect('/')->with('Inicio de sesion', 'Se esta procesando tu inicio de sesion');
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

        //Gerencia
        public function metodoGerencia(){
            return view('GERENCIA/gerencia');
        }

        public function metodoGuardarUser(validadorGerencia $req){
            return redirect('/gerencia')->with('confirmacion','El usuario se guardo correctamente.');
        }



        //seccion de reportes
        public function metodoRV(){
            return view('GERENCIA/gerenciaReportesVentas');
        }

        public function metodoRG(){
            return view('GERENCIA/gerenciaReportesGanancias');
        }

        public function metodoRC(){
            return view('GERENCIA/gerenciaReportesCompras');
        }

        //registrar y actualizar usuarios

        public function metodoRegistrarU(){
            return view('GERENCIA/gerenciaRegistrarUsuarios');
        }

        public function metodoActualizarU(){
            return view('GERENCIA/gerenciaActualizarUsuario');
        }

        //consultar y buscar usuarios
        public function metodoConsultarU(){
            return view('GERENCIA/gerenciaConsultarUsuario');
        }

        public function metodoBuscarU(){
            return view('GERENCIA/gerenciaBuscarUsuario');
        }


}
