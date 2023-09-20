<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class BladeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Blade::if('role', function ($role) {
            return auth()->check() && auth()->user()->hasRole($role);
        });
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }
}
