<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function registro(Request $request)
    {
        $this->validate(request(), [
            'nombre' => ['required','max:10'],
            'apellido' => ['required','max:10'],
            'usuario' => ['required','min:5'],
            'password' => ['required','min:8']
        ]);
;

        Usuario::create($request->all());
        return view('home');
    }
}
