<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ponencias = DB::table('ponencias')->paginate(3);
        if (Auth::user() == null){
            return view('welcome',['ponencias' => $ponencias]);
        }else{
            return view('home',['ponencias' => $ponencias]);
        }
        
    }
}
