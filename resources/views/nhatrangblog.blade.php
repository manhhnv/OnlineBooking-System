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
    <link rel="stylesheet" href="{{asset('css/nhatrangStyle.css')}}">
    <script type="text/javascript" src="{{asset('js/commonJs.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/clockStyle.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('image/icon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <title>Thành phố biển Nha Trang-Việt Nam</title>
</head>
<body>
<header class="fixed-top" style="z-index: 2; position: absolute;">
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
<div class="container" id="nhatrangblog">
    <p>
        Vịnh Nha Trang, 1 trong những vịnh biển đẹp quyến rũ nhất thế giới và là
        vịnh thứ 2 cùng với vịnh Hạ Long lọt top vào những vịnh biển đẹp của hành tinh,
        là điểm du lịch đẹp diệu kỳ thu hút du khách trong nước và du khách quốc tế đến
        tham quan, nghỉ dưỡng.
    </p>
    <h4>Khám phá vẻ đẹp Vịnh Nha Trang</h4>
    <p>
        Vịnh Nha Trang, được thiên nhiên ưu ái ban tặng cho một vẻ đẹp thuần khiết,
        trong lành và dịu dàng, quyến rũ, một nét đẹp đến ngỡ ngàng bởi những bãi biển rộng,
        trong xanh mát, cát trải dài trắng mịn hay những hòn đảo ngoài khơi đẹp tuyệt vời với
        đa dạng những rạn san hô dưới lòng đại dương và cả những di tích lịch sử, kiến trúc độc
        đáo của ngôi đền điêu khắc Chăm pa cổ kính.
    </p>
    <img src="{{asset('image/nhatrang1.jpg')}}">
    <p>Được ví như “ Hòn Ngọc Viễn Đông”, Vịnh Nha Trang nằm tại tỉnh Khánh Hòa bao gồm 19 đảo
        lớn nhỏ bao quanh và là một vẻ đẹp sở hữu đầy đủ những tinh túy của thiên nhiên: núi non,
        biển, đầm phá, hải đảo, làng quê, đồng ruộng,... Là một quần thể thiên nhiên đặc sắc với
        nguồn tài nguyên thiên nhiên đa dạng, vịnh Nha Trang không chỉ là điểm du lịch để du khách
        có thể tắm biển, thư giãn nghỉ dưỡng mà còn có thể khám phá, tìm hiểu về thế giới thiên nhiên
        muôn loài với đa dạng các loại động thực vật quý hiếm.
    </p>
    <img src="{{asset('image/nhatrang2.jpg')}}" style="width:600px;">
    <p>
        <b>Những điểm tham quan hấp dẫn của vịnh Nha Trang</b>
        <br/>
        Đến với du lịch Nha Trang, thành phố biển xinh đẹp, với vịnh đẹp quyến rũ du khách sẽ có một hành
        trình thú vị, đến với những điểm tham quan hấp dẫn, đẹp ấn tượng.
        <br/>
        <b>Bãi Dài</b>: Đây là một trong những bãi biển đẹp nhất của khu du lịch vịnh Nha Trang. Sở hữu nét
        đẹp hoang sơ, bờ biền cát trắng mịn, làn nước biển trong xanh vắt và rất sạch trở thành điểm tắm biển,
        thư giãn tuyệt vời dành cho du khách với cảm nhận không gian yên bình, nhẹ nhàng của sóng biển vỗ rì rào.
        <br/>
        <b>Bãi Dốc Lết</b>: Với cát trắng dài, nước biển trong xanh, khung cảnh đẹp thơ mộng, bãi Dốc Lết được
        bình chọn là bãi biển đẹp nhất của du lịch biển Nha Trang.
    </p>
    <img src="{{asset('image/nhatrang3.jpg')}}">
    <p>
        Khu vực vịnh biển Nha Trang: Bờ vịnh Nha Trang nằm trải dài hơn 7km với cát trắng mịn như nhung, cảnh sắc
        thiên nhiên tuyệt đẹp, quyến rũ với làn gió biển mát lành, những rặng hàng cây xanh trải dọc bờ biển cùng
        với dịch vụ du lịch ngày càng được đầu tư, phát triển cao cấp, đẳng cấp quốc tế, trở thành điểm du lịch nghỉ
        dưỡng lý tưởng thu hút du khách trong nước và nước ngoài.
        <br/>
        Vùng vịnh biển Nha Trang xinh đẹp, với cảnh sắc thiên nhiên tuyệt đẹp, thơ mộng và quyến rũ là một điểm du
        lịch lý tưởng để bạn bè, gia đình có những phút giây thư giãn, trải nghiệm tuyệt vời, ý nghĩa.
    </p>
    <p style="font-style: italic">Nguồn: Internet.</p>
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
</html>
