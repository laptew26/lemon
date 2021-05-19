<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        User::create($request->all());
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        Auth::attempt($request->except('_token'));
        return redirect(route('home'));
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::back();
    }
}
