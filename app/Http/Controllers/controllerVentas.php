<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controllerVentas;
use Illuminate\Http\Request;
use App\Http\Request\validador\validadorVentasRegistro;
use DB;
use Carbon\Carbon;

class controllerVentas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulventas = ventas::all();
        return view('ventasConsultarproducto.index', compact('consulventas'));
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('VENTAS/ventasConsultarproducto');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorVentasConsultarProductos $request)
    {
        DB::table('registro_tickets')-> insert ([
            "nombre_producto"=>$request->string('txtNombre'),
            "no_serie"=>$request->string('txtSerie'),
            "marca"=>$request->string('txtMarca'),
            "cantidad"=>$request->int('txtCantidad'),
            "costo"=>$request->decimal('txtCosto'),
            "compra"=>$request->decimal('txtcompra'),
            "precio_venta"=>$request->decimal('txtPrecio'),
            "fecha_ingreso"=>carbon::now('txtFecha'),
        ]);
        return redirect('/ventasConsultarproducto/create')->with('confirmacion','llego al controlador');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
