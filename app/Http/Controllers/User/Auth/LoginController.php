<?php

namespace App\Http\Controllers\User\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('user.auth.login');
    }

    public function login(Request $request) {
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->route('user.dashboard');
        }
        return back()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
