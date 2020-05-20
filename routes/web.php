<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\HangBay;
use App\User;
use App\DatVe;
use App\DatPhong;
use App\Hotel;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    if (Session::has('idCard'))
        return view('home');
    else return redirect(route('login'));
})->name('home');
Route::post('/', function () {
    return view('home');
});
Route::get('/ticket', function () {
    if (Session::has('idCard'))
        return view('ticket');
    else return redirect(route('login'));
})->name('ticket');
Route::get('/hotel', function () {
    if (Session::has('idCard'))
        return view('hotel');
    else return redirect(route('login'));
});
Route::get('/blog/dalat', function () {
    if (Session::has('idCard'))
        return view('dalatblog');
    else return redirect(route('login'));
});
Route::get('/blog/danang', function () {
    if (Session::has('idCard'))
        return view('danangblog');
    else return redirect(route('login'));
});
Route::get('/blog/hanoi', function () {
    if (Session::has('idCard'))
        return view('hanoiblog');
    else return redirect(route('login'));
});
Route::get('/blog/nhatrang', function () {
    if (Session::has('idCard'))
        return view('nhatrangblog');
    else return redirect(route('login'));
});
Route::get('/blog/phuquoc', function () {
    if (Session::has('idCard'))
        return view('phuquocblog');
    else return redirect(route('login'));
});
Route::get('/blog/saigon', function () {
    if (Session::has('idCard'))
        return view('sgblog');
    else return redirect(route('login'));
});
Route::get('/reset', function () {
    return view('forget');
});
Route::get('change', function () {
    if (Session::has('idCard'))
        return view('changepass');
    else return view('login');
});
Route::get('register', function () {
    return view('signup');
});
Route::get('/login', function() {
    return view('login');
})->name('login');

Route::group(['middleware' => ['web']], function(){
    Route::get('ticket/result', function() {
        $hangbay = HangBay::all();
        $hangbay = $hangbay[0];
        $result = $hangbay->ChuyenBay;
        Session::flash('result', $result);
        return view('searchPlane')->with('result', Session::get('result'));
    });
    Route::post('/dangnhap', 'MyController@login')->name('post');
    Route::get('/logout', 'MyController@logout')->name('logout');
    Route::post('/logout', 'MyController@logout')->name('logout');
    Route::post('/search', 'PlaneController@search')->name('search')->middleware('checkInput');
    Route::post('/confirmTicket', 'DatVeController@confirm')->name('datve');
    Route::get('cart', 'CartController@CartInfo')->name('cart');
    Route::get('test', function() {
        $rooms = DatPhong::where('IdCard', '=', '122362040')->get();
        echo $rooms[0]->Hotel->hotelName;
    });
    Route::post('/hotel/booking', 'BookRoomController@bookRoom')->name('booking');
});
Route::get('/hotel/search', 'HotelController@search')->name('searchHotel')->middleware('checkDataBooking');
Route::post('/ticket/payment', 'PaymentController@ticketPayment')->name('ticketpayment');
Route::post('/hotel/payment', 'PaymentController@hotelPayment')->name('hotelpayment');
Route::post('blog', 'BlogController@search')->name('blogSearch');
Route::post('/change_password', 'ChangePasswordController@changePassword')->name('change')->middleware('changePassword');
Route::post('/signup', 'RegisterController@register')->name('register')->middleware('register');
Route::get('banking', 'PaymentController@bankingExists');
Route::post('connect', 'PaymentController@connect')->name('connect')->middleware('bankingCheck');
Route::post('/disconnect', 'PaymentController@disconnect')->name('disconnect');
Route::post('/reset_password', 'ResetController@reset')->name('reset');
