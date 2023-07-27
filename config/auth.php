<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'administrateur' => [
            'driver' => 'session',
            'provider' => 'administrateurs',
        ],

        'secretaire' => [
            'driver' => 'secretaire',
            'provider' => 'secretaire_users', // Utilisez la clé 'secretaire_users' au lieu de 'secretaires'
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'administrateurs' => [
            'driver' => 'eloquent',
            'model' => App\Models\Administrateur::class,
        ],

        'secretaire_users' => [
            'driver' => 'database', // Utilisez 'database' car les données des secrétaires sont dans la table "secretaires"
            'table' => 'secretaires', // Nom de la table contenant les données des secrétaires
            'model' => App\Models\Secretaire::class, // Remplacez par le modèle de votre utilisateur secrétaire.
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
