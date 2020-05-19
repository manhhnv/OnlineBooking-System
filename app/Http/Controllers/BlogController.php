<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function search(Request $request) {
        $cityName = $request['searchcity'];
        switch($cityName) {
            case "Ha Noi":
                return \redirect('/blog/hanoi');
            case "TP.HCM":
                return \redirect('/blog/saigon');
            case "Da Lat":
                return \redirect('/blog/dalat');
            case "Da Nang":
                return \redirect('/blog/danang');
            case "Nha Trang":
                return \redirect('/blog/nhatrang');
            case "Phu Quoc":
                return \redirect('/blog/phuquoc');
            default:
                return \redirect('/');
        }
    }
}
