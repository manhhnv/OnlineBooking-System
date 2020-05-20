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
    <link rel="stylesheet" href="{{asset('css/forgetStyle.css')}}">
    <script src="{{asset('js/forget.js')}}"></script>
    <title>Quên mật khẩu?</title>
</head>
<body style="background-image: url('image/background2.jpg'); background-size: cover;">
<div id="setpassword">
    <form id="resetForm" action="{{route('reset')}}" method="post">
    <div>Lấy lại mật khẩu</div>
    @csrf
        <div id="username">
            <i class="far fa-user-circle"></i>
            <input type="text" class="form-control" name="username" placeholder="Username...">
            <span class="error">

            </span>
        </div>
        <div id="phonenumber">
            <i class="fas fa-phone"></i>
            <input type="number" class="form-control" name="phonenumber" placeholder="Phone number...">
            <span class="error">

            </span>
        </div>
        <div id="newpassword">
            <i class="fas fa-key"></i>
            <input type="password" class="form-control" name="newpassword" placeholder="New password...">
            <span class="error">

            </span>
        </div>
        <div id="re-password">
            <i class="fas fa-key"></i>
            <input type="password" class="form-control" name="re-password" placeholder="Retype new password...">
            <span class="error">

            </span>
        </div>
        <div id="submit">
            <input type="submit" class="form-control" name="submit" value="Set New Password">
        </div>
    </form>
</div>
<div id="login">
    <a href="/login">
        <button type="button" class="btn">Log In</button>
    </a>
</div>
<div id="signup">
    <a href="/register">
        <button type="button" class="btn">Sign Up</button>
    </a>
</div>
</body>
</html>
