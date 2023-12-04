<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorLogin;

class BeastMexController extends Controller
{
    public function metodoLogin(){
        return view('login');
    }

}
