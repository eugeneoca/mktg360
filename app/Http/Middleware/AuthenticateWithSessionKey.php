<?php

namespace App\Http\Middleware;

use App\Models\Session;
use App\Models\User;
use Closure;
use DateTime;
use Illuminate\Http\Response;

/**
 * This session check use only on organization user to verify
 * themselves and to filter permissions.
 */
class AuthenticateWithSessionKey
{



    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $sessionKey = $request->query('token') ?: $request->header(Session::SESSION_NAME);
        $user = self::getUserBySessionKey($sessionKey);
        if (!$user) {
            return response()->json([
                'code' => 'SESSION_KEY_NOT_FOUND'
            ], Response::HTTP_FORBIDDEN);
        }
        session()->put('session_key', $sessionKey);
        auth()->setUser($user);
        return $next($request);
    }

    public static function getUserBySessionKey($sessionKey)
    {
        if (!$sessionKey) return null;

        $session = Session::with([
            'user'
        ])->where('status', Session::STATUS_ACTIVE)
            ->where('key', $sessionKey)
            ->first();

        if (!$session) {
            return null;
        }

        $user = User::where('id',$session->user_id)->with('role')->first();
        $session->user = $user;

        $session->user->role = $user->role()->get();

        return $session->user ?? null;
    }
}
