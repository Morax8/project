<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $UserType)
    {
        if (auth()->user()->type !== $UserType) {
            return $next($request);
        }

        return response()->json([
            'message' => 'You are not authorized to access this resource',
        ]);
    }
}
