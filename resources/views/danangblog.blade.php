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
    <link rel="stylesheet" href="{{asset('css/danangStyle.css')}}">
    <script type="text/javascript" src="{{asset('js/commonJs.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/clockStyle.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('image/icon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <title>Thành phố Đà Nẵng-Việt Nam</title>
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
<div class="container" id="dnblog">
    <h5>Vẻ đẹp Đà Nẵng trong bộ ảnh Dấu ấn Việt Nam</h5> <br>
    <p style="font-style: italic;">
        Với nỗ lực vươn lên, phát triển không ngừng,
        Đà Nẵng giờ đây không chỉ trở thành điểm du lịch phổ biến hàng đầu mà còn được mệnh danh là thành phố đáng sống nhất Việt Nam.
    </p> <br>
    <b>CHIÊM NGƯỠNG CẢNH CẦU RỒNG PHUN LỬA VÀ PHUN NƯỚC</b><br>
    <img src="{{asset('image/danang1.jpg')}}">
    <p>Đà Nẵng là thành phố trực thuộc trung ương thuộc vùng duyên hải Nam Trung Bộ,
        có vị trí chiến lược quan trọng cả về kinh tế, xã hội và an ninh - quốc phòng.
        Những năm gần đây, Đà Nẵng đã khẳng định thế mạnh du lịch và phát triển của
        mình với các công trình cầu cảng hiện đại, thu hút một lượng lớn khách du lịch
        cả trong và ngoài nước ghé thăm mỗi năm.
    </p>
    <p>
        Bắc qua dòng sông Hàn thơ mộng - biểu tượng của thành phố - là 6 cây cầu tuyệt
        đẹp khác nhau, nổi bật nhất là cầu Rồng. Đây là công trình hiện đại và có tính
        thẩm mỹ bậc nhất của Đà Nẵng. Cứ đến cuối tuần hoặc các dịp lễ đặc biệt, du khách
        có cơ hội chiêm ngưỡng cảnh cầu Rồng phun lửa và phun nước rất đẹp mắt.
        Ngay gần đó là bức tượng cá chép hóa rồng liên tục đổi màu và phun nước độc đáo không kém.
    </p><br>
    <b>THÀNH PHỐ TRẺ, ĐẸP VÀ HIỆN ĐẠI BÊN DÒNG SÔNG HÀN</b><br/>
    <img src="{{asset('image/danang2.jpg')}}">
    <p>
        Để có được một thành phố trẻ, đẹp và hiện đại bên dòng sông Hàn như ngày nay,
        không ít các anh hùng đã phải ngã xuống. Đêm 27/7/2019, thành đoàn Đà Nẵng đã
        tổ chức lễ thả đèn hoa đăng trên sông để tri ân các anh hùng liệt sĩ.
        Ánh nến hòa cùng ánh đèn thành phố tạo thành một dòng sông ánh sáng, đẹp như một bản nhạc.
    </p><br>
    <b>CẢM GIÁC YÊN BÌNH DỄ CHỊU KHI HOÀNG HÔN BUÔNG XUỐNG</b><br/>
    <img src="{{asset('image/danang3.jpg')}}">
    <p>
        Chiều hoàng hôn dần buông xuống thành phố. Trái ngược với những công trình hiện
        đại mọc lên ngày càng nhiều, Đà Nẵng vẫn mang lại cho mọi người cảm giác yên bình, dễ chịu, không xô bồ.
    </p><br>
    <b>NÚI BÀ NÀ LÀ MỘT TRONG NHỮNG NGỌN NÚI ĐẸP NHẤT ĐÀ NẴNG</b><br/>
    <img src="{{asset('image/danang4.jpg')}}">
    <p>
        Núi Bà Nà là một trong những ngọn núi đẹp nhất Đà Nẵng, cùng với Ngũ Hành Sơn và Sơn Trà.
        Trung tâm du lịch Bà Nà Hill xây dựng trên đỉnh núi Chúa được xem là "hòn ngọc quý" của thành phố.
        Hệ thống cáp treo hiện đại cùng các công viên giải trí, vườn hoa hay khu làng Pháp giúp nơi đây
        trở thành điểm hút khách chính của thành phố biển.
    </p><br/>
    <b>THIÊN ĐƯỜNG VỚI BÃI CÁT TRẮNG MỊN</b><br/>
    <img src="{{asset('image/danang5.jpg')}}">
    <p>
        Bãi Bắc ở bán đảo Sơn Trà đẹp như thiên đường với bãi cát trắng mịn nằm bên làn nước biển trong xanh,
        sát đó là khu nghỉ dưỡng hiện đại bậc nhất tựa mình vào rừng núi hoang sơ. Ngoài bán đảo Sơn Trà,
        Đà Nẵng còn rất nhiều bãi biển đẹp khác, nổi tiếng nhất là bãi biển Mỹ Khê - nơi được công nhận là
        một trong những bãi biển đẹp nhất thế giới.
    </p> <br>
    <b>ÁNH ĐÈN LUNG LINH SẮC MÀU CỦA THÀNH PHỐ</b><br/>
    <img src="{{asset('image/danang6.jpg')}}">
    <p>
        Sau ánh đèn lung linh sắc màu của thành phố là giấc ngủ say của những con tàu sau chuyến ra khơi đánh bắt hải sản,
        góp phần bảo vệ và khẳng định chủ quyền biển đảo Việt Nam.
    </p> <br>
    <b>MỘT NGÀY LAO ĐỘNG MỚI ĐẦY NHỘN NHỊP VÀ HĂNG SAY TRÊN BÃI BIỂN THỌ QUANG.</b><br/>
    <img src="{{asset('image/danang7.jpg')}}">
    <p>
        Không những mang nét đẹp hiện đại, đâu đó ở Đà Nẵng vẫn là bức tranh lao động bình dị, mộc mạc của người dân chài khi bình minh vừa hé rạng.
        Một ngày lao động mới đầy nhộn nhịp và hăng say trên bãi biển Thọ Quang. Tiếng hò reo kéo lưới của ngư dân vang vọng tạo bầu không khí hứng khởi, mang lại cảm giác yên bình đến lạ.
        Người ngư dân gắn cuộc sống của mình với biển, quen "ăn sóng nói gió" nhưng lại có tấm lòng chân thật, sống chan hòa, gần gũi với thiên nhiên và con người.
    </p>
    <p style="font-style: italic;">
        Nguồn: Internet
    </p>
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
