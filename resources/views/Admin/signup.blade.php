<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="User/Images/logo1.jpg">
    <title>SIGNUP ADMIN</title>
    <link rel="stylesheet" href="{{asset('USER/css/login.css')}}">   
    <link rel="stylesheet" href="{{asset('ADMIN/reset.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/css/signup.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    <div id="wrapper">
        <form action="{{ route('Admin.TaiKhoan.save' , 0)}}" id="form-login">
            <h1 class="form-heading">SIGNUP</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input name='TenTaiKhoan' id='TenTaiKhoan' type="text" class="form-input" placeholder="Username" required>
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input name='Email' id='Email' type="text" class="form-input" placeholder="Email" required>
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input name='SDT' id='SDT' type="text" class="form-input" placeholder="Number phone" required>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input name='MatKhau' id='MatKhau' type="password" class="form-input" placeholder="Password" required>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input name='MatKhau' id='MatKhau' type="password" class="form-input" placeholder="Confirm password"  required>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>  
            <div style="display: flex;" >
                <button type='submit' class="item">SIGNUP</button>
                <button class="item" style="margin-left: 8px;">
                    <a style="color: black; text-decoration: none;" href="/login">LOGIN</a>
                </button>             
            </div>                                
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js" ></script>
</html>