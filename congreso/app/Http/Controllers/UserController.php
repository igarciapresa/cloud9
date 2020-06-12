<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\CustomEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User.index")->with(['users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        $time = Carbon::now()->toDateTimeString();
        return view("nuevo_user", ['time' => $time]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password2' => 'required_with:password|same:password|min:8',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/nuevo_user')
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect('/administrador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        return view("ver_user", ['user' => $user]);
    }
    
    public function contrasena()
    {
        $user = Auth::user();
        return view("editar_contrasena", ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }


    public function update(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'new_role' => 'required'
        ]);
        DB::table('users')->where('id', $request->id_user)->update(['role' => $request->new_role]);
        return redirect("/administrador");
    }
    
    public function update1(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);
        DB::table('users')->where('id', $request->id_user)->update(['name' => $request->name, 'email' => $request->email]);
        return redirect("/usuario")->with('message', 'Datos editados correctamente');
    }
    
    public function update2(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'contrasena' => ['required', 'min:8', 'same:repite'],
            'repite' => 'required'
        ]);
        $password = Hash::make($request->contrasena);
        DB::table('users')->where('id', $request->id_user)->update(['password' => $password]);
        return redirect("/usuario")->with('message', 'Contraseña cambiada correctamente');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('administrador');
    }
    
    public function ponente(){
        if (Auth::user()->role == 'ponente') {
            
            $ponencias = DB::table('ponencias')->where('user_id', Auth::user()->id)->get();
            
            return view("ponente", ['ponencias' => $ponencias, 'user_name' => Auth::user()->name]);
        } else{
            return redirect("/");
        }
    }
    
    public function ponente2($id){
        $user = User::find($id);   
        return view("User.ponente2")->with(['user' => $user]);
    }
    
    public function comite(){
        if (Auth::user()->role == 'comite'){
            $ponencias = DB::table('ponencias')->get();
            return view("comite", ['ponencias' => $ponencias, 'user_name' => Auth::user()->name]);
        } else{
            return redirect("/");
        }
    }
}