<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Constants\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.admin.login');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $manager = Manager::whereEmail($credentials['email'])->first();

        if(!$manager) {
            return to_route('admin.login')->withMessage('Manager not found');
        }

        if(Hash::check($credentials['password'], $manager->password)) {
            Auth::guard('manager')->login($manager);

            return to_route('admin.home');
        }

        return to_route('admin.login')->withMessage('Login details are not valid');
    }

    public function register()
    {
        return view('auth.admin.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'full_name' => 'required|min:3',
            'email' => 'required|email|unique:managers',
            'phone' => 'max:13',
            'iin' => 'max:12',
            'password' => 'required|confirmed|min:6',
            'term' => 'required'
        ]);

        $credentials = $request->only('full_name', 'email', 'phone', 'iin', 'password');

        $manager = Manager::create($credentials);
        $manager->assignRole(UserRole::MANAGER_ROLE);

        return to_route('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::guard('manager')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('admin.login');
    }
}
