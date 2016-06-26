<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Datosextra;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'nombre_universidad' => 'required',
            'titulo' => 'required',
            'trabajo' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'graduacion' => 'required',
            'ideas_propias' => 'required',
            'salario' => 'required',
            'trabajo_equipo' => 'required',
            'ambiente' => 'required',
            'con_generales' => 'required',
            'con_especializados' => 'required',
            'lenguas_extranjeras' => 'required',
            'adaptabilidad' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $datosextra = new Datosextra();
        $datosextra->nombre_universidad = $data['nombre_universidad'];
        $datosextra->titulo = $data['titulo'];
        $datosextra->trabajo = $data['trabajo'];
        $datosextra->edad = $data['edad'];
        $datosextra->telefono = $data['telefono'];
        $datosextra->sexo = $data['sexo'];
        $datosextra->graduacion = $data['graduacion'];
        $datosextra->ideas_propias = $data['ideas_propias'];
        $datosextra->salario = $data['salario'];
        $datosextra->trabajo_equipo = $data['trabajo_equipo'];
        $datosextra->ambiente = $data['ambiente'];
        $datosextra->con_generales = $data['con_generales'];
        $datosextra->con_especializados = $data['con_especializados'];
        $datosextra->lenguas_extranjeras = $data['lenguas_extranjeras'];
        $datosextra->adaptabilidad = $data['adaptabilidad'];
        $datosextra->save();

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'nombre_universidad' => $data['nombre_universidad'],
            'titulo' => $data['titulo'],
            'trabajo' => $data['trabajo'],
            'edad' => $data['edad'],
            'telefono' => $data['telefono'],
            'sexo' => $data['sexo'],
            'graduacion' => $data['graduacion'],
            'ideas_propias' => $data['ideas_propias'],
            'salario' => $data['salario'],
            'trabajo_equipo' => $data['trabajo_equipo'],
            'ambiente' => $data['ambiente'],
            'con_generales' => $data['con_generales'],
            'con_especializados' => $data['con_especializados'],
            'lenguas_extranjeras' => $data['lenguas_extranjeras'],
            'adaptabilidad' => $data['adaptabilidad'],

        ]);
    }
}
