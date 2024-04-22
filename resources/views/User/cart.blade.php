@extends('UserLayout/layoutuser')

@section('title','Giỏ hàng')

@section('css')
    <link rel="stylesheet" href="{{asset('USER/css/cart.css')}}"> 
    <link rel="stylesheet" href="{{asset('USER/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('USER/css/menu.css')}}">  
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('USER/jd/cart.js')}}">
    <script src="{{asset('USER/js/jquery-3.6.0.min.js')}}"></script>
@endsection
    
@section('content') 
    <div class="baoquatgiohang" style="background-color: #F3F3F3; margin-bottom: 100px;">
        <div class="link-out">
            <div class="link" style="margin-top: 15px">
                <a href="index.html">Trang chủ </a>
                <i class="fas fa-caret-right"></i> Giỏ hàng    
            </div>
            <div class="thongtin">
                Giỏ hàng của bạn
                <a style="text-align: center; text-decoration: none; padding-top: 7px;" class="deleteall" onclick="return confirmdelete('Bạn có chắc muốn xóa tất cả mỹ phẩm trong giỏ hàng?')" 
                href="{{ route('cart.deleteAllItem') }}">
                    Xóa hết giỏ hàng
                </a>
            </div>
            <div class="thongtinsp">
                <div class="chitietsp">
                    <div class="sp">Sản phẩm</div>
                    <div class="giatien">Giá tiền</div>
                    <div class="sl">Số lượng</div>
                    <div class="thanhtien">Thành tiền</div>
                </div>  
                         <!-- HOÁ ĐƠN -->
                <div class="hoadon">
                    <hr style="margin-top: -3px;  border-top: 4px solid #326E51; width: 358px;">
                    <div class="hoadon1">
                        <span>Hoá đơn của bạn</span>
                    </div>
                    <hr style="width: 359px; margin-top: 16px;">
                    <div class="tamtinhhd">
                        <div class="tamtinh1">
                            <p>Tạm tính:</p>
                        </div>
                        <div class="giatien2">
                            <p id="giatien2xx">{{number_format($cart->TinhTongTien1())}}<span class="dong">đ</span></p>
                        </div>
                    </div>
                    <div class="tamtinhhd" style="margin-top: 8px;">
                        <div class="tamtinh1">
                            <p>Giảm giá:</p>
                        </div>
                        <div class="giatien2" style="margin-left: 236px;">
                            <p style="margin-left: -16px;">-0 <span class="dong">đ</span></p>
                        </div>
                    </div>
                    <hr style="width: 359px; margin-top: 16px;">
                    <div class="tamtinhhd" style="margin-top: 11px;">
                        <div class="tamtinh1">
                            <p>Tổng cộng:</p>
                        </div>
                        <div class="giatien2" style="margin-left: 160px;">
                            <p id="giatien2x" style="color: #FF6600;"> {{number_format($cart->TinhTongTien())}}<span class="dong" style="color: #FF6600;">đ</span></p>
                        </div>
                    </div>
                    <div class="tamtinhhd" style="margin-top: 11px;">
                        <div class="tamtinh1">
                            <p>(Đã bao gồm VAT)</p>
                        </div>
                    </div>
                    <div>
                    <a href="/order">
                        <button style="border: 1px solid white; margin-top: 10px; margin-left: 14px; width: 330px; height: 50px; font-size: 20px; color: #F3F3F3; background-color: #FF6600;">Tiến hành đặt hàng</button>
                    </a>
                    </div>
                </div>
                
            </div>
            <div class="listsp">
            @foreach($cart->list() as $cart)
            <div class="sanphamdemo">
                <div class="sp1">
                    <div class="hinhanhsp">
                        <img style="font-size: 15px; margin-top: -2px;" src="{{ asset('uploads/' . $cart['AnhDaiDien']) }}" alt="">
                    </div>
                    <div class="tieude">
                        <span style="margin-left: -10px">Innisfree</span><br>
                        <div class="mota" style="margin-left: -10px;" >
                            <span>{{$cart['TenMP']}}</span>
                        </div>
                        <div class="traitim" style="margin-left: -10px;">
                            <i class="fa-regular fa-heart"></i>
                            Yêu thích 
                            <td class="delete" onclick="return confirmdelete('Bạn có chắc chắn muốn xóa mỹ phẩm này không?')">
                                <a style="text-decoration: none; color: #DC143C;" 
                                href="{{ route('cart.deleteItem', ['MaMP' => $cart['MaMP']]) }}">
                                <i class="fa-solid fa-x" style="padding-right: 10px;"></i>
                                Xóa
                            </a>
                            </td>
                        </div>                            
                    </div>                   
                </div> 
                <div class="giatien1">
                    <div class="giamoi" style="margin-left: 140px;">
                        <p>{{ number_format($cart['GiaBan']) }}<span class="dong">đ</span></p>                                                       
                    </div>
                </div> 
                <div class="sluong" style="margin-left: 90px;">
                    <input type="number" style="   text-align: center; margin-left: 32px; width: 50px; height: 35px; background-color:#F3F3F3; padding-left: 5px; font-size: 16px;" 
                    value="{{$cart['SLTon']}}">
                </div>
                <div class="thanhtien1" id="thanhtien">
                    <p>{{ number_format($cart['GiaBan'] * $cart['SLTon'])}}<span class="dong">đ</span></p>                                                                              
                </div>                 
            </div>
            @endforeach
            
            </div>
            <hr>                                   
        </div>     
    </div>  
    <div class="spdaxem">
        <p style="font-size: 18px; color: rgb(71, 70, 70); padding-top: 50px">Sản phẩm đã xem</p>
        <img style="width: 90px; height: 90px" src="User/Images/sp5.jpg" alt="">
    </div>
@endsection
    