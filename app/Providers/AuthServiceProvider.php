<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate; // ✅ PENTING: import Gate di sini


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('view-student', fn($user) => $user->hasPermission('view-student'));
        Gate::define('store-student', fn($user) => $user->hasPermission('store-student'));
        Gate::define('edit-student', fn($user) => $user->hasPermission('edit-student'));
        Gate::define('destroy-student', fn($user) => $user->hasPermission('destroy-student'));
    }
}
