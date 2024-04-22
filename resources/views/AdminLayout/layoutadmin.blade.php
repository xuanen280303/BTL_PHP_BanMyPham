<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Hasaki VietNam</title>
    <link rel="icon" href="{{asset('ADMIN/Hinhanh/logo1.jpg')}}">

    <link rel="stylesheet" href="{{asset('ADMIN/css/adminpage.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/css/mypham.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/css/nhanvien.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/css/baiviet.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/css/taikhoan.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/css/inHDN.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/css/thongke.css')}}">
    <link rel="stylesheet" href="{{asset('ADMIN/fontawesome-free-6.4.0-web/css/all.min.css')}}"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/components/input-group/">
    <link rel="stylesheet" href="{{asset('ADMIN/reset/reset2.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="width:100%">
    <div class="phanthanto">
        <!-- Menu -->      
        <div class="menubentrai">
            <a class="header_support" href="index.html">
                <img src="{{asset('ADMIN/Hinhanh/logo1.jpg')}}" alt="">
            </a>  
            <div class="danhsach">
                <ul class="danhsach_ul">
                    <a href="/adminpage" class="ds_link active">
                        <i class="fa-solid fa-house-user"></i>
                        <span class="ds_text" style="margin-left: 5px;">Trang chủ</span>
                    </a>
                    <a href="/baiviet" class="ds_link active">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span class="ds_text" style="margin-left: 5px;">Bài viết</span>
                    </a>
                    <a href="/LoaiMyPhams" class="ds_link active">
                        <i class="fa-solid fa-bars"></i>
                        <span class="ds_text" style="margin-left: 11px;">Loại mỹ phẩm</span>
                    </a>
                    <a href="/MyPhams" class="ds_link active">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="ds_text" style="margin-left: 11px;">Mỹ phẩm</span>
                    </a>
                    <a href="/KhachHangs" class="ds_link active">
                        <i class="fa-solid fa-users" style="color: #ffffff;"></i>
                        <span class="ds_text" style="margin-left: 6px;">Khách hàng</span>
                    </a>
                    <a href="/NhaCCs" class="ds_link active">
                        <i class="fa-solid fa-truck-field"></i>
                        <span class="ds_text" style="margin-left: 7px;">Nhà cung cấp</span>
                    </a>        
                    <a href="/NhanViens" class="ds_link active">
                        <i class="fa-regular fa-user"></i>
                        <span class="ds_text" style="margin-left: 10px;">Nhân viên</span>
                    </a>
                    <a href="/hoadonnhap" class="ds_link active">
                        <i class="fa-solid fa-money-bill"></i>
                        <span class="ds_text" style="margin-left: 8px;">Hoá đơn nhập</span>
                    </a>
                    <a href="/dondathang" class="ds_link active">
                        <i class="fa-solid fa-file-invoice"></i>
                        <span class="ds_text" style="margin-left: 14px;">Đơn hàng đặt</span>
                    </a>
                    <a href="/thongke" class="ds_link active">
                        <i class="fa-solid fa-circle-info"></i>
                        <span class="ds_text" style="margin-left: 10px;">Thống kê</span>
                    </a>
                    <a href="#" class="ds_link active">
                        <i class="fa-brands fa-instalod"></i>
                        <span class="ds_text" style="margin-left: 10px;">Cài đặt</span>
                    </a>
                    <a href="/TaiKhoans" class="ds_link active">
                        <i class="fa-solid fa-lock"></i>
                        <span class="ds_text" style="margin-left: 10px; ">Account</span>
                    </a>
                    <a href="/login" class="ds_link active">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="ds_text" style="margin-left: 10px; ">Đăng xuất</span>
                    </a>
                </ul>
            </div>
        </div>
        
        @yield('content')
    </div>  
</body>
<!-- <script src="{{asset('ADMIN/js/baiviet.js')}}"></script>

<script src="{{asset('ADMIN/js/nhanvien.js')}}"></script>
<script src="{{asset('ADMIN/js/donhang.js')}}"></script> -->
<!--  -->
<script src="{{asset('ADMIN/js/MyPham.js')}}"></script>
<script src="{{asset('ADMIN/js/thongke.js')}}"></script>
</html>