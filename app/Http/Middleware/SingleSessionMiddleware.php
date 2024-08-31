<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SingleSessionMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            // Check if the user has a session in the database
            $session = \DB::table('sessions')
                ->where('user_id', $user->id)
                ->where('id', '!=', session()->getId())
                ->first();

            if ($session) {
                // Log out the user if they have an existing session
                Auth::logout();
                Session::flush();
                return redirect('/login')->with('error', 'You have been logged out because you have logged in from another device.');
            }

            // Store the session ID in the database
            \DB::table('sessions')
                ->updateOrInsert(
                    ['user_id' => $user->id],
                    ['id' => session()->getId(), 'last_activity' => time()]
                );
        }

        return $next($request);
    }
}
