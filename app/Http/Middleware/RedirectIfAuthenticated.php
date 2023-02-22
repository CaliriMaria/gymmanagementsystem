<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard);

                // to admin dashboard
                if($user->hasRole('admin')) {
                    return redirect(route('admin.dashboard'));
                }

                // to user dashboard
                else if($user->hasRole('user')) {
                    return redirect(route('dashboard'));
                }
                // to user dashboard
                else if($user->hasRole('trainer')) {
                    return redirect(route('trainer.dashboard'));
                }
                // to user dashboard
                else if($user->hasRole('staff')) {
                    return redirect(route('staff.dashboard'));
                }
            }
        }

        return $next($request);
    }
}
