<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Sacamos todos los usuarios registrados en nuestra app
        $users = DB::table('users')->where('role','!=','admin')->paginate(2);
        //Mandamos ese data de los usuarios registrados a la vista home_admin para que los pinte.
        if (Auth::user()->role == 'admin') {
            return view('administrador', ['users' => $users]);
        } else{
            return redirect("/");
        }
    }
    
    public function cambiarrole(User $user){
        return view('cambiar_role', ['user' => $user]);
    }
}