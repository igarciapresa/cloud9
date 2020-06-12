<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursoController extends Controller{
    
    public function destroy(Request $request){
        return response()->json(['response' => 'respuestaDestroy']);
    }
    
    public function index(Request $request){
        return response()->json(['response' => 'respuestaIndex']);
    }
    
    public function show(Request $request){
        return response()->json(['response' => 'respuestaShow']);
    }
    
    public function store(Request $request){
        $rawData = file_get_contents('php://input');
        var_dump($rawData);
        var_dump(json_decode($rawData));
        exit;
    }
    
    public function update(Request $request){
        return response()->json(['response' => 'respuestaUpdate']);
    }
}
