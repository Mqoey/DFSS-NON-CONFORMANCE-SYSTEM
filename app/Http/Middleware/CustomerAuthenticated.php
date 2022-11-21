<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'customer') {
            return $next($request);
        } else if (Auth::user()->role == 'inspector') {
            return redirect(route('inspector.dashboard'));
        } else if (Auth::user()->role == 'inspectoradmin') {
            return redirect(route('inspectoradmin.dashboard'));
        } else if (Auth::user()->role == 'inspectoradmin') {
            return redirect(route('inspectoradmin.dashboard'));
        } else if (Auth::user()->role == 'superadmin') {
            return redirect(route('superadmin.dashboard'));
        }
        return route('login');
    }
}
