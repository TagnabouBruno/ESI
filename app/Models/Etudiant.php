<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'genre',
        'date_de_naissance',
        'lieu_de_naissance',
        'filiere',
        'cycle',
        'niveau',
        'semestre',
        'photo',
    ];
}
