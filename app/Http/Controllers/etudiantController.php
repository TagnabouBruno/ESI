<?php

namespace App\Http\Controllers;

use App\Notifications\secretaireNotification;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Http\Requests\AdmiRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Administrateur;
use App\Models\Secretaire;
use App\Models\Cycle;
use App\Models\Filiere;
use App\Models\Niveau;
use App\Models\Semestre;
use App\Models\Etudiant;


class etudiantController extends Controller
{
    public function layout(){
        return view('layout.headerfooter');
    }

    public function accueil(){
        return view('accueil');
    }

    public function inscriptionadmi(){
        $count = Administrateur::count();
        return view('inscriptionadmi')->with('count', $count);
    }
    

    public function registeradmi(Administrateur $administrateur, AdmiRequest $request){
        $administrateur->nom = $request->nom;
        $administrateur->prenom = $request->prenom;
        $administrateur->email = $request->email;
        $administrateur->password = Hash::make($request->password);
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

    if (Auth::guard('administrateur')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('gestion');
    }elseif(Auth::guard('secretaire')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('gestion2');
    }else {
        return redirect()->back()->with('message', 'Email ou mot de passe incorrect');
    }
}
public function listeadmin()
    {
        $administrateurs = Administrateur::all(); // Récupère tous les secrétaires dans la base de données

        return view('listeadmin', compact('administrateurs'));
    }

public function gestion()
{
    return view('gestion');
}
public function gestion2()
{
    return view('gestion2');
}


