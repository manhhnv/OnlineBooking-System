<?php

namespace App\Http\Controllers;

use App\DatPhong;
use App\DatVe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Session;

class MyController extends Controller
{
    //
    public function login (Request $request) {
        $username = $request['username'];
        $password = $request['password'];
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            Session::put('username', $username);
            Session::put('password', $password);
            $user = User::where('username', '=', $username)->get();
            $idCard = $user[0]->IdCard;
            $name = $user[0]->hoten;
            $phone = $user[0]->phone;
            Session::put('idCard', $idCard);
            Session::put('name', $name);
            Session::put('phone', $phone);
            $idCard = Session::get('idCard');
            $tickets = DatVe::select('orderID','idChuyenBay', 'quantity', 'total', 'status')->where('IdCard', '=', $idCard)->get();
            $rooms = DatPhong::where('IdCard', '=', $idCard)->get();
            $count = count($tickets) + count($rooms);
            Session::put('count', $count);
            return redirect(route('home'));
        } else {
            return redirect(route('login'));
        }
    }
    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect(route('login'));
    }
}
