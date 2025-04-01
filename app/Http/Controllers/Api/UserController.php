<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return User::collection($users);
        
        return response()->json([
            "message" => "Sucesso!!!!"
        ]);
        
    }

    public function store(Request $request)
    {
        $UserArray = [
            "name"  => $request->name,
            "email" => $request->email,
            "password" => $request->password

        ];

        $user = User::create($UserArray);
        return new User($user);
    }
}
