<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    //
    public function register(Request $request) {
        $IdCard = $request['idCard'];
        if (User::where('IdCard', '=', $IdCard)->exists()) {
            return \redirect('register');
        }
        $username = $request['username'];
        $password = $request['password'];
        $fullName = $request['fullname'];
        $phone = $request['phonenumber'];
        $user = new User;
        $user->IdCard = $IdCard;
        $user->username = $username;
        $user->password = \bcrypt($password);
        $user->hoten = $fullName;
        $user->phone = $phone;
        $user->save();
        Session::flush();
        return \redirect(route('login'));
    }
}
