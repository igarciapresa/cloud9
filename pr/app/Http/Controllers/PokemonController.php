<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pokemon;
use App\Type;

class PokemonController extends Controller
{

    public function create()
    {
        
    }

    public function destroy(Pokemon $pokemon)
    {
        
    }

    public function edit(Pokemon $pokemon)
    {
        $archivo =  url('img/pokemon.webp');
        if(file_exists(public_path() . '/img/' . $pokemon->id)) {
            $archivo = url('img/' . $pokemon->id);
        }
        $types = Type::all();
        return view('pokepedia.pokemon.edit')->with(['archivo' => $archivo, 'pokemon' => $pokemon, 'types' => $types]);
    }

    public function index()
    {
        //$pokemon = Pokemon::all();
        //$pokemon = DB::table('pokemon')->paginate(8);
        //$pokemon = Pokemon::paginate(11);
        //$pokemon = DB::table('pokemon')->simplePaginate(15);
        //$pokemon = Pokemon::where('id', '>', 100)->paginate(3);
        //return view('pokemon')->with(['pokemon' => $pokemon]);
    }

    public function show(Pokemon $pokemon)
    {
        $archivo =  url('img/pokemon.webp');
        if(file_exists(public_path() . '/img/' . $pokemon->id)) {
            $archivo = url('img/' . $pokemon->id);
        }
        return view('pokepedia.pokemon.show')->with(['archivo' => $archivo, 'pokemon' => $pokemon]);
    }

    public function store(Request $request)
    {
        
    }

    public function update(Request $request, Pokemon $pokemon)
    {
        if($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $target = 'img/';
            $name = $pokemon->id;
            $file->move($target, $name);
        }
        $input = $request->all();//validated();
        try {
            $result = $pokemon->update($input);
        } catch(\Exception $e) {
        }
        return redirect(url('/'));
    }

}