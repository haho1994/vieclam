<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthNtn
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
            return redirect()->route('dangnhap.nhatuyendung');
        }
        $user = auth()->user();
        if ($user->type != 2) {
            auth()->logout();
            return redirect()->route('dangnhap.nhatuyendung');
        }
        //cho vao trang admin
        return $next($request);
    }
}
