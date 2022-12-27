<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Vous êtes déconnecté');
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(){ 
        // validate form
        $att = request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if(!auth()->attempt($att)){
            throw ValidationException::withMessages([
                'email' => "Cet email n'existe pas."
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Bienvenue !');
    }
}
