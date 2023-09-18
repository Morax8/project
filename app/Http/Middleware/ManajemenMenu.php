<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManajemenMenu
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // // Check if the user has the 'manajemen' role
        // if (auth()->check() && auth()->user()->hasRole('manajemen')) {
        //     // Add a flag to the view data to indicate that the user has the role
        //     view()->share('userHasManajemenRole', true);
        // } else {
        //     view()->share('userHasManajemenRole', false);
        // }

        return $next($request);
    }
}
