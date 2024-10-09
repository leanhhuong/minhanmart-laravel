<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    public function __construct() {}

    public function login()
    {
        if (Auth::id() > 0) {
            return redirect()->route('dashboard.layout');
        }
        return view('backend.auth.login');
    }

    public function admin(AuthRequest $request)
    {
        $credentials = [
            'email' =>  $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            toastr()->success('Đăng nhập thành công');
            return redirect()->route('dashboard.layout');
        }
        toastr()->error('Email hoặc mật khẩu không chính xác');
        return redirect()->route('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
}
