<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use App\Payment;

class BankingAccount
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
        $IdCard = Session::get('idCard');
        if (Payment::where('IdCard', '=', $IdCard)->exists()) {
            return redirect('home');
        }
        return $next($request);
    }
}
