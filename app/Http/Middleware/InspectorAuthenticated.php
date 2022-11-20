<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InspectorAuthenticated
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
        if (Auth::check()) {
            /** @var User $user */
            $user = Auth::user();

            if ($user->hasRole('superadmin')) {
                return redirect(route('superadmin.dashboard'));
            } else if ($user->hasRole('customer')) {
                return redirect(route('customer.dashboard'));
            } else if ($user->hasRole('inspectoradmin')) {
                return redirect(route('inspectoradmin.dashboard'));
            } else if ($user->hasRole('inspector')) {
                return $next($request);
            }
        }
        abort(403);  // permission denied error
    }
}
