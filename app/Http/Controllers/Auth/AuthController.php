<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Admin
    public function loginAdmin()
    {
        return view('pages.auth.login');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->only(['email', 'password']);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landingpage');
    }
}
