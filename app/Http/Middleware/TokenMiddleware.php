<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string $token
     * @return Response
     */
    public function handle(Request $request, Closure $next, string $token): Response
    {
        if ($request->input('token') === $token) {
            return $next($request);
        }

        abort(403);
    }
}
