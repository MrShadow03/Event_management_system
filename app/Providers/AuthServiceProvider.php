<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
        Gate::before(function ($user, $ability) {
            // Check if the guard is 'web' (replace with your actual guard name)
            if (auth()->getDefaultDriver() === 'web') {
                return $user->hasRole('super_admin') ? true : null;
            }
            
            return null; // Continue as is for other guards
        });
    }
}
