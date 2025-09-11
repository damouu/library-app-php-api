<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use MongoDB\Laravel\Eloquent\Model;

class Pokemon extends Model
{
    use SoftDeletes;

    protected $table = 'pokemons';
    protected $primaryKey = '_id';
}
