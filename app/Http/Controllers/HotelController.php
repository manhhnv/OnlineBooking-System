<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class HotelController extends Controller
{
    //
    public function search(Request $request) {
        if (!Session::has('idCard')) {
            return redirect(route('login'));
        }

        if (!empty($request['city'])) {
            Session::put('city', $request['city']);
            Session::put('borrow', $request['hotel_date1']);
            Session::put('back', $request['hotel_date2']);
            $city = Session::get('city');
        }
        else {
            $city = Session::get('city');
        }
        $hotels = Hotel::where('place', '=', $city)->paginate(5);
        return \view('searchHotel')->with('hotels', $hotels);
    }
}
