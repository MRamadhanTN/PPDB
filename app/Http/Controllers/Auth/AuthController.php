<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return redirect()->route('landingpage');
    }

    public function loginProses(Request $request)
    {
        $data = $request->only('nisn_login','password');

        if (Auth::attempt($data)) {
            $role_user = User::where('nisn_login','=',$request->nisn_login)->get();
            $role = $role_user->pluck('role')->first();

            // $user_id = $role_user->pluck('id')->first();

            $user = User::findOrFail(Auth::user()->id);
            $user->update([
                'last_login' => Carbon::now()->toDateTimeString(),
            ]);

            if ($role == 'admin') {
                return redirect()->route('admin');
            }

        } else {
            return redirect()->back()->with('failed-login', 'NISN atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landingpage');
    }
}
