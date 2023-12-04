<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorComprasRegistroProveedor;

use DB;
use Carbon\Carbon;

class comprasCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $consulProve=DB::table('proveedores')->get();
        return view('COMPRAS/comprasConsultarProveedores',compact('consulProve'));
    }

    public function search(Request $req)
    {
        $nom=$req->input('txtNombre');

        $consulProve=DB::table('proveedores')->where('nombre','LIKE','%'. $nom .'%')->get();

        return view('COMPRAS/comprasConsultarProveedores',compact('consulProve'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('COMPRAS/comprasRegistroProveedores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorComprasRegistroProveedor $req)
    {
        
        DB::table('empresas')->insert([
            "razon_social"=>$req->input('txtRZ'),
            "telefono"=>$req->input('txtTel'),
            "correo"=>$req->input('txtCorreo'),
/*           "created_at"=>Carbon::now(),
            "uptdated_at"=>Carbon::now(), */
        ]);


        DB::table('proveedores')->insert([
            "nombre"=>$req->input('txtNombre'),
            "ap"=>$req->input('txtAP'),
            "am"=>$req->input('txtAM'),
/*             "created_at"=>Carbon::now(),
            "uptdated_at"=>Carbon::now(), */
        ]);

        DB::table('domicilios')->insert([
            "estado"=>$req->input('txtEstado'),
            "municipio"=>$req->input('txtMunicipio'),
            "colonia"=>$req->input('txtColonia'),
            "calle"=>$req->input('txtCalle'),
            "num_domicilio"=>$req->input('txtNumero'),
/*             "created_at"=>Carbon::now(),
            "uptdated_at"=>Carbon::now(), */
        ]);

        return redirect('/proveedor/create')->with('Registro Proveedor', 'Tu registro del proveedor ha sido exitoso');
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
    public function update(validadorComprasRegistroProveedor $req, string $id)
    {
        //
        DB::table('empresas')->where('id_empresa',$id)->update([
            "razon_social"=>$req->input('txtRZ'),
            "telefono"=>$req->input('txtTel'),
            "correo"=>$req->input('txtCorreo'),
        ]);

        DB::table('proveedores')->where('id_prov',$id)->update([
            "nombre"=>$req->input('txtNombre'),
            "ap"=>$req->input('txtAP'),
            "am"=>$req->input('txtAM'),
        ]);

        DB::table('domicilios')->where('id_domicilio',$id)->update([
            "estado"=>$req->input('txtEstado'),
            "municipio"=>$req->input('txtMunicipio'),
            "colonia"=>$req->input('txtColonia'),
            "calle"=>$req->input('txtCalle'),
            "num_domicilio"=>$req->input('txtNumero'),
        ]);

        return redirect('/proveedor/create')->with('Registro Proveedor', 'Tu actualizacion del proveedor ha sido exitoso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('empresas')->where('id_empresa',$id)->delete();

        $mensajeConfirmacion='Proveedor eliminado exitosamente';

        return redirect('/proveedor')->with('Registro Proveedor', $mensajeConfirmacion);
    }
}
