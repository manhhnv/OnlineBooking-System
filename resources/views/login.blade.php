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
    <link rel="stylesheet" href="{{asset('css/loginStyle.css')}}">
    <title>TripsVN-Đăng nhập</title>
</head>
<body style="background-image: url('image/background1.jpg'); background-size: cover;">
<div id="login">
    <form id="loginForm" action="{{route('post')}}" method="post">
        <div>TripsVN-Đăng nhập</div>
        {{ csrf_field() }}
        <div id="username">
            <i class="far fa-user-circle"></i>
            <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập...">
        </div>
        <div id="password">
            <i class="fas fa-key"></i>
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu...">
        </div>
        <div id="submit">
            <input type="submit" class="form-control" name="submit" value="Đăng nhập">
        </div>
        <div id="create">
            <a href="/register">
                <button type="button" class="btn btn-success">Sign Up</button>
            </a>
        </div>
    </form>
    <a href="/reset">
        <i>Quên mật khẩu?</i>
    </a>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#login").slideDown(1000);
    });
</script>
</body>
</html>
