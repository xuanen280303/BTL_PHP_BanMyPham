@extends('UserLayout/layoutuser')

@section('title','Trang chủ')

@section('css')
    <link rel="stylesheet" href="{{asset('USER/css/menu.css')}}">  
    <link rel="stylesheet" href="User/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="User/fontawesome-free-6.4.0-web/css/all.min.css"> 
    <script src="{{asset('USER/js/slider.js')}}"></script>
    <link rel="stylesheet" href="{{asset('USER/css/index.css')}}">
    <script src="{{asset('USER/js/index.js')}}"></script>
    <script src="{{asset('USER/js/menu.js')}}" ></script>
@endsection
    
@section('content') 

    <!-- Brand -->
    <div class="brand">
        <div class="thuonghieu">
            <p><i>innisfree</i></p>
        </div>
        <div class="info">
            <div class="tieude_brand">
                <p>innisfree</p>
                <div class="gianhang">
                    <p>Gian hàng chính hãng</p>
                </div>
            </div>
        </div>  
        <div class="tieude_brand">
            <p style="margin-top: 48px; font-size: 15px; margin-left: 10px;">4505 theo dõi</p>
        </div> 
        <div class="tieude_brand">
            <div class="gianhang" style="width: 110px; height: 28px; margin-left: 40px; font-size: 18px; margin-top: 35px; font-weight: bold;">
                <p>+ Theo dõi</p>
            </div>
        </div>
    </div>

    <!-- SLIDER -->
    <div class="banner_main">
        <div class="slider">
            <i class="fa fa-angle-left fa-xl slider-prev" style="color: #ffffff"></i>
            <ul class="slider-dots">
              <li class="slider-dot-item active" data-index="0"></li>
              <li class="slider-dot-item" data-index="1"></li>
              <li class="slider-dot-item" data-index="2"></li>
              <li class="slider-dot-item" data-index="3"></li>
              <li class="slider-dot-item" data-index="4"></li>     
            </ul>

            <div class="slider-wrapper">
              <div class="slider-main">
                <!-- item 1 -->
                <div class="slider-item">
                  <div style="height: 100%" class="congnghe-khunganh">
                    <img src="User/Images/dot6.jpg" alt="#" />
                  </div>
                </div>
      
                <!-- item 2 -->
                <div class="slider-item">
                  <div style="height: 100%" class="congnghe-khunganh">
                    <img src="User/Images/dot3.jpg" alt="#" />
                  
                  </div>
                </div>
      
                <!-- item 3 -->
                <div class="slider-item">
                  <div style="height: 100%" class="congnghe-khunganh">
                    <img src="User/Images/dot4.jpg" alt="#" />
                   
                    </div>
                  </div>
        
                  <!-- item 4 -->
                  <div class="slider-item">
                    <div style="height: 100%" class="congnghe-khunganh">
                        <img src="User/Images/dot8.jpg" alt="#" />
                     
                    </div>
                  </div>
        
                  <!-- item 5 -->
                  <div class="slider-item">
                    <div style="height: 100%" class="congnghe-khunganh">
                      <img src="User/Images/dot7.jpg" />
                   
                    </div>
                  </div>
          
        </div>
        <i class="fa-solid fa-angle-right fa-xl slider-next" style="color: #ffffff"></i>
      </div>
    </div>
    
    <!-- Ảnh bên phải slider -->
    <div class="anhbenphai">
        <img src="User/Images/phaitren.jpg" style="width: 480px; height: 145px;" alt="">
        <img src="User/Images/phaiduoi.jpg" style="width: 480px; height: 145px; margin-top: 5px;" alt="">
    </div>

    <!-- END ------------------------------------------------------------SLIDER -->
    </div>

    <!------------------------------------ DANH MỤC ------------------------------>
    <div class="danhmucsanpham">
        <div class="tendanhmuc">Danh mục</div>
        <div class="sanphams">
            @foreach($lmp as $loaiMyPham)
            <div class="sanpham"style="background-color: #F9B294;">
                <div class="khunganhsp">
                    <a href="/loaimyphams/{{ $loaiMyPham['MaLoaiMP'] }}/show"><img src="{{ asset('uploads/' . $loaiMyPham['AnhDaiDien']) }}" alt="no"></a>           
                </div>
                <div class="tensanpham">{{$loaiMyPham['TenLoaiMP']}}</div>
            </div>
            @endforeach
        </div>
    </div>

    <!---------------------------- 40 SẢN PHẨM --------------------------------------->
    <div class="cover_products">
            <!-- Menu dọc -->
            <div class="menu-con"> 
                <div>
                    <div class="tieude1">
                        Thương hiệu
                    </div>
                    <div class="content1">Innisfree (50)</div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Vấn đề về da
                    </div>
                    <div class="content1">Da dầu, lỗ chân lông to (9) </div>
                    <div class="content1">Da sạm, xỉn, không đều màu (6) </div>
                    <div class="content1">Da khô, mất nước (3) </div>
                    <div class="content1">Da mụn (2) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Size
                    </div>
                    <div class="content1">Fullsize (32) </div>
                    <div class="content1">Một miếng (10) </div>
                    <div class="content1">Bộ sản phẩm (2) </div>
                    <div class="content1">Minisize (1) </div>
                    <div class="content1">Hộp (1) </div>
                    <div class="content1">Chai vừa(200ml-400ml) (1) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Thành phần
                    </div>
                    <div class="content1">Trà xanh (11) </div>
                    <div class="content1">Retinol (3) </div>
                    <div class="content1">Mật ong (2) </div>
                    <div class="content1">Vật lý (2) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Loại da
                    </div>
                    <div class="content1">Da thường/Mọi loại da (25) </div>
                    <div class="content1">Da dầu, hỗn hợp dầu (8) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Công dụng
                    </div>
                    <div class="content1">Dưỡng ẩm (8) </div>
                    <div class="content1">Làm sáng da (6) </div>
                    <div class="content1">Làm sạch da (6) </div>
                    <div class="content1">Trang điểm môi (3) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Tông màu
                    </div>
                    <div class="content1">Tự nhiên (3) </div>
                    <div class="content1">Nâu (3) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Loại sản phẩm
                    </div>
                    <div class="content1">Mặt nạ giấy (3) </div>
                    <div class="content1">Sữa rửa mặt (4) </div>
                    <div class="content1">Kem dưỡng (8) </div>
                    <div class="content1">Toner (2) </div>
                    <div class="content1">Kem chống nắng (10) </div>
                    <div class="content1">Son thỏi (100) </div>
                    <div class="content1">Cushion (30) </div>
                    <div class="content1">Serum (35) </div>
                    <div class="content1">Tẩy trang (20) </div>
                    <div class="content1">Phấn phủ (8) </div>
    
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Kết cấu
                    </div>
                    <div class="content1">Dạng thỏi (3) </div>
                    <div class="content1">Dạng miếng (4) </div>
                    <div class="content1">Dạng chì (5) </div>
                    <div class="content1">Tinh chất (2) </div>
                    <div class="content1">Dạng nước (6) </div>
                    <div class="content1">dạng gel(10) </div>
                    <div class="content1">Dạng kem (3) </div>
                    <div class="content1">Dạng bột (5) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Giới tính
                    </div>
                    <div class="content1">Nam & Nữ (50) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Đặc tính
                    </div>
                    <div class="content1">Dạng lì (9) </div>
                    <div class="content1">Có mùi (3) </div>
                    <div class="content1">2 in 1 (1) </div>
                    <div class="content1">Có màu (1) </div>
                    <div class="content1">Chống nước/Lâu trôi (1) </div>
                    <div class="content1">Ban ngày (1) </div>
                </div>
                <div>
                    <div class="tieude1" style="margin-top: 30px;">
                        Xuất xứ thương hiệu
                    </div>
                    <div class="content1">Hàn Quốc (50) </div>
                </div>
            </div>           
            <div class="cover_product">
                <div class="sapxep">
                    <span class="sapxep__label">
                        Sắp xếp
                    </span>
                    <button class="btn btn--primary sapxep__btn1">Mới nhất</button>
                    <button class="btn sapxep__btn2">Bán chạy</button>
                    <button class="btn btn--primary sapxep__btn1" style="width: 120px;">Giá thấp đến cao</button>
                    <button class="btn sapxep__btn1" style="width: 120px;">Giá cao đến thấp</button>
                    <div class="sapxep__page">
                        <span class="sapxep__page-num">
                            <span class="sapxep__page-begin">1</span>/
                            <span class="sapxep__page-begin">10</span>
                        </span>
                        <div class="sapxep__page-control">
                            <a href="#" class="sapxep__page-btn sapxep__page-btn--disable">
                                <i class="fas fa-angle-left sapxep__page-icon"></i>
                            </a>
                            <a href="#" class="sapxep__page-btn">
                                <i class="fas fa-angle-right sapxep__page-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SẢN PHẨM -->         
                <div class="products">
                    <!-- Sản phẩm 1 -->
                    @foreach($mp as $mp)
                    <div class="product-sanpham">
                        <a href="/myphams/{{ $mp['MaMP'] }}/show">
                            <img src="{{ asset('uploads/' . $mp['AnhDaiDien']) }}" alt="" class="sanpham-img">  
                        </a>
                        <div class="sanpham-price">
                            <div class="sanpham-giagoc">
                                <p>{{ number_format($mp['GiaBan']) }}<span class="dong">đ</span></p>            
                            </div>
                            <div class="sanpham-price-old">
                                <p>{{ number_format($mp['GiaGoc']) }} <span class="dong">đ</span></p>    
                            </div>
                            <div>
                                <button class="sanpham-icon">23%</button>
                            </div>
                        </div>  
                        <div class="sanpham-tittle">
                            <span>innisfree</span>
                        </div> 
                        <div class="sanpham-content">
                            <p>{{$mp['TenMP']}}</p>
                        </div> 
                        <div class="xephang">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <div class="xephang-number">
                                (6) | 
                                <i class="fa fa-shopping-cart"></i>
                                {{$mp['SLTon']}}
                            </div>
                        </div>      
                        <div class="thanh_bar-line">
                            <div class="time_deal_process">
                                <span style="width: 80%" class="progress_bar_fill active"></span>
                            </div>
                            <div class="sanpham-phantram">
                                34%                              
                            </div>
                        </div> 
                        <div class="sanpham-combo">
                            Bill 399k tặng Bộ sản phẩm dưỡng ẩm da Green...
                        </div>      
                    </div>
                    @endforeach
                </div>
            </div>
    </div>       
@endsection
    
