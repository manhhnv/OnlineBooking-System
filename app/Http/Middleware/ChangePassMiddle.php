<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;

class ChangePassMiddle
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
        $oldPassword = $request['oldpassword'];
        $newPassword = $request['newpassword'];
        $confirm = $request['repassword'];

        $sessionPassword = Session::get('password');
        if ($oldPassword != $sessionPassword || empty($oldPassword)) {
            $err1 = "Your password incorrect!";
            
            return \redirect('change')->with('err1', $err1);
        }
        else if(empty($newPassword)) {
            $err2 = "It is not allowed to be empty!";
            
            return \redirect('change')->with('err2', $err2);
        }
        else if ($newPassword != $confirm) {
            $err3 = "Incorrect!";
            
            return \redirect('change')->with('err3', $err3);
        }
        else return $next($request);
    }
}
