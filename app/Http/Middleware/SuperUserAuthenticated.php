<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperUserAuthenticated
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
        if (Auth::check() && Auth::user()->role == 'superadmin') {
            return $next($request);
        } elseif (Auth::user()->role == 'inspectoradmin') {
            return redirect(route('inspectoradmin.dashboard'));
        } elseif (Auth::user()->role == 'inspectoradmin') {
            return redirect(route('inspectoradmin.dashboard'));
        } elseif (Auth::user()->role == 'customer') {
            return redirect(route('customer.dashboard'));
        } elseif (Auth::user()->role == 'inspector') {
            return redirect(route('inspector.dashboard'));
        }

        return route('login');
    }
}
