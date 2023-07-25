<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login()
    {
        return view('./Auth/login');
    }



    public function Regis()
    {
        return view('./Auth/regis');
    }


    public function create(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|min:2|max:50',
            'password' => 'required|min:8|max:50',
            'confirm' => 'required|same:password'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        return redirect('/login')->with('success', 'Pedaftaran Berhasil Siahkan Login');

    }







    public function authenticate (Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginerror', 'Login Failed!');
    }


    public function logout (Request $request)
    {

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/dashboard');
    }
}
