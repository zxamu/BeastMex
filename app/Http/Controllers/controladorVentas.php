<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VENTAS\validadorVentasCalculoGanancias;
use App\Http\Requests\VENTAS\validadorVentasConsultarTickets;
use App\Http\Requests\VENTAS\validadorVentasRegistro;
use App\Http\Requests\VENTAS\validadorVentasConsultarProductos; // Asegúrate de que el nombre del archivo coincida con la clase
use App\Http\Requests\VENTAS\validadorventaProducto;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class controladorVentas extends Controller
{
    // VENTAS
    // interfaz ventasConsultarproducto

    public function metodoMostrarproducto()
    {
        $nombreProducto = request('txtNombreProducto'); 
        $consulpro = DB::table('productos')->where('nombre_producto', 'like', "%$nombreProducto%")->get();
        // dd($consulpro);
        return view('VENTAS/ventasConsultarproducto', compact('consulpro'));
    }
    //Buscar
    // Buscar
    public function metodoBuscarproducto()
    {
    $nombreProducto = request('txtNombreProducto');

    $consulpro = DB::table('productos')->where('nombre_producto', 'like', "%$nombreProducto%")->get();

    return view('VENTAS/ventasConsultarproducto', compact('consulpro'));
    }
    
    //editar
    public function update(validadorVentaProducto $request, $id)
    {
        DB::table('productos')->where('id_producto', $id)->update([
            "nombre_producto" => $request->input('txtNombre'),
            "no_serie" => $request->input('txtSerie'),
            "marca" => $request->input('txtMarca'),
            "cantidad" => $request->input('txtCantidad'),
            "costo" => $request->input('txtCosto'),
            "compra" => $request->input('txtCompra'),
            "precio_venta" => $request->input('txtPrecioVenta'),
            "fecha_ingreso" => Carbon::now(),
        ]);

        return redirect('/ventasConsultarproducto');
    }
    //eliminar
    public function delete($id)
    {
        DB::table('productos')->where('id_producto', $id)->delete();
    
        $mensajeConfirmacion = 'Producto eliminado correctamente';
    
        return redirect('/ventasConsultarproducto')->with('mensaje', 'Producto eliminado con éxito');
    }
    //Agregar productos a la lista
    // controladorVentas.php
    public function agregarAListaCompra(Request $request)
    {
        $idProducto = $request->input('id_producto');
        $producto = DB::table('productos')->where('id_producto', $idProducto)->first();
    
        if ($producto) {
            $producto->agregado = true;
    
            $listaCompras = $request->session()->get('listaCompras', []);
    
            $listaCompras[] = $producto;
    
            $request->session()->put('listaCompras', $listaCompras);
    
            // Devuelve la lista actualizada en formato JSON
            return response()->json(['listaCompras' => $listaCompras]);
        }
    
        // Devuelve un error si el producto no se encuentra
        return response()->json(['error' => 'Producto no encontrado'], 404);
    }
    

    //Generar Ticket
    public function generarTicketCompra(Request $request)
    {
        $listaCompras = $request->session()->get('listaCompras', []);
    
        if (count($listaCompras) > 0) {

            $usuario = Auth::user();
    
            // Ejemplo de inserción en la tabla `registro_tickets`
            $ticketId = DB::table('registro_tickets')->insertGetId([
                'id_registro_ticket' => $request->id,
                'fecha' => now(),
                'total' => $this->calcularTotalCompra($listaCompras),
            ]);
    
            // Aquí deberías insertar los detalles del ticket en la tabla correspondiente
            foreach ($listaCompras as $producto) {
                DB::table('registros_tickets')->insert([
                    'id_persona' => $ticketId,
                    'nombre' => $ticketId,
                    'ap' => $ticketId,
                    'am' => $ticketId,
                    'id_producto' => $producto->id_producto,
                    'cantidad' => $producto->cantidad,
                    'precio_venta' => $producto->precio_venta,
                    // Otros campos según tu estructura de tabla
                ]);
            }
            $request->session()->forget('listaCompras');
    
            return response()->json(['mensaje' => 'Ticket generado correctamente'], 200);
        }
    
        return response()->json(['error' => 'La lista de compras está vacía'], 400);
    }
    
        protected function calcularTotalCompra($productos)
    {
        $total = 0;
    
        foreach ($productos as $producto) {
            $total += $producto->cantidad * $producto->precio_venta;
        }
    
        return $total;
    }



    //interfaz ventas Registrar tickets
    
        public function metodoRegistroVenta($req){
            return view('VENTAS/ventasRegistrartickets'); 
        }
    
        public function metodoGuardartickets( $req){
    
            Alert::success('Guardartickets','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasRegistrartickets')->with('confirmacion','Ticket guardado');
        }
    
    //interfaz calculo de ganancias
    
        public function metodoCalculodeganancias($req){
        return view('VENTAS/ventasCalculodeganancias'); 
        }
    
        public function metodoMostrarcalculodegancnias(validadorVentasCalculoGanancias $req){
    
            //Alert::success('Mostrarcalculodeganancias','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasCalculodeganancias')->with('confirmacion','Mostrar Calculo de Ganancias');
        }
    
    //interfaz Consultar tikects
    
        public function metodoConsultartickets($req){
            return view('VENTAS/ventasConsultartickets'); 
        }
    
        public function metodoMostrartickets(validadorVentasConsultarTickets $req){
    
            //Alert::success('Mostrartickets','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultartickets')->with('confirmacion','Mostrar Tikets');
        }
    
        public function metodoImprimirtickets($req){
    
            Alert::success('Imprimir','Tu registro ha sido exitoso')->persistent(true);
    
            return redirect('/ventasConsultartickets')->with('confirmacion','Imprimiendo Tikets');
        }
}
