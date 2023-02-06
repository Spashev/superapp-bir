<?php

namespace App\Http\Controllers\Auth\User;

use App\Constants\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.user.login');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $user = User::whereEmail($credentials['email'])->first();

        if(!$user) {
            return to_route('user.login')->withMessage('User not found');
        }

        if(Hash::check($credentials['password'], $user->password)) {
            Auth::guard('web')->login($user);

            return to_route('welcome');
        }

        return to_route('user.login')->withMessage('Login details are not valid');
    }

    public function register()
    {
        return view('auth.user.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'second_name' => 'required|min:3',
            'middle_name' => 'sometimes|min:3',
            'email' => 'required|email|unique:users',
            'phone' => 'max:13',
            'password' => 'required|confirmed|min:6',
            'term' => 'required'
        ]);

        $credentials = $request->only('first_name', 'second_name', 'middle_name', 'email', 'phone', 'password');

        $user = User::create($credentials);
        $user->assignRole(UserRole::CLIENT_ROLE);

        return to_route('user.login');
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('welcome');
    }
}
