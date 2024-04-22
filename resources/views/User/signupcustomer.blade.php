<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('USER/Images/logo1.jpg')}}">
    <title>Đăng ký - Hasaki</title>
    <link rel="stylesheet" href="{{asset('USER/css/logincustomer.css')}}"> 
    <link rel="stylesheet" href="{{asset('USER/css/signup.css')}}"> 
    <link rel="stylesheet" href="{{asset('USER/reset/reset.css')}}">
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}"/>
</head>
<body>
    <header>
        <div class="header_support">
            <img src="User/Images/logo-new.svg" alt="">
            <ul id="main-menu">
                <li><a href="/index">Trang chủ</a></li>
                <li><a href="systemshop.html">Hệ thống</a></li>
                <li><a href="">Liên hệ</a></li>                 
                <li><a href="">Login</a></li>
            </ul>
            <div class="timkiem">
                <div class="one_line">
                    <p>|</p>
                </div>
                <div class="one_line1">
                    <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #ffffff;"></i>
                </div>
            </div>
        </div>       
    </header> 
    <div id="wrapper">
        
        <form action="{{route('User.signupcustomer.save')}}" method="post" id="form-login">   
              @csrf
            <h1 class="form-heading">REGISTER TO HASAKI</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input name='TenTaiKhoan' id='TenTaiKhoan'  type="text" class="form-input" placeholder="Username" required>
                    @error('TenTaiKhoan')
                        <span style="display: block; color: red;">
                        {{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input name='Email' id='Email'  type="text" class="form-input" placeholder="Email" required>
            </div>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input name='SDT' id='SDT'  type="text" class="form-input" placeholder="Number phone" required>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input name='MatKhau' id='MatKhau'  type="password" class="form-input" placeholder="Password"  required>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input name='NhapLai' id='NhapLai'  type="password" class="form-input" placeholder="Confirm password" required>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>  
            <div style="display: flex;" >
                <button type='submit' class="item">SIGN UP</button>
                <a href="/logincustomer" class="item" style="margin-left: 8px; text-decoration: none; color: black; text-align: center;">
                LOGIN</a>             
            </div>                           
        </form>        
    </div>  
    <div class="footer">
        <p>Copyright © 2024 Hasaki VietNam. Powered by Xuan En Tran</p>
    </div> 
</body>

<script> 
$(document).ready(function(){
    $('#eye').click(function(){
        $(this).toggleClass('Open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('Open')){
            $(this).prev().attr('type','text');           
        }
        else{
            $(this).prev().attr('type','password');
        }
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.4.js" ></script>
<script src="{{asset('USER/js/dangky.js')}}"></script>
</html>
 