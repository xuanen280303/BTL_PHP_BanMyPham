@extends('UserLayout/layoutuser')

@section('title','Tin tức')

@section('css')  
    <link rel="stylesheet" href="{{asset('USER/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('USER/css/menu.css')}}"> 
    <link rel="stylesheet" href="{{asset('USER/css/cart.css')}}">    
    <link rel="stylesheet" href="{{asset('USER/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('USER/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('USER/css/tintuc.css')}}">
    <script src="{{asset('USER/css/input.js')}}"></script>
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}"/>
    <script src="{{asset('USER/js/jquery-3.6.0.min.js')}}"></script>
@endsection
    
@section('content')
<div class="container grid wide">
            <div class="new_title">
                <ul class="breadcrumb title-h2">
                  <li class="breadcrumb-item">
                    <a href="" title="Trang chủ">Trang chủ</a>
                  </li>
        
                  <li class="breadcrumb-item">
                    <a href="" title="Tin tức">Tin tức</a>
                  </li>
                </ul>
            </div>

            <div class="new__product">
                <div class="row new__product-item-wrapper">
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp1.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="" style="width: 100%;">
                                <img src="User/Images/sp7.png" alt="" class="new__product-img">
                            </a>
                        </div>

                        <h4 class="title-h4">
                            <a href="" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Mẹo để luôn trẻ trung và tràn đầy sức sống.</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            03/05/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="">Nếu tiêu thụ hàng ngày lượng vitamin C là 75 mg, hoặc nhiều hơn, tùy thuộc vào độ tuổi và cân nặng của bạn, sẽ giúp ngăn chặn các nếp nhăn hình thành.</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp8.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp9.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp10.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp12.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp15.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp16.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                    <div class="new__product-item col l-4 m-4 c-6">
                        <div class="new__product-img-wrapper">
                            <a href="./chitiettintuc.html" style="width: 100%;">
                                <img src="User/Images/sp12.png" alt="" class="new__product-img">
                            </a>
                        </div>
                        <h4 class="title-h4">
                            <a href="./chitiettintuc.html" title="Mua đèn led trang trí TPHCM tốt nhất ở đâu?">Món quà tặng đắt nhất thế giới ngày 8/3</a>
                        </h4>
                        <div class="calendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            05/03/2024
                        </div>
                        <div class="product__title">
                            <div class="product__title-name">
                                <a href="./chitiettintuc.html">Quà tặng cho phái đẹp luôn là vấn đề muôn thủa, đặc biệt như trong dịp 8/3 đang đến gần. Người ta có thể thể tặng nhau đất trên mặt trăng, hay đơn giản chỉ là những món quà nho nhỏ chứa đựng tình cảm, thậm chí đôi khi chỉ là một lời chúc ngọt ngào..</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="page col c-12">
                <ul class="pagination">
                    <li class="page-item active">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="" rel="noindex,nofollow">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="" rel="noindex,nofollow">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="" rel="noindex,nofollow">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="" rel="noindex,nofollow">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="" rel="noindex,nofollow">6</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="" rel="noindex,nofollow">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="" rel="noindex,nofollow">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>       
@endsection