<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route("user.home"));
    }

    public function loginVerification(Request $request) {
        $validated = $request->validate([
            "email" => "string|required",
            "password" => "string|required"
        ]);


        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended(route("user.home"));
        }

        return redirect()->intended(route("auth.login"))->withInput();
    }
}
