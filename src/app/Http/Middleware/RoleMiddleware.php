<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Avval tizimga kiring!');
        }

        if (!in_array(Auth::user()->role, $roles)) {
            return abort(403, 'Sizda bu sahifaga kirish huquqi yo‘q.');
        }

        return $next($request);
    }
}
