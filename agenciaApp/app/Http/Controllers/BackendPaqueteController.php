<?php

namespace App\Http\Controllers;

use App\Paquete;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PaqueteRequest;
use App\Http\Requests\UpdatePaqueteRequest;

class BackendPaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('backend.index');
    }
    
    public function index(Request $request)
    {
        $result = $request->session()->get('result');
        $mensaje = null;
        if($result !== null){
            $r = '';
            if($result === false){
                $r = 'no';
            }
            $op = $request->session()->get('op');
            $target = $request->session()->get('target');
            $mensaje = 'La operación ' . $op . ' sobre la tabla ' . $target . ' ' . $r . ' ha funcionado.';
        }
        //dd($result);
        $paquetes = Paquete::all();
        return view('backend.paquete.index')->with(['paquetes' => $paquetes, 'mensaje' => $mensaje]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.paquete.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaqueteRequest $request)
    {
        $input = $request->validated();
        
        $paquete = new Paquete($input);
        try{
            $result = $paquete->save();
        } catch(\Exception $e){
            //dd($e);
            $result=false;
        }
        if($result===true){
            $this->uploadMultiple($request, $paquete->id);
        }
        return redirect('admin/paquete')->with(['result' => $result, 'op' => 'store', 'target' => 'paquete']);
    }
    
    private function upload(Request $request, $id){
        $result=false;
        if($request->hasFile('imagen') && $request->file('imagen')->isValid()){
            $file = $request->file('imagen');
            $result = $this->uploadImageFile($file, $id);
        }
        return $result;
    }
    
    private function uploadImageFile($file, $id){
        $result = 0;
        //$mimeType = mime_content_type($file->path()); Función PHP
        $mimeType = $file->getMimeType();             //Función Laravel
        if(strpos($mimeType, 'image/') !== false){
            $target = 'fotos/' . $id . '/';
            $name = $file->getClientOriginalName();
            $result = $file->move($target, $name);
        }
        return $result;
    }
    
    private function uploadMultiple(Request $request, $id){
        $result = 0;
        if($request->hasFile('imagen')){
            foreach($request->file('imagen') as $file){
                if($file->isValid() && $this->uploadImageFile($file, $id)){
                    $result++;
                }
            }
        }
        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show(Paquete $paquete)
    {
        $files = [];
        if(file_exists('fotos/' . $paquete->id) && is_dir('fotos/' . $paquete->id)){
            $files = File::files('fotos/' . $paquete->id);
        }
        return view('backend.paquete.show')->with(['paquete' => $paquete, 'files' => $files]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Paquete $paquete)
    {
        return view('backend.paquete.edit')->with(['paquete' => $paquete]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaqueteRequest $request, Paquete $paquete)
    {
        $input = $request->validated();
        try{
            $result = $paquete->update($input);
        } catch(\Exception $e){
            $error = ['destino' => 'El destino ya existe'];
            return redirect('admin/paquete/' . $paquete->id . '/edit')->withErrors($error)->withInput();
            $result = false;
        }
        return redirect('admin/paquete')->with(['result' => $result, 'op' => 'update', 'target' => 'paquete']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paquete $paquete)
    {
        $id = $paquete->id;
        try{
            $result = $paquete->delete();
        } catch(\Exception $e){
            $result = false;
        }
        if($result === true){
            File::deleteDirectory('fotos/' . $id);
        }
        return redirect('admin/paquete')->with(['result' => $result, 'op' => 'destroy', 'target' => 'paquete']);
    }
}
