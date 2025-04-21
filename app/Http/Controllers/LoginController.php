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
        $request->validate(['remember' => 'nullable']);

        if (Auth::attempt($credentials, $request->input('remember'))) {
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
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check if email in database
        $checkUser = User::where('email', $credentials["email"])->first();
        if($checkUser != null) {
            return back()->withErrors([
                'email' => 'The provided email is already in our records.',
            ])->withInput();  
        }

        // confirm password
        $confirmPassword = $request->validate(['confirmpassword' => 'required']);
        if ($confirmPassword['confirmpassword'] != $credentials['password']) {
            return back()->withErrors([
                'password' => 'Please ensure password and confirm password matches',
            ])->withInput();
        }

        $user = User::create($credentials);
        Auth::login($user);
        return redirect()->route('index');
    }

    // logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // return login page
    public function loginPage() {
        return view('login');
    }

    // return register page
    public function registerPage () {
        return view('register');
    }

}
