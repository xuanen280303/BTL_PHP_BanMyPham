<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('USER/Images/logo1.jpg')}}">
    <script src="{{asset('USER/js/jquery-3.6.0.min.js')}}"></script>
    @yield('css')

</head>
<body>
    <!-- Header -->
    <div class="app">
        <!-- Topbar -->
        <div style="height: 50px; width: 100%; margin:auto;">
			<img  style="width: 100%;" src="{{asset('USER/Images/hinhnen1.jpg')}}" alt="#">
		</div>
        <!-- Header -->
        <header class="header">
            <nav class="headerdangnhap">              
                <ul style="margin-left: 1100px;">
                    <li class="headerdangnhap">
                        <a href="/logincustomer" class="dangnhap">
                            <i class="fa-regular fa-circle-user"></i>
                            Đăng nhập								 
                        </a>
                    </li>
                    <li class="headerdangnhap">
                        <a href="/support" class="dangnhap">
                            <i class="far fa-question-circle"></i>
                            Trợ giúp
                        </a>                     
                    </li>	
                    <li class="headerdangnhap">
                        <img src="{{asset('USER/Images/Avt.jpg')}}" class="header-img" style="margin-top: 3px;">
                        <span class="dangnhap" style="margin-top: 7px;">Trần Thị Xuân Én</span>
                    </li>		
                </ul>
            </nav>
            <!-- Begin Search -->
            <div class="header-with-search">
                <div class="header_logo">
                    <a href="#">
                        <img class="header_logo-img" src="{{asset('USER/Images/logo-new.svg')}}" alt="">
                    </a>
                </div>
                <form action="#">
                    <div style="display: flex;" class="Over-search">
                        <p>Kem chống nắng</p>
                        <p>Tẩy trang</p>
                        <p>Toner</p>
                        <p>Sữa rửa mặt</p>
                        <p>Tẩy tế bào chết</p>
                        <p>Retinol</p>
                    </div>
                    <div class="header_search">
                        <div class="nuttimkiem">								
                            <input type="text" class="otimkiem" placeholder="Tìm sản phẩm, thương hiệu bạn mong muốn...">
                        </div>	
                        <button class="timkiem">
                            <i class="fas fa-search icontimkiem"></i>
                        </button>	
                    </div>
                </form>
                
                <!--end search -->

                <!-- cart -->
                <div class="giohang">
                    <div class="giohang1">
                        <span class="soluongsp">{{$cart->SLGioHang()}}</span>
                        <a href="/cart" title="Giỏ hàng"><i class="fas fa-shopping-cart iconcart"></i></a>  
                    </div>
                </div>
                <ul id="main-menu">
                    <li><a href="">High-end</a>
                        <ul class="sub-menu">
                            <li><a href="">Chăm sóc da mặt</a></li>
                            <li><a href="">Trang điểm</a></li>
                            <li><a href="">Chăm sóc tóc</a></li>
                            <li><a href="">Chăm sóc cơ thể</a></li>
                        </ul>
                    </li>
                    <li><a href="">Da mặt</a>
                        <ul class="sub-menu">
                            <li><a href="">Tẩy trang</a>
                                <ul class="sub-menu">
                                    <li><a href="">Garnie</a></li>
                                    <li><a href="">Loreal</a></li>
                                    <li><a href="">SVR</a></li>
                                </ul>
                            </li>
                            <li><a href="">Sữa rửa mặt</a></li>
                            <li><a href="">Mặt nạ</a></li>
                            <li><a href="">Serum</a></li>
                        </ul>
                    </li>
                    <li><a href="">Trang điểm</a>
                        <ul class="sub-menu">
                            <li><a href="">Kem nền</a></li>
                            <li><a href="">Son thỏi</a>
                                <ul class="sub-menu">
                                    <li><a href="">3CE</a></li>
                                    <li><a href="">MAYBELINE</a></li>
                                    <li><a href="">Background</a></li>
                                </ul>
                            </li>
                            <li><a href="">Mascara</a></li>                          
                            <li><a href="">Phấn phủ</a></li>
                        </ul>
                    </li>                 
                    <li><a href="">Tóc</a>
                        <ul class="sub-menu">
                            <li><a href="">Dầu gội</a></li>
                            <li><a href="">Dầu xả</a></li>
                            <li><a href="">Dưỡng tóc</a></li>
                            <li><a href="">Thuốc nhuộm tóc</a></li>
                        </ul>
                    </li>
                    <li><a href="">Cơ thể</a>
                        <ul class="sub-menu">
                            <li><a href="">Sữa tắm</a></li>
                            <li><a href="">Muối tắm</a></li>
                            <li><a href="">Dưỡng ẩm</a></li>
                            <li><a href="">Kem tan mỡ</a></li>
                            <li><a href="">Tẩy tế bào chết</a></li>
                            <li><a href="">Lăn khử mùi</a></li>
                        </ul>
                    </li>
                    <li><a href="">Cá nhân</a>
                        <ul class="sub-menu">
                            <li><a href="">Gel rửa tay</a></li>
                            <li><a href="">Mặt nạ xông hơi</a></li>
                            <li><a href="">Khẩu trang</a></li>
                            <li><a href="">Kem đánh răng</a></li>
                            <li><a href="">Chỉ nha khoa</a></li>
                            <li><a href="">Nước xúc miệng</a></li>
                        </ul>
                    </li>
                    <li><a href="">Nước hoa</a>
                        <ul class="sub-menu">
                            <li><a href="">Laura Anna</a></li>
                            <li><a href="">Foelie</a></li>
                            <li><a href="">Malissa</a></li>
                            <li><a href="">Pinker Bell</a></li>
                            <li><a href="">Versace</a></li>
                            <li><a href="">Buberry</a></li>
                        </ul>
                    </li>
                </ul>
            </div>        											         
        </header>		
    </div>  
    
    <!-- Thanh điều hướng -->
    <div style="display-flex">
		<nav class="thanhngang">
			<ul>
				<li>HASAKI DEALS</li>
				<li>HOT DEALS</li>
				<li>THƯƠNG HIỆU</li>
				<li>HÀNG MỚI VỀ</li>
				<li>BÁN CHẠY</li>
				<li>CLINIC & SPA</li>
			</ul>
			 <div class="tracuu">
				<ul style="right: 900px;">
					<li>Tra cứu đơn hàng</li>
				 </ul>
			 </div>			
		</nav>		
	</div>
     
    <!-- Brand thương hiệu -->
    @yield('content')

    <!-- SLIDER -->
 
    <!-- Ảnh bên phải slider -->
 

    <!-- END ------------------------------------------------------------SLIDER -->

    <!------------------------------------ DANH MỤC ------------------------------>

    <!---------------------------- 40 SẢN PHẨM --------------------------------------->

    <!-- Footer -->
    <section class="footer">
        <div class="footer-in">
            <div class="cot-1">
                <div class="tieude2">
                    Hỗ Trợ khách Hàng
                </div>
                <div class="content0">Hotline: 1800 6324</div>
                <div class="content2">(miễn phí, 08-22h kể cả T7, CN)</div>
                <div class="content2">Các câu hỏi thường gặp</div>
                <div class="content2">Gửi yêu cầu hỗ trợ</div>
                <div class="content2">Hướng dẫn đặt hàng</div>
                <div class="content2">Phương thức thanh toán</div>
                <div class="content2">Phương thức vận chuyển</div>
                <div class="content2">Chính sách đổi trả</div>
            </div>
            <div class="cot-2">
                <div class="tieude2">
                    Về hasaki.vn
                </div>
                <div class="content2">Giới thiệu Hasaki.vn</div>
                <div class="content2">Tuyển dụng</div>
                <div class="content2">Chính sách bảo mật</div>
                <div class="content2">Điều khoản sử dụng</div>
                <div class="content2">Liên hệ</div>
            </div>
            <div class="cot-3">
                <div class="tieude2">
                    Hợp tác & liên kết
                </div>
                <div class="content2">Kênh người bán</div>
                <div class="content2">https://hasaki.vn/spa.html</div>
                <div class="content2">Hasaki cẩm nang</div>
                <div class="media-icons">
                    <a href="https://www.facebook.com/Hasaki.vn"></a>
                    <img src="User/Images/fb.svg" alt="">
                    <a href="https://www.instagram.com/hasakibeauty"></a>
                    <img src="User/Images/instagram.svg" alt="">
                </div>
                <div class="tieude2">
                    Thanh toán
                </div>
                <div class="media-icons">
                    <img src="User/Images/card.svg" alt="">
                    <img src="User/Images/visa.svg" alt="">
                    <img src="User/Images/atm.svg" alt="">
                </div>
            </div>
            <div class="cot-4">
                <div style="font-size: 18px;">
                    Cập nhật thông tin khuyến mãi
                </div>
                <input type="text" style="width: 190px; height: 30px; border: 0.5px solid gray; margin-top: 5px; " placeholder="Email của bạn">
                <label>
                    <input type="radio" name="gender" value="male">
                    <span class="radio"></span>
                    Nam
                </label>
                <label>
                    <input type="radio" name="gender" value="female">
                    <span class="radio"></span>
                    Nữ
                </label>
                <button class="btn-dangky">Đăng ký</button>
                <div class="tieude1" style="margin-top: 20px; color: #fff; font-size: 15px">
                    Tải ứng dụng
                </div>
                <div class="footer4-hinhanh">
                    <img src="User/Images/qr_download_app.svg" style="width: 100px;" alt="">
                <div class="footer4-hinhanh_anhphu">
                <div>                           
                    <img src="User/Images/img_app_store.svg" style="width: 100px;" alt="">
                </div>
                    <img src="User/Images/img_google_play.svg" style="width: 100px;" alt="">
                </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>