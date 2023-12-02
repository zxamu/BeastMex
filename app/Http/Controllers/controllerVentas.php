<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controllerVentas;
use Illuminate\Http\Request;
use App\Http\Request\validador\validadorVentasRegistro;
use BD;
use Carbon\Carbon;

class controllerVentas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ventasRegistrartickets');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorVentasregistro $request)
    {
        DB::table('registro_tickets')-> insert ([

        ]);
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
