@extends('UserLayout/layoutuser')

@section('title','Danh mục')

@section('css')
    <link rel="stylesheet" href="{{asset('USER/css/menu.css')}}"> 
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('USER/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('USER/css/category.css')}}"> 
@endsection
    
@section('content') 
    <div class="link-out">
        <div class="link" style="margin-top: 15px">
            <a href="index.html">Trang chủ </a>
            <i class="fas fa-caret-right"></i> Sức khoẻ-làm đẹp
            <i class="fas fa-caret-right"></i> Chăm Sóc Tóc Và Da Dầu
            <i class="fas fa-caret-right"></i> Dưỡng Tóc
            <i class="fas fa-caret-right"></i> Serum / Dầu Dưỡng Tóc
        </div>
    </div>

    <div style="width: 100%; height: 95px;">
        <img src="/User/Images/bannertoc.jpg" style="width: 98%; height: 92px; margin-top: -5px; margin-left: 14px;" alt="">
    </div>

    <!-- 40 sản phẩm -->
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

                <!-- Hiển thị mỹ phẩm theo danh mục -->
                <div class="products">
                    @foreach($lmp as $mp)
                    <div class="product-sanpham">
                        <a href="/myphams/{{ $mp['MaMP'] }}/show">
                            <img src="{{ asset('uploads/' . $mp['AnhDaiDien']) }}" alt="" class="sanpham-img">
                        </a>  
                        <div class="sanpham-price">
                            <div class="sanpham-giagoc">
                                <p>{{ number_format($mp['GiaBan']) }}<span class="dong">đ</span></p>                            
                            </div>
                            <div class="sanpham-price-old">
                                <p>{{ number_format($mp['GiaGoc']) }}<span class="dong">đ</span></p>    
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
                                623
                            </div>
                        </div>      
                        <div class="thanh_bar-line">
                            <div class="time_deal_process">
                                <span style="width: 80%" class="progress_bar_fill active"></span>
                            </div>
                            <div class="sanpham-phantram">
                                9%                              
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
    </div>
@endsection

