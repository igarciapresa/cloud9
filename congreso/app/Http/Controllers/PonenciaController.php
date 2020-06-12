<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Ponencia;
use App\Visualizacione;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PonenciaController extends Controller{

    public function create(){
        $user_id = Auth::user()->id;
        return view('nueva_ponencia', ['user_id' => $user_id]);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'user_id' => 'required',
            'url' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/nueva_ponencia')
                ->withErrors($validator)
                ->withInput();
        }

        $ponencia = new Ponencia;
        $ponencia->titulo = $request->titulo;
        $ponencia->user_id = $request->user_id;
        $ponencia->url = $request->url;
        $ponencia->descripcion = $request->descripcion;
        $ponencia->save();

        return redirect('/ponente');
    }
    
    public function view(Ponencia $ponencia){
        $user = DB::table('users')->where('id', $ponencia->user_id)->get()->first();

        $visualizado = DB::table('visualizaciones')->where([
            ['id_user', Auth::user()->id], ['id_ponencia', $ponencia->id],
            ])->get()->first();
            
        if (empty($visualizado->id)){
            $visualizado = new Visualizacione;
            $visualizado->id = 0;
        }
        
        return view('ponencia', ['ponencia' => $ponencia, 'user_id' => Auth::user()->id, 'user' => $user, 'visualizado' => $visualizado]);
    }
    
    public function visualizada(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_ponencia' => 'required'
        ]);
        $visualizacion = new Visualizacione;
        $visualizacion->id_user = $request->id_user;
        $visualizacion->id_ponencia = $request->id_ponencia;
        $visualizacion->save();
    
        
        return redirect("/view-email/".$request->id_ponencia);
    }
    
    public function destroy($id)
    {
        $ponencia = Ponencia::findOrFail($id);
        $ponencia->delete();
        
        if(Auth::user()->role == 'ponente'){
            $redirect = 'ponente';
        } else if(Auth::user()->role == 'comite'){
            $redirect = 'comite';
        } else $redirect = 'home';

        return redirect($redirect);
    }
    
    public function edit(Ponencia $ponencia){
        return view('edit_ponencia', ['ponencia' => $ponencia]);
    }
    
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'titulo' => 'required',
            'url' => 'required',
        ]);
        
        if(Auth::user()->role == 'ponente'){
            $redirect = 'ponente';
        } else if(Auth::user()->role == 'comite'){
            $redirect = 'comite';
        } else $redirect = 'home';

        if ($validator->fails()) {
            return redirect($redirect)
                ->withErrors($validator)
                ->withInput();
        }

        DB::table('ponencias')->where('id', $request->id)->update(['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'url' => $request->url]);

        return redirect($redirect);
    }
}