<?php
use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('lib/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{asset('lib/jquery.min.js')}}"></script>
    <script src="{{asset('lib/popper.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('lib/jquery-ui.css')}}">
    <script src="{{asset('lib/jquery-1.12.4.js')}}"></script>
    <script src="{{asset('lib/jquery-ui.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/commonStyle.css')}}">
    <script type="text/javascript" src="{{asset('js/commonJs.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/clockStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/hotelStyle.css')}}">
    <script type="text/javascript" src="{{asset('js/hotelJs.js')}}"></script>
    <link rel="icon" type="image/x-icon" href="{{asset('image/icon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <title>Đặt phòng khách sạn giá rẻ nhất, chất lượng tốt nhất-TripsVN</title>
</head>
<body onload="time()">
<header class="fixed-top" style="z-index: 2;">
    <div class="container-fluid" id="note" >
        <i class="fas fa-bell fa" style=" font-size: 20px;"></i>
        <b style="font-size: 16px; opacity: 0.5; font-family: 'Comic Sans MS';">
            Thông tin cần biết về tình trạng và chính sách áp dụng cho các chuyến bay trong đợt dịch bệnh Corona.
            <a href="https://ncov.moh.gov.vn/" target="_blank">Xem toàn bộ thông tin cập nhật.</a>
        </b>
    </div>
    <div id="border"></div>
    <div class="container-fluid" style="padding-top: 15px; background-color: white;">
        <button type="button" class="btn btn-light" id="justify" style="margin-left: 100px;">
            <i class="fas fa-bars fa" style="color: #0770cd; font-size: 22px;"></i>
        </button>
        <a href="/" id="link_home" style="padding-right: 40px;">
            <b style="font-size: 21px; margin-left: 0px; font-family: 'Comic Sans MS';">
                TripsVN
            </b>
        </a>
        <div style="display: inline-block;">
            <form action="{{route('blogSearch')}}" method="post">
                @csrf
                <input  type="text" name="searchcity" id="city" placeholder="Search...">
                <button type="submit" id="searchbar" class="btn">
                    <i class="fas fa-search-location"></i>
                </button>
            </form>
        </div>
        <div id="personal" style="display: inline-block;">
            <a class="choice" href="/cart" style="position: absolute; left: 950px;">
                <button class="btn btn-info" type="button">
                    <i class="fas fa-cart-plus" style="color: white;"></i>
                    <span class="badge badge-danger">
                        @if(Session::has('count'))
                            {{Session::get('count')}}
                        @else
                            0
                        @endif
                    </span>
                </button>
            </a>
            <div style="display: inline; margin-left: 800px;">
                <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="login">
                    <i class="far fa-user-circle">
                        Profile<span class="badge" style="background-color: #34ce57;">!</span>
                    </i>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand bg-light sticky-top" style="padding-left: 100px;">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto" style="font-size: 15px; margin-left: 305px; z-index: 2">
                <li class="nav-item">
                    <a class="nav-link" href="/ticket" style="color: black;">
                        <i class="fas fa-plane-departure" style="color: #30c5f7;"></i>
                        <b>Vé máy bay</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hotel" style="color: black; margin-left: 50px;">
                        <i class="fas fa-building" style="color: #235d9f;"></i>
                        <b>Khách sạn</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart" style="color: black; margin-left: 50px;">
                        <i class="fas fa-clipboard-list" style="color: #37c337;"></i>
                        <b>Đặt chỗ của tôi</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/banking" style="color: black; margin-left: 50px;">
                        <i class="fab fa-cc-mastercard" style="color: #ff6001;"></i>
                        <b>Banking</b>
                    </a>
                </li>
                <li style="margin-left: 400px;">
                    <button type="button" class="btn btn-danger" disabled="disabled">
                        <i class="fas fa-star" style="color: yellow;"></i>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div id="fix"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col col-sm-6 bg-success slide">
            <div class="carousel slide" data-ride="carousel" id="mycarousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#">
                            <img src="{{asset('image/halong.jpg')}}" alt="Hạ Long" width="640" height="415">
                        </a>
                        <div class="carousel-caption">
                            <h2 class="place">Vịnh Hạ Long</h2>
                            <p>Quảng Ninh</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <img src="{{asset('image/trangan.jpg')}}" alt="Tràng An" width="640" height="415">
                        </a>
                        <div class="carousel-caption">
                            <h2 class="place">Di tích Tràng An</h2>
                            <p>Ninh Bình</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <img src="{{asset('image/nhatrang.jpg')}}" alt="Nha Trang" width="640" height="415">
                        </a>
                        <div class="carousel-caption">
                            <h2 class="place">Bãi biển Nha Trang</h2>
                            <p>Nha Trang</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <img src="{{asset('image/hue.jpg')}}" alt="Huế" width="640" height="415">
                        </a>
                        <div class="carousel-caption">
                            <h2 class="place">Kinh Thành Huế</h2>
                            <p>Thừa Thiên Huế</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <img src="{{asset('image/hoian.jpg')}}" alt="Hội An" width="640" height="415">
                        </a>
                        <div class="carousel-caption">
                            <h2 class="place">Phố cổ Hội An</h2>
                            <p>Quảng Nam</p>
                        </div>
                    </div>
                </div>
                <ul class="carousel-indicators" style="margin-right: 208px; z-index: 1;">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1" ></li>
                    <li data-target="#mycarousel" data-slide-to="2" ></li>
                    <li data-target="#mycarousel" data-slide-to="3" ></li>
                    <li data-target="#mycarousel" data-slide-to="4" ></li>
                </ul>
            </div>
        </div>
        <div class="col col-sm-3 bg-danger second">
            <h2 id="textLeft">
                Đặt ngay Tour tại <b>TripsVN</b><br> để nhận ưu đãi lên đến<br />
                <span class="fas fa-paper-plane" style="color: white; transform: rotate(-100deg);"></span>
                <strong style="font-size: 50px; color: #ff5835">
                    <u style="font-family: 'Comic Sans MS';">30%</u>
                </strong>
            </h2>
        </div>
        <div class="col col-sm-3" id="clock">
            <div class="d-flex flex-row" style="margin-top: 300px; margin-left: 20px;">
                <div class="p-2 common" id="h" style="padding-top: 12px !important;"></div>
                <div class="p-2 common m" id="m" style="padding-top: 12px !important;"></div>
                <div class="p-2 common" id="s" style="padding-top: 12px !important;"></div>
                <div class="p-2 common" id="w">AM</div>
            </div>
        </div>
    </div>
</div>
<b >
    <div class="container wavy">
        <span style="--i:1">Đặt</span>
        <span style="--i:2">Phòng</span>
        <span style="--i:3">Khách</span>
        <span style="--i:4">sạn</span>
        <span style="--i:5">với</span>
        <span style="--i:6">TripsVN</span>
    </div>
</b>
<div class="container" id="hotel">
    <b>
        Chi tiết khách sạn
        <div class="spinner-grow spinner-grow-sm text-success"></div>
        <div class="spinner-grow spinner-grow-sm text-warning"></div>
        <div class="spinner-grow spinner-grow-sm text-danger"></div>
    </b>
    <form action="{{route('searchHotel')}}" method="get">
    @csrf
        <div class="row" id="row1">
            <div class="col col-sm-3 input-group">
                <label for="hotel-name">
                    <i class="fas fa-map-marker-alt"></i>
                </label>
                <input type="text" name="city" id="hotel-name" class="form-control" placeholder="Thành phố của bạn...">
            </div>
            <span style="position: relative; top: 50px;left: -230px; padding-bottom: 30px;">
            </span>
            <div class="col col-sm-3 input-group">
                <label for="hotel-date1">
                    <i class="fas fa-calendar-alt"></i>
                </label>
                <input type="date" name="hotel_date1" id="hotel-date1" class="form-control">
            </div>
            <div class="col col-sm-3 input-group">
                <label for="hotel-date2">
                    <i class="fas fa-calendar-alt"></i>
                </label>
                <input type="date" name="hotel_date2" id="hotel-date2" class="form-control">
            </div>
        </div>
        <div class="row" id="row2">
            <div class="col col-sm-2 input-group">
                <label for="hotel-customer">
                    <i class="fas fa-child"></i>
                </label>
                <input type="number" name="hotel_customer" id="hotel-customer" class="form-control" value="1" min="1">
            </div>
        </div>
        <input type="submit" name="hotel_search" id="hotel-search" class="form-control" value="Tìm khách sạn">
    </form>
</div>
<div class="container">
    <div style="height: 2px; background-color: rgba(64,58,28,0.22);"></div>
</div>
<div class="container" style="margin-top: 50px; margin-left: 430px; margin-bottom: 50px;">
    <b style=" font-size: 20px; opacity: 1.0; text-transform: uppercase; ">
        Tại sao nên đặt combo tiết kiệm với TripsVN?
    </b>
</div>
<div class="container" style="padding-bottom: 200px; margin-left: 100px;">
    <p style="float: left; font-size: 17px; margin-left: 150px;">
        <img src="{{asset('image/img1.png')}}">
    <p style="position: relative;margin-left: 450px;">
        <b style="font-size: 20px; margin-left: 20px;">
            Giá rẻ mỗi ngày với ưu đãi đặc biệt dành <br>
            riêng cho ứng dụng
        </b> <br/><br/>
        Đặt phòng qua ứng dụng để nhận giá tốt nhất với các khuyến mãi tuyệt vời!<br/>
    </p>
    </p>
    <br><br><br><br>
    <p style="float: right; font-size: 17px; margin-left: 100px;">
        <img src="{{asset('image/img2.png')}}">
    <p style="position: relative;margin-left: 270px;">
        <b style="font-size: 20px; margin-left: 20px;">Phương thức thanh toán an toàn và linh hoạt</b><br/>
        Giao dịch trực tuyến an toàn với nhiều lựa chọn như thanh toán tại cửan<br>
        hàng tiện lợi, chuyển khoản ngân hàng, thẻ tín dụng đến Internet<br>
        Banking. Không tính phí giao dịch.<br>
    </p>
    </p>
    <br><br><br><br>
    <p style="float: left; font-size: 17px; margin-left: 150px;">
        <img src="{{asset('image/vote.png')}}">
    <p style="position: relative;margin-left: 450px;">
        <b style="font-size: 20px; margin-left: 20px;">Hỗ trợ khách hàng 24/7</b><br/>
        Đội ngũ nhân viên hỗ trợ khách hàng luôn sẵn sàng giúp đỡ bạn trongn <br>
        từng bước của quá trình đặt vé <br>
    </p>
    </p><br><br><br><br>
    <p style="float: right; font-size: 17px; margin-left: 100px;">
        <img src="{{asset('image/credit.png')}}">
    <p style="position: relative;margin-left: 270px;">
        <b style="font-size: 20px; margin-left: 20px;">Phương thức thanh toán an toàn và linh hoạt</b><br/>
        Hơn 10.000.000 đánh giá, bình chọn đã được xác thực từ du khách sẽ<br>
        giúp bạn đưa ra lựa chọn đúng đắn.<br>
    </p>
    </p>
</div>
<div class="container-fluid" style="position:fixed;top: 0;z-index: 10;">
    <div class="row">
        <div class="col col-sm-3" id="menu">
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="/">
                    <i class="fas fa-home"></i>
                    Trang chủ
                </a>
            </nav>
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="/cart">
                    <i class="fas fa-clipboard-list" style="color: #37c337;"></i>
                    Đặt chỗ của tôi
                </a>
            </nav>
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="https://www.facebook.com/vannguyen.manh.566">
                    <i class="fas fa-phone"></i>
                    Liên hệ với chúng tôi
                </a>
            </nav>
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="https://www.facebook.com/vannguyen.manh.566">
                    <i class="material-icons">help_outline</i>
                    Trợ giúp
                </a>
            </nav>
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="/">
                    <i class="fas fa-percent" style="color: #ff6001;"></i>
                    Khuyến mại
                </a>
            </nav>
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="/ticket">
                    <i class="fas fa-plane-departure" style="color: #30c5f7;"></i>
                    Vé máy bay
                </a>
            </nav>
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="/hotel">
                    <i class="fas fa-building" style="color: #235d9f;"></i>
                    Khách sạn
                </a>
            </nav>
            <nav class="navbar bg-light menu-item">
                <a class="navbar-brand link-item" href="/banking">
                    <i class="fab fa-cc-mastercard" style="color: #ff6001;"></i>
                    Banking
                </a>
            </nav>
        </div>
        <div class="col col-sm-9" id="disable_bg">
            <button type="button" class="btn btn-danger" style="color: white;">X</button>
        </div>
    </div>
</div>
<div id="user">

    <div>
        <b>Thông tin khách hàng</b>
        <i class="fas fa-user-edit"></i>
    </div>
    <div id="fullname">
        Name: {{Session::get('name')}}
    </div>
    <div id="username">
        Username: {{Session::get('username')}}
    </div>
    <div id="usercontact">
        Contact: {{Session::get('phone')}}
    </div>
    <div><a href="/change">Đổi mật khẩu?</a></div>
    <div id="logout">
        <a href="/logout">
            <button class="btn btn-danger" title="Đăng xuất">
                <i class="fas fa-power-off"></i>
            </button>
        </a>
    </div>
</div>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-3">
                <b>TripsVN</b>
                <br /><br />
                <p>
                    Ứng dụng đặt phòng, tìm kiếm địa điểm du lịch chất lượng. <br/>
                    TripsVN liên kết với các đối tác uy tín, nhằm đem lại cho khách hàng
                    sự thoải mái khi sử dụng dịch vụ!
                </p>
                <i class="fas fa-phone">
                    039 856 6421
                </i>
                <br/>
                <i class="fas fa-mail-bulk">
                    manh117bg@gmail.com
                </i>
                <br><br/>
                <a href="https://www.facebook.com/vannguyen.manh.566">
                    <i class="fa fa-facebook-official contact"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram contact"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter-square contact"></i>
                </a>
                <a href="#">
                    <i class="fab fa-youtube contact"></i>
                </a>
            </div>
            <div class="col col-md-3">
                <b>TripsVn-Services</b>
                <ul>
                    <li>
                        <a href="/ticket" class="contact service">Vé máy bay</a>
                    </li>
                    <li>
                        <a href="/hotel" class="contact service">Khách sạn</a>
                    </li>
                    <li>
                        <a href="/cart" class="contact service">Đã đặt</a>
                    </li>
                    <li>
                        <a href="/" class="contact service">Khuyến mại</a>
                    </li>
                    <li>
                        <a href="/" class="contact service">Tìm kiếm địa điểm thú vị</a>
                    </li>
                </ul>
            </div>
            <div class="col col-md-3">
                <b>Send report to us by</b>
                <br>
                <i class="fas fa-mail-bulk">
                    manh117bg@gmail.com
                </i>
                <br>
                <div style="width: 200px; height: 200px;">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark" style="color: white;">Copyright © 2020 TripsVN</div>
</footer>
</body>
