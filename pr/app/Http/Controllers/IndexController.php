<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $messages = [
            'logged' => 'Bienvenido',
            'passwordreset' => 'Clave de acceso reseteada',
            'registered' => 'Registrado, ver correo',
            'useredit' => 'Se ha editado el usuario y se le ha enviado un correo de verificación',
            'verified' => 'Usuario verificado, ya puedes iniciar sesión',
        ];
        $opSession = $request->session()->get('op');
        $alertMessage = null;
        if(isset($messages[$opSession])) {
            $alertMessage = $messages[$opSession];
        }
        return view('index')->with(['alertMessage' => $alertMessage]);
    }

    public function correo()
    {
        $destinatario = 'izvdaw0@gmail.com';
        $correo = new \App\Mail\CorreoInformativo();
        $correo->setSubject('Saludos');
        \Mail::to($destinatario)->send($correo);
    }

    function autentificado()
    {
        echo 'autentificado';
    }

    function guest()
    {
        echo 'guest';
    }

    function verificado()
    {
        echo 'verificado';
    }

    function basic(Request $request)
    {
        echo $request['tituloApp'];
        
    }

    function admin()
    {
        echo 'admin';
    }

    function censura(Request $request)
    {
        echo '3';
        $dato1 = $request['dato1'];
        $array = [
            'dato1' => $dato1,
            'dato3' => 'se-o'
        ];
        echo '4';
        return view('censura')->with($array);
    }
}