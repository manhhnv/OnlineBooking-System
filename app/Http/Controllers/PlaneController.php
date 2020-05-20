<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\LoTrinh;
use App\PlaneModel;
use App\HangBay;
use App\ChuyenBay;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
class PlaneController extends Controller
{
    //
    /*public function getTrip(Request $request) {
        $result = LoTrinh::getID($request['start'], $request['end']);
        $idLoTrinh;
        foreach($result as $key) {
            $idLoTrinh = $key->idLoTrinh;
        }
        $result = PlaneModel::searchPlane($idLoTrinh, $request['date']);

        return redirect('ticket/search')->with('result', $result);
    }*/ 
    public function search(Request $request) {
        $idLoTrinh = LoTrinh::select('idLoTrinh')->where([['start', '=', $request['start']], ['end', '=', $request['end']]])->get();
        Session::put('start', $request['start']);
        Session::put('end', $request['end']);
        Session::put('quantity', $request['customers']);
        Session::put('date', $request['date']);
        $idLoTrinh = $idLoTrinh[0]->idLoTrinh;
        $chuyenbay = ChuyenBay::where([['idLoTrinh', '=', $idLoTrinh], ['ngaybay', '=', $request['date']]])->get();
        return \view('searchPlane')->with('chuyenbay', $chuyenbay);
    }
}
