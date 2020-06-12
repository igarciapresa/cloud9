<?php

namespace App\Classes;

class Util{
    
    function deleteRepeatedFiles(int $pokemonid, string $fileName){
        $deleted = 0;
        $target = Constants::POKEMON_FILE_PATH;
        $search = $target . $pokemonid . '.*';
        $files = glob($search);
        foreach($files as $file){
            if(basename($file) != $fileName){
                unlink($file);
                $deleted++;
            }
        }
        return $deleted;
    }
    
    static function uploadImage(string $name, string $fileParam, Request $request, string $target = '.'){
        $result = null;
        if($request->hasFile($fileParam) && $request->file($fileParam)->isValid()){
            $file = $request->file($fileParam);
            $fileName = $name . '.' . $file->getClientOriginalExtension();
            if($file->move($target, $name)){
                $result = $filename;
            }
        }
        return $result;
    }
}