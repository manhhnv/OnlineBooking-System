<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\User;

class ChangePasswordController extends Controller
{
    //
   public function changePassword(Request $request) {
       $idCard = Session::get('idCard');
       User::where('IdCard', '=', $idCard)->update(['password' => bcrypt($request['newpassword'])]);
       Session::flush();
       return \redirect('login');
   }
}
