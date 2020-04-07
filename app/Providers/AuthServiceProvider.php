<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Addresses' => 'App\Policies\Addresses',
        'App\Models\Organisations' => 'App\Policies\Organisations',
        'App\Models\Projects' => 'App\Policies\Projects',
        'App\Models\Qualities' => 'App\Policies\Qualities',
        'App\Models\Requests' => 'App\Policies\Requests',
        'App\Models\Users' => 'App\Policies\Users',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
