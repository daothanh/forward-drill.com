<?php

namespace Modules\User\Http\Middleware;

use Modules\User\Repositories\UserTokenRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiTokenAuth
{
    public function handle(Request $request, \Closure $next)
    {
        if ($request->header('Authorization') === null) {
            return new Response('Forbidden', 403);
        }

        if ($this->isValidToken($request->bearerToken()) === false) {
            return new Response('Forbidden', 403);
        }

        return $next($request);
    }

    private function isValidToken($token)
    {
        return \Auth::guard('api')->check();
    }
}
