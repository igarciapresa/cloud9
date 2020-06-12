<?php

namespace App\Http\Controllers;

use App\Salon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\SalonRequest;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)//GET
    {//Mostrar un listado paginado de los salones
        $mensaje = $request->session()->get('mensaje');
        $user = Auth::user();
        $salones = Salon::paginate(4);
        return view("Salon.index")->with(['salones' => $salones, 'user' => $user, 'mensaje' => $mensaje]);
        //paginación
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//GET
    {//Formulario para añadir un salón nuevo, formulario POST que lleva a store
        if(Auth::user()){
            if(Auth::user()->role === "admin" || Auth::user()->role === "comite"){
                return view('Salon.create');
            } else return redirect('salon');
        } else return redirect('salon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalonRequest $request)//POST
    {//Recoger los datos de create y crear un salón nuevo
        $input = $request->validated();
        $salon = new Salon($input);
        
        try{
            $result = $salon->save();
        } catch(\Exception $e){
            $result = null;
        }
        
        if($result === true){
            $mensaje = "Salón añadido correctamente";
        } else $mensaje = "No se ha podido añadir el salón";
        
        return redirect('salon')->with(['mensaje' => $mensaje]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function show(Salon $salon)
    {//Mostrar uno en concreto
        return view('Salon.show')->with(['salon' => $salon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function edit(Salon $salon)//GET
    {//Formulario para editar un salón, formulario PUT lleva a update
        if(Auth::user()){
            if(Auth::user()->role === "admin" || Auth::user()->role === "comite"){
                return view('Salon.edit')->with(['salon' => $salon]);
            } else return redirect('salon');
        } else return redirect('salon');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function update(SalonRequest $request, Salon $salon)//PUT
    {
        $input = $request->validated();
        
        try{
            $result = $salon->update($input);
        } catch(\Exception $e){
            $result = null;
        }
        
        if($result === true){
            $mensaje = "Salón editado correctamente";
        } else $mensaje = "No se ha podido editar el salón";
        
        return redirect('salon')->with(['mensaje' => $mensaje]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salon = Salon::find($id);
        
        try{
            $result = $salon->delete();
        } catch(\Exception $e){
            $result = null;
        }
        
        if($result === true){
            $mensaje = "Salón borrado correctamente";
        } else $mensaje = "No se ha podido borrar el salón";

        return redirect('salon')->with(['mensaje' => $mensaje]);
    }
}
