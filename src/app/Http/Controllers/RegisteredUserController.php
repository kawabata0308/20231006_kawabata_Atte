<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\RegisteredUser;

class RegisteredUserController extends Controller
{
    public function create(Request $request)
    {
        return view('register');
    }
    
    public function store(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $user = RegisteredUser::create($validatedData);

        $user = RegisteredUser::create([
            'account_name' => $request->input('account_name'),
            
            'account_email' => $request->input('account_email'),
            
            'account_password' => Hash::make($request->input('password')),
        ]);

        // return view('attendance');

        return redirect()->route('register')
        ->withErrors($validator)
        ->withInput();
        
        Auth::login($user);
        return redirect('/attendance');

    }

    
}
