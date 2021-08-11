<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = auth()->user();

        if (!(count(array_intersect($user->role->pluck('name')->toArray(), $roles))>0)) {
            return response()->json([
                'code' => 'FORBIDDEN'
            ], Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
