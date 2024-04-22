<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Admin/Hinhanh/logo1.jpg">
    <title>Login ADMIN</title>
    <link rel="stylesheet" href="{{asset('USER/css/login.css')}}">   
    <link rel="stylesheet" href="{{asset('ADMIN/reset.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css')}}">
</head>
<body>
    <div id="wrapper">
        <form action="" id="form-login">
            <h1 class="form-heading">LOGIN</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input id="taikhoan" type="text" class="form-input" placeholder="Username">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input id="matkkhau" type="password" class="form-input" placeholder="Password"  >
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div>
                <label style="font-size: 15px;">
                    <input type="checkbox" value="checkedValue">
                    Remember me </label> 
                <a class="miss-pass" href="../misspass.html">Forgot password</a>                                                                                                          
            </div>
            <input type="submit" value="LOGIN" class="form-submit">   
            <div class="login.html">
                <div class="register">
                   <p>Don't have an account?<a href="/signup"> Signup now</a></p>                
                </div>               
            </div>                      
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.js" ></script>
<script src="{{asset('ADMIN/js/login.js')}}" ></script>
</html>