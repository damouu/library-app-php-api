<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function getUserByEmail($email): ?object
    {
        $user = User::where('email', $email)->findOrFail();
        $array = ['name' => $user->name, 'email' => $user->email];
        return response()->json($array)->setStatusCode(200);
    }

}
