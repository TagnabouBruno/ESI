<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre;
use App\Models\Cycle;
use App\Models\Niveau;
use App\Models\Filiere;


class parcourController extends Controller
{
    public function createFiliere (Request $request)
{
    $data = $request->validate([
        'libelle_filiere' => ['required', 'string', 'max:255'],
    ]);

    $filiere = Filiere::create([
        'libelle_filiere' => $data['libelle_filiere'],
    ]);
    return redirect()->back()->with('success', 'Filiere enregistrée avec succès.');
}

public function createCycle (Request $request)
{
    $data = $request->validate([
        'libelle_cycle' => ['required', 'string', 'max:255'],
    ]);

    $cycle = Cycle::create([ // Utiliser le modèle "Cycle" au lieu de "Filiere"
        'libelle_cycle' => $data['libelle_cycle'],
    ]);
    return redirect()->back()->with('success', 'Cycle enregistré avec succès.');
}

public function createNiveau (Request $request)
{
    $data = $request->validate([
        'libelle_niveau' => ['required', 'string', 'max:255'],
    ]);

    $niveau = Niveau::create([ 
        'libelle_niveau' => $data['libelle_niveau'],
    ]);
    return redirect()->back()->with('success', 'Niveau enregistré avec succès.');
}

public function createSemestre (Request $request)
{
    $data = $request->validate([
        'libelle_semestre' => ['required', 'string', 'max:255'],
    ]);

    $semestre = Semestre::create([ // Utiliser le modèle "Semestre" au lieu de "Filiere"
        'libelle_semestre' => $data['libelle_semestre'],
    ]);
    return redirect()->back()->with('success', 'Semestre enregistré avec succès.');
}

}
