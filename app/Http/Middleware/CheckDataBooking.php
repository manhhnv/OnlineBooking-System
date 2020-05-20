<?php

namespace App\Http\Middleware;

use Closure;

class CheckDataBooking
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
        $date1 = $request['hotel_date1'];
        $date2 = $request['hotel_date2'];
        $city = $request['city'];
        if (empty($date1) || empty($date2) || empty($city)) {
            return redirect('hotel');
        }
        $subtract = strtotime($date2) - strtotime($date1);
        $subtract = $subtract/86400;
        if ($subtract <= 0) return redirect('hotel');
        return $next($request);
    }
}
