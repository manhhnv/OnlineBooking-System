<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\DatVe;
use Illuminate\Support\Facades\Session;
class DatVeController extends Controller
{
    //
    public function confirm(Request $request) {
        $confirm = new DatVe;
        $confirm->idChuyenBay = $request['idChuyenBay'];
        $confirm->quantity = Session::get('quantity');
        $total = intval(Session::get('quantity')) * doubleval($request['cost']);
        $confirm->total = $total;
        $confirm->status = 'No';
        $confirm->IdCard = Session::get('idCard');
        $confirm->save();
        return redirect(route('home')); 
    }
}
