<?php

namespace App\Http\Controllers;

use App\Models\almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allproducts = almacen::all();

        return view ('ALMACEN.almacenRegistrarProducto',compact('allproducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addproducts = new almacen();
        $addproducts->nombre = $request->txtNombre;
        $addproducts->noserie = $request->txtNoserie;
        $addproducts->marca = $request->txtMarca;
        $addproducts->cantidad = $request->txtCantidad;
        $addproducts->costo = $request->txtCosto;
        $addproducts->compra = $request->txtCompra;
        $addproducts->precio = $request->txtPrecio;
        $addproducts-save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(almacen $almacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(almacen $almacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $updproducts = almacen::find($id);
        $updproducts->nombre = $request->txtNombre;
        $updproducts->noserie = $request->txtNoserie;
        $updproducts->marca = $request->txtMarca;
        $updproducts->cantidad = $request->txtCantidad;
        $updproducts->costo = $request->txtCosto;
        $updproducts->compra = $request->txtCompra;
        $updproducts->precio = $request->txtPrecio;
        $updlibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deslibro = almacen::find($id);
        $deslibro ->delete();
        return redirect()->back();
    }
}
