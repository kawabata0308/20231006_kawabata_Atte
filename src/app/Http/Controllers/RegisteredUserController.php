<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisteredUser;

class RegisteredUserController extends Controller
{
    public function create(Request $request)
    {
        return view('register');
    }
    
    public function store(Request $request)
    {
        $validatedData = $user->validated();
        $user = RegisteredUser::create($validatedData);
        
        return view('attendance', ['user' => $user]);
    }

    
}
