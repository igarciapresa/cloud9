<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME_ADMIN;
    public function redirectTo(){
        // $userData = Auth()->user()->role;
        
        // switch($userData){
        //     case "user" : 
        //         return RouteServiceProvider::HOME;
        //         break;
        //     case "ponente" : 
        //         return  RouteServiceProvider::HOME;
        //         break;
        //     case "comite" : 
        //         return RouteServiceProvider::HOME;
        //         break;
        //     case "admin" : 
        //         return RouteServiceProvider::HOME;
        //         break;
        // }
        
        //$this->middleware('guest')->except('logout'); Hacerlo si no está confirmado
        
        return RouteServiceProvider::HOME;
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
