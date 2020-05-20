<?php

namespace App\Http\Middleware;

use Closure;

class CheckInput
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
        if (empty($request['start']) || empty($request['end']) || empty($request['date'])) {
            return redirect()->route('ticket');
        }
        if($request['customers'] > 7 || $request['customers'] < 1) {
            return redirect()->route('ticket');
        }
        return $next($request);
    }
}
