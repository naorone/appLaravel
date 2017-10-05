<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function registro(Request $request)
    {
        Usuario::create($request->all());
        return view('home');
    }
}
