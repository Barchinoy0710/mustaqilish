<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Enums\UserRoleEnum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function __construct(){
    //     $this->middleware('guest')->except('logout');
    // }
    public function registerView()
    {
        return view('auth.register');
    }
    public function dashboard()
    {
        if (auth()->user()->role == 'user') {
            return redirect()->route('index');
        }
        return view('dashboard');
    }
    public function loginView()
    {
        return view('auth.login');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'tel' => 'required|numeric'
        ]);
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => UserRoleEnum::user,
            'tel' => $request->tel
        ]);
        auth()->login($user);
        return redirect()->intended('profile')->with('success', 'Registration successful!');
    }
    public function login(Request $request)
    {
        $validator =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
        {
            if (auth()->user()->role == UserRoleEnum::admin) {
                return redirect()->intended(route('dashboard'));
            }
            if(auth()->user()->role == UserRoleEnum::user) {
                return redirect()->intended(route('index'));
            }
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect('login')->withErrors($validator);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been successfully logged out!');
    }

}
