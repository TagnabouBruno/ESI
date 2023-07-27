<?php

namespace App;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
 
use Illuminate\Contracts\Session\Session; 

class SecretaireGuard extends SessionGuard implements Guard
{
    public function __construct($name, $provider, Session $session, Request $request)
    {
        parent::__construct($name, $provider, $session, $request);
    }
}
