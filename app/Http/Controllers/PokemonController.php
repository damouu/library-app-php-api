<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function getPokemonByName($name): ?object
    {
        $pokemon = Pokemon::where('name', $name)->first();
        $array = ['name' => $pokemon->name, 'img' => $pokemon->img];
        return response()->json($array)->setStatusCode(200);
    }

}
