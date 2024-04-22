<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('USER/Images/logo1.jpg')}}">
    <title>Đăng nhập - Hasaki</title>
    <link rel="stylesheet" href="{{asset('USER/css/logincustomer.css')}}"> 
    <link rel="stylesheet" href="{{asset('USER/css/signup.css')}}"> 
    <link rel="stylesheet" href="{{asset('USER/reset/reset.css')}}">
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}"/>
</head>
<body>
    <header>
        <div class="header_support">
            <img src="{{asset('USER/Images/logo-new.svg')}}" alt="">
            <ul id="main-menu">
                <li><a href="index.html">Trang chủ</a></li>
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

        <form action="{{route('User.logincustomer.in')}}" method="post" id="form-login">   
              @csrf
            <h1 class="form-heading">WELCOME TO HASAKI</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input name="username" id="tk" type="text" class="form-input" placeholder="Username" required>
            </div>

            <div class="form-group">
                <i class="fas fa-key"></i>
                <input name="password" id="mk" type="password"  class="form-input" placeholder="Password" required>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>

            <div>
                <label style="font-size: 15px;">
                    <input type="checkbox" name="" id="" value="checkedValue">
                    Remember me </label> 
                <a class="miss-pass" href="misspass.html">Forgot password</a>                                                                                                          
            </div>

            <div>
                <button  class="item" style="width: 440px;">LOGIN</button>             
            </div> 
            <div>
                <div class="register">
                   <p>Don't have an account?<a href="/signupcustomer"> Signup now</a></p>                
                </div>               
            </div>  
            <div class="khac">
                OR LOGIN WITH
            </div>
            <div class="link">
                <a href="https://www.facebook.com/">
                    <div class="facebook">
                        <i class="fa-brands fa-facebook"></i>
                        <span>Facebook</span>
                    </div>
                </a>     
                <div class="Ins">
                    <a href="https://www.instagram.com/283.2003/"><i class="fa-brands fa-instagram"></i><span>Instagram</span></a>
                </div>
            </div>                    
        </form>     

    </div>  
    <div class="footer">
        <p>Copyright © 2023 Hasaki VietNam. Powered by Xuan En Tran</p>
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
<script src="{{asset('USER/js/dangky.js')}}" ></script>

</html>