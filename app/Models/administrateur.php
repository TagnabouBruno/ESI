<?php

namespace App\Models;
use illuminate\Contracts\Auth\Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrateur extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];
}
