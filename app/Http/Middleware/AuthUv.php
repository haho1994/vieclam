<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthUv
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
            return redirect()->route('dangnhap');
        }
        $user = auth()->user();
        if ($user->type != 1) {
            auth()->logout();
            return redirect()->route('dangnhap');
        }
        //cho vao trang admin
        return $next($request);
    }
}