    public function inscriptionetudiant(){
        $cycles = Cycle::all();
        $semestres = Semestre::all();
        $filieres = Filiere::all();
        $niveaux = Niveau::all();
        return view('inscriptionetudiant', compact('cycles', 'semestres', 'filieres', 'niveaux'));
    }
    public function register_etudiant(Request $request){
        $registre = $request->validate([
            'matricule' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'genre' => 'required|string',
            'date_de_naissance' => 'required|date',
            'lieu_de_naissance' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'cycle' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'semestre' => 'required|string|max:255',
            'photo' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('photo', 'public');
            $registre['photo'] = $photoPath;
        }
    
        Etudiant::create($registre);
        return redirect()->route('inscriptionetudiant')->with('success', 'etudiant enregistré avec succès');
    }
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all(); // Récupère tous les secrétaires dans la base de données

        return view('liste_etudiant', compact('etudiants'));
    }
    public function liste_etudiant2()
    {
        $etudiants = Etudiant::all(); // Récupère tous les secrétaires dans la base de données

        return view('liste_etudiant2', compact('etudiants'));
    }
    public function delete_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        if (!$etudiant){
            return redirect()->route('liste_etudiant')->with('success', 'Etudiant supprimé avec succès');
        }
        $etudiant->delete();
        return redirect()->route('liste_etudiant')->with('success', 'Etudiant supprimé avec succès');
    }
    public function delete_etudiant2($id)
    {
        $etudiant = Etudiant::find($id);
        if (!$etudiant){
            return redirect()->route('liste_etudiant2')->with('success', 'Etudiant supprimé avec succès');
        }
        $etudiant->delete();
        return redirect()->route('liste_etudiant2')->with('success', 'Etudiant supprimé avec succès');
    }
    public function modifier_etudiant($id){
        $cycles = Cycle::all();
        $semestres = Semestre::all();
        $filieres = Filiere::all();
        $niveaux = Niveau::all();
        $etudiant = Etudiant::findOrFail($id);
        return view('modifier_etudiant', compact('etudiant','cycles', 'semestres', 'filieres', 'niveaux'));
    }
    public function modifier_etudiant2($id){
        $cycles = Cycle::all();
        $semestres = Semestre::all();
        $filieres = Filiere::all();
        $niveaux = Niveau::all();
        $etudiant = Etudiant::findOrFail($id);
        return view('modifier_etudiant', compact('etudiant','cycles', 'semestres', 'filieres', 'niveaux'));
    }
    public function update_etudiant(Request $request, $id)
{
    $etudiant = Etudiant::findOrFail($id);
    $etudiant -> matricule = $request -> matricule;
    $etudiant -> nom = $request -> nom;
    $etudiant -> prenom = $request -> prenom;
    $etudiant -> genre = $request -> genre;
    $etudiant -> date_de_naissance = $request->date_de_naissance;
    $etudiant -> lieu_de_naissance = $request->lieu_de_naissance;
    $etudiant -> filiere = $request->filiere;
    $etudiant -> cycle = $request->cycle;
    $etudiant -> niveau = $request->niveau;
    $etudiant -> semestre = $request->semestre;
    $etudiant -> photo = $request->photo;
    $etudiant ->save();
    return redirect()->route('liste_etudiant')->with('success', 'Modifier avec succès');
}
public function update_etudiant2(Request $request, $id)
{
    $etudiant = Etudiant::findOrFail($id);
    $etudiant -> matricule = $request -> matricule;
    $etudiant -> nom = $request -> nom;
    $etudiant -> prenom = $request -> prenom;
    $etudiant -> genre = $request -> genre;
    $etudiant -> date_de_naissance = $request->date_de_naissance;
    $etudiant -> lieu_de_naissance = $request->lieu_de_naissance;
    $etudiant -> filiere = $request->filiere;
    $etudiant -> cycle = $request->cycle;
    $etudiant -> niveau = $request->niveau;
    $etudiant -> semestre = $request->semestre;
    $etudiant -> photo = $request->photo;
    $etudiant ->save();
    return redirect()->route('liste_etudiant2')->with('success', 'Modifier avec succès');
}
public function carte($id){
    $etudiants=Etudiant::all();
    return view('carte', compact('etudiants'));
}
    

    public function secretaire(){
        return view('inscriptionnewadmi');
    }
    public function registersecretaire(Request $request)
    {
        // Valider les données du formulaire
        $data = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:secretaires'],
            'password' => ['required', 'string'],
        ]);

        // Créer un nouvel utilisateur
        $secretaire = Secretaire::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // if($secretaire){
        //     $secretaire->notify(new secretaireNotification());
        // }


        // Rediriger l'utilisateur vers la page de succès ou une autre page appropriée
        return redirect()->route('secretaire')->with('success', 'Enregistrement réussi.');
    }

    public function listesecretaire()
    {
        $secretaires = Secretaire::all(); // Récupère tous les secrétaires dans la base de données

        return view('listesecretaire', compact('secretaires'));
    }
    public function listesecretaire2()
    {
        $secretaires = Secretaire::paginate(5); // Récupère tous les secrétaires dans la base de données

        return view('listesecretaire2', compact('secretaires'));
    }
    public function delete_admin($id)
    {
        $administrateur = Administrateur::find($id);
        if (!$administrateur){
            return redirect()->route('listeadmin')->with('success', 'Administrateur supprimé avec succès');
        }
        $administrateur->delete();
        return redirect()->route('listeadmin')->with('success', 'Administrateur supprimé avec succès');
    }
    public function delete_secretaire($id)
    {
        $secretaire = Secretaire::find($id);
        if (!$secretaire){
            return redirect()->route('listesecretaire')->with('success', 'Secretaire supprimé avec succès');
        }
        $secretaire->delete();
        return redirect()->route('listesecretaire')->with('success', 'Secretaire supprimé avec succès');
    }

    public function modifier_admin($id){
        $administrateur = Administrateur::findOrFail($id);
        return view('modifier_admin', compact('administrateur'));
    }
    public function modifier_secretaire($id){
        $secretaire = Secretaire::findOrFail($id);
        return view('modifier_secretaire', compact('secretaire'));
    }

    public function update_admin(Request $request, $id)
{
    $administrateur = Administrateur::findOrFail($id);
    $administrateur -> nom = $request -> nom;
    $administrateur -> prenom = $request -> prenom;
    $administrateur -> email = $request -> email;
    $administrateur -> password = hash::make($request->password);
    $administrateur ->save();
    return redirect()->route('listeadmin')->with('success', 'Modifier avec succès');
}
public function update_secretaire(Request $request, $id)
{
    $secretaire = Secretaire::findOrFail($id);
    $secretaire -> nom = $request -> nom;
    $secretaire -> prenom = $request -> prenom;
    $secretaire -> email = $request -> email;
    $secretaire -> password = hash::make($request->password);
    $secretaire ->save();
    return redirect()->route('listesecretaire')->with('success', 'Modifier avec succès');
}

public function logout(){
    Session::flush();
    Auth::logout();
    return redirect()->route('connectionadmi');
}
}   