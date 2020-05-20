<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('lib/bootstrap.css')}}">
    <script src="{{asset('lib/jquery.min.js')}}"></script>
    <script src="{{asset('lib/popper.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap.min.js')}}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset('image/icon.png')}}">
    <link rel="stylesheet" href="{{asset('css/signupStyle.css')}}">
    <title>TripsVN-Đăng ký tài khoản</title>
</head>
<body style="background-size: cover; background-repeat: no-repeat; background-image: url('image/background2.jpg');">
<div id="signup">
    <form id="signupForm" action="{{route('register')}}" method="post">
        @csrf
        <div id="title">TripsVN-Đăng ký tài khoản</div>
        <div id="phonenumber">
            <i class="fas fa-phone-alt"></i>
            <input type="text" class="form-control" name="phonenumber" placeholder="Phone Number...">
            <span class="error">
                
            </span>
            <div class="required">*</div>
        </div>
        <div id="IdCard">
            <i class="fas fa-id-card-alt"></i>
            <input type="text" class="form-control" name="idCard" placeholder="Your Card ID...">
            <span class="error">
                
            </span>
            <div class="required">*</div>
        </div>
        <div id="fullname">
            <i class="fas fa-address-card"></i>
            <input type="text" class="form-control" name="fullname" placeholder="Name...">
            <span class="error">
                
            </span>
            <div class="required">*</div>
        </div>
        <div id="username">
            <i class="far fa-user-circle"></i>
            <input type="text" class="form-control" name="username" placeholder="Username...">
            <span class="error">
                
            </span>
            <div class="required">*</div>
        </div>
        <div id="password">
            <i class="fas fa-key"></i>
            <input type="password" class="form-control" name="password" placeholder="Password...">
            <span class="error">
                
            </span>
            <div class="required">*</div>
        </div>
        <div id="re-password">
            <input type="password" class="form-control" name="re-password" placeholder="Retype password...">
            <span class="error">
                
            </span>
            <div class="required">*</div>
        </div>
        <div id="submit">
            <input type="submit" class="form-control" value="Sign Up">
        </div>
    </form>
    <div id="login">
        <a href="/login">
            <button type="button" class="btn btn-success">Login</button>
        </a>
    </div>
    <div style="color: #ff5835; margin-top: 10px; margin-left: 20px;">(*): Required field.</div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#signup").slideDown(500);
    });
</script>
</body>
</html>
