<?php

namespace App\Providers;

use App\SecretaireGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Utilisez le nom 'secretaire' pour enregistrer votre garde personnalisé
        Auth::extend('secretaire', function ($app, $name, array $config) {
            $provider = Auth::createUserProvider($config['provider']);
            $session = $app['session']->driver();
            $request = $app['request'];

            return new SecretaireGuard($name, $provider, $session, $request);
        });
    }
}
