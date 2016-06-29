<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function bienvenida()
    {
        $usuario = User::where('name', "=", Auth::user()->name)->first();
        $egresados = User::where('nombre_universidad', "=", Auth::user()->name)->get();

        return view('bienvenida', compact('usuario', 'egresados'));
    }

    public function guardarInformacion(Request $informacion)
    {
        /*$usuario = User::where('name', "=", Auth::user()->name)->first();
        $usuario->titulo=$informacion->input('titulo');
        $usuario->nombre_universidad=$informacion->input('nombre_universidad');
        $usuario->trabaja=$informacion->input('trabaja');
        $usuario->edad=$informacion->input('edad');
        $usuario->telefono=$informacion->input('telefono');
        $usuario->sexo=$informacion->input('sexo');
        $usuario->graduacion=$informacion->input('graduacion');
        $usuario->salario=$informacion->input('salario');
        $usuario->con_generales=$informacion->input('con_generales');
        $usuario->con_especializados=$informacion->input('con_especializados');
        $usuario->lenguas_extranjeras=$informacion->input('lenguas_extranjeras');
        $usuario->adaptabilidad=$informacion->input('adaptabilidad');

        $usuario->save();

        return redirect()->to("/bienvenida");*/

        /*return User::save([
            'titulo' => $informacion['titulo'],
            'nombre_universidad' => $informacion['nombre_universidad'],
            'trabaja' => $informacion['trabaja'],
            'edad' => $informacion['edad'],
            'telefono' => $informacion['telefono'],
            'sexo' => $informacion['sexo'],
            'graduacion' => $informacion['graduacion'],
            'salario' => $informacion['salario'],
            'con_generales' => $informacion['con_generales'],
            'con_especializados' => $informacion['con_especializados'],
            'lenguas_extranjeras' => $informacion['lenguas_extranjeras'],
            'adaptabilidad' => $informacion['adaptabilidad'],
        ]);*/
    }

}
