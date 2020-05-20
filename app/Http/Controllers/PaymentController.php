<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Payment;
use App\DatVe;
use App\DatPhong;

class PaymentController extends Controller
{
    //
    public function ticketPayment(Request $request) {
        $cost = doubleval($request['ticketPrice']);
        $IdCard = Session::get('idCard');
        $banking = Payment::where('IdCard', '=', $IdCard)->get();
        $banking = $banking[0];
        $current = doubleval($banking->current);
        if ($current < $cost) return \redirect('/cart');

        $remain = $current - $cost;
        Payment::where('IdCard', '=', $IdCard)->update(['current' => $remain]);
        DatVe::where('orderID', '=', $request['ticketOrdered'])->update(['status' => 'OK']);
        return \redirect('/cart');
    }
    public function hotelPayment(Request $request) {
        $cost = doubleval($request['hotelPrice']);
        $IdCard = Session::get('idCard');
        $banking = Payment::where('IdCard', '=', $IdCard)->get();
        $banking = $banking[0];
        $current = doubleval($banking->current);
        if ($current < $cost) return \redirect('/cart');

        $remain = $current - $cost;
        Payment::where('IdCard', '=', $IdCard)->update(['current' => $remain]);
        DatPhong::where('orderID', '=', $request['hotelBooking'])->update(['status'=> 'OK']);
        return \redirect('/cart');
    }

    public function connect(Request $request) {
        $bankName = $request['bankName'];
        $account = $request['account'];
        $password = $request['password'];
        $IdCard = Session::get('idCard');
        $payment = new Payment();
        $payment->organization = $bankName;
        $payment->account = $account;
        $payment->current = 50000;
        $payment->IdCard = $IdCard;
        $payment->save();
        return \redirect('/');
    }
    public function bankingExists() {
        if (!Session::has('idCard')) return redirect('login');
        $idCard = Session::get('idCard');
        $check = "";
        if (Payment::where('IdCard', '=', $idCard)->exists()) {
            $check = "Exists";
            $payment = Payment::where('IdCard', '=', $idCard)->get();
            $payment = $payment[0];
            $current = $payment->current;
            return  \view('banking', ['check' => $check, 'current' => $current]);
        }
        else {
            $check = "Not exists";
            return \view('banking')->with('check', $check);
        }
    }
    public function disconnect() {
        $idCard = Session::get('idCard');
        Payment::where('IdCard', '=', $idCard)->delete();
        return \redirect('/');
    }
}
