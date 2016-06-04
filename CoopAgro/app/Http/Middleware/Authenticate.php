<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == 'atendente') {
            if (Auth::guard($guard)->guest()) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    return redirect()->guest('atendente/login');
                }
            }
        }
        if ($guard == 'presidente') {
            if (Auth::guard($guard)->guest()) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    return redirect()->guest('presidente/login');
                }
            }
        }
        if ($guard == 'tecnico') {
            if (Auth::guard($guard)->guest()) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    return redirect()->guest('tecnico/login');
                }
            }
        }

        return $next($request);
    }
}
