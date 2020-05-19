<?php

namespace App\Http\Middleware;

use Closure;

class RegisterMiddleware
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
        if (empty($request['phonenumber']) || empty($request['idCard']) || empty($request['fullname']) || empty($request['username'])
        || empty($request['password']) || empty($request['re-password'])
        ) {
            return \redirect('register');
        }
        if ($request['password'] != $request['re-password']) {
            return \redirect('register');
        }
        return $next($request);
    }
}
