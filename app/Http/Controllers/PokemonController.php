<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class PokemonController extends Controller
{
    public function show($name)
    {
        return view('pokemon', [
            'pokemon' => Pokemon::where('name', '=', $name)->first()
        ]);
    }

}
