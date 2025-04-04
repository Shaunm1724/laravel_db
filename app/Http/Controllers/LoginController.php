<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // login
    public function authenticate (Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    // register a new user
    public function registerUser (Request $request) {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // check if email in database
        $checkUser = User::where('email', $credentials["email"])->first();
        if($checkUser != null) {
            return back()->withErrors([
                'email' => 'The provided is already in our records.',
            ])->onlyInput('email');
        }
        $user = User::create($credentials);
        return redirect()->route('login-page');
    }

    // logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }



    public function loginPage() {
        return view('login');
    }

    public function registerPage () {
        return view('register');
    }

}
