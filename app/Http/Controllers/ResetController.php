<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ResetController extends Controller
{
    //
    public function reset(Request $request) {
        $username = $request['username'];
        $phone = $request['phonenumber'];
        $newPassword = \bcrypt($request['newpassword']);
        User::where([['username', '=', $username], ['phone', '=', $phone]])->update(['password' => $newPassword]);
    }
}
