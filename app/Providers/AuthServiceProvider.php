<?php

namespace App\Providers;

use App\Models\Gym;
use App\Models\ListOfFighters;
use App\Models\User;
use Illuminate\Cache\LuaScripts;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('imAFighter', function (User $user) {
            return $user->role == 'Fighter';
        });

        Gate::define('imACoach', function (User $user) {
            return $user->role == 'Coach';
        });

        Gate::define('hasAGym', function (User $user) {
            return $user->hasGym() == true;
        });


    }
}
