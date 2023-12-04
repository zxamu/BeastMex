<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allproducts = productos::all();

        return view('ALMACEN.almacenIndex', compact('allproducts'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addproducts = new productos();
        $addproducts->nombre_producto = $request->txtNombre;
        $addproducts->no_serie = $request->txtNoserie;
        $addproducts->marca = $request->txtMarca;
        $addproducts->cantidad = $request->txtCantidad;
        $addproducts->costo = $request->txtCosto;
        $addproducts->compra = $request->txtCompra;
        $addproducts->precio_venta = $request->txtPrecio;
        $addproducts->fecha_ingreso = $request->txtFecha;
        Carbon::setLocale('es');

    
    $fechaIngreso = Carbon::createFromFormat('d F Y', $request->txtFecha);

   
    $fechaIngreso = Carbon::createFromFormat('d F Y', strtoupper($request->txtFecha));

    $addproducts->fecha_ingreso = $fechaIngreso->toDateString();
    $addproducts->save();

        $addproducts->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $updproducts = productos::find($id);
        $updproducts->nombre = $request->txtNombre;
        $updproducts->noserie = $request->txtNoserie;
        $updproducts->marca = $request->txtMarca;
        $updproducts->cantidad = $request->txtCantidad;
        $updproducts->costo = $request->txtCosto;
        $updproducts->compra = $request->txtCompra;
        $updproducts->precio = $request->txtPrecio;
        $updproducts->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $desproducts = productos::find($id);
        $desproducts ->delete();
        return redirect()->back();
    }
}