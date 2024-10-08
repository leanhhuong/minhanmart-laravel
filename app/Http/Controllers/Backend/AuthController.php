<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {}

    public function login()
    {
        return view('backend.auth.login');
    }

    public function admin(AuthRequest $request)
    {
        $credentials = [
            'email' =>  $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            echo 1;
            die();
            // return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
