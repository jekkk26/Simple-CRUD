<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAksesMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            $user = Auth::user();
            foreach ($roles as $role) {
                if ($user->role == $role) {
                    return $next($request);
                }
            }
        }
        return redirect()->route('login')->withErrors('Invalid Role Or Not Authenticated');
    }
}
