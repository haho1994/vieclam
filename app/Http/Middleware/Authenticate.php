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
        if (Auth::guard($guard)->guest()) {
            return redirect()->route('admin_login');
        }
        $user = auth()->user();
        if ($user->is_admin != 1) {
            auth()->logout();
            return redirect()->route('admin_login');
        }
        //cho vao trang admin
        return $next($request);
    }
}
