<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckUser
{
    public function handle($request, Closure $next)
    {
        $userEmail = Auth::user()->email;
        $specificUserEmail = 'ric@ric.it'; // Email dell'utente specifico

        if ($userEmail !== $specificUserEmail) {
            abort(403, 'Accesso negato.');
        }

        return $next($request);
    }
}



