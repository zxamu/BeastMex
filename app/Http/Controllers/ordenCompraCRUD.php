<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;

use PDF;

class ordenCompraCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consulOC=DB::table('productos')->get();
        return view('COMPRAS/compraConsultarOrdenCompra',compact('consulOC'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('COMPRAS/compraConsultarOrdenCompra');
    }

    public function generarOrdenCompra()
    {
        $data=$this->getDataForOrdenCompra();

        $pdf = PDF::loadView('COMPRAS.orden-compra', $data);

        return $pdf->stream('orden_compra.pdf');
    }

    private function getDataForOrdenCompra()
    {
        $empresa=DB::table('empresas')->get();
        $producto=DB::table('productos')->get();
        $proveedor=DB::table('proveedores')->get();

        return [
            'empresa' => $empresa,
            'producto' => $producto,
            'proveedor' => $proveedor,
        ];

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
