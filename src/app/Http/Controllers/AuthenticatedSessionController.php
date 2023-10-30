<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {
            
        return view('attendance');
    } else {
        return back()->withErrors(['email' => '認証に失敗しました']);
    }}


    public function index1()
    {
        return view('index');
    }
}
