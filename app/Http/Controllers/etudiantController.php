<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrateur;
use App\Http\Requests\admiRequest;
use illuminate\Support\Facades\Auth;

use illuminate\Auth\Authenticatable;


class etudiantController extends Controller
{
    public function layout(){
        return view('layout.headerfooter');
    }

    public function accueil(){
        return view('accueil');
    }

    public function inscriptionadmi(){
        return view('inscriptionadmi');
    }
    public function registeradmi(administrateur $administrateur ,admiRequest $request){
       
        $administrateur-> nom = $request -> nom;
        $administrateur-> prenom = $request -> prenom;
        $administrateur-> email = $request -> email;
        $administrateur-> password = bcrypt($request->password);
        $administrateur->save();
        return redirect()->route('inscriptionadmi')->with('success', 'Enregistrement réussi.');
    }

    public function connectionadmi(){
        return view('connectionadmi');
    }
    public function admilogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('gestion');
        } else {
            return redirect()->back()->with('message', 'Email ou mot de passe incorrect');
        }
    }
    

    public function gestion(){
        return view('gestion');
    }

    public function inscriptionetudiant(){
        return view('inscriptionetudiant');
    }

    public function inscriptionnewadmi(){
        return view('inscriptionnewadmi');
    }
}
