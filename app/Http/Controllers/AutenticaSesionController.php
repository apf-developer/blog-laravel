<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticaSesionController extends Controller
{
    public function store(Request $request)
    {
        $credentiales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentiales, $request->boolean('recuerdame'))) {
            $request->session()->regenerate();
 
            return redirect()->intended()->with('status', 'Has iniciado sesión exitosamente!');
        }
 
        return back()->withErrors([
            'email' => __('auth.failed'),
        ])->onlyInput('email');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('login')->with('status', 'Has cerrado sesión con exito!');
    }
}
