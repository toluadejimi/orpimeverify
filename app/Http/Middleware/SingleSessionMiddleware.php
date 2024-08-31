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
                return redirect('/login')->with('error', 'You have been logged out because you have logged in from another device. <br> <a href="https://oprimeverify.com/clear" style="background-color: #3b82f6; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none;">Click here to logout</a>');


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
