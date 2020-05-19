<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\DatPhong;
use Illuminate\Support\Facades\Session;

class BookRoomController extends Controller
{
    //
    public function bookRoom(Request $request) {
        $hotelID = $request['hotelID'];
        $numberRoom = $request['numberRoom'];
        $borrow = Session::get('borrow');
        $back = Session::get('back');
        $subtract = strtotime($back) - strtotime($borrow);
        $subtract = intval($subtract/86400);
        $total = doubleval($request['cost'])*$subtract*intval($numberRoom);
        $status = "NO";
        $IdCard = Session::get('idCard');
        $confirm = new DatPhong;
        $confirm->hotelID = intval($hotelID);
        $confirm->soPhong = $numberRoom;
        $confirm->ngayNhan = $borrow;
        $confirm->ngayTra = $back;
        $confirm->total = $total;
        $confirm->status = $status;
        $confirm->IdCard = $IdCard;
        $confirm->save();
        return redirect(route('home'));
    }
}
