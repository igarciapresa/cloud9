<?php

namespace App\Http\Controllers;

use App\Assessment;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $photos = Photo::all();
        $users = DB::table('users')->select('name', 'id')->get();
        if (Auth::user()->role == 'user') {
            $assessments = Assessment::where('id_user', '=', Auth::user()->id)->get();
        } else {
            $assessments = Assessment::all();
        }
        $new_users = [];
        $users = json_decode($users);
        foreach ($users as $user){
            $new_users[$user->id]=$user->name;
        }
        return view('index', [
            'photos' => $photos,
            'assessments' => $assessments,
            'users' =>$new_users
        ]);
    }
}
