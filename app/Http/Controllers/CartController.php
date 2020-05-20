<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatVe;
use App\LoTrinh;
use App\DatPhong;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    //
    public function CartInfo() {
        if (!Session::has('idCard'))
            return redirect(route('login'));
        $idCard = Session::get('idCard');
        $tickets = DatVe::select('orderID','idChuyenBay', 'quantity', 'total', 'status')->where('IdCard', '=', $idCard)->get();
        $rooms = DatPhong::where('IdCard', '=', $idCard)->get();
        return \view('cart', ['tickets' => $tickets, 'rooms' => $rooms]);
    }
}
