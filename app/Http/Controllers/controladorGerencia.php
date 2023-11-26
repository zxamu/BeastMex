<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GERENCIA\validadorGerencia;

class controladorGerencia extends Controller
{
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
