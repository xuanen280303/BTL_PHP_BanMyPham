<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Địa chỉ nhận hàng</title>
    <link rel="icon" href="{{asset('USER/Images/logo1.jpg')}}">
    <link rel="stylesheet" href="{{asset('USER/css/order.css')}}">
    <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}">
</head>
<body>
    <header >
        <div class="header_support" style="height: 110px">
            <a href="index.html">
                <img  src="User/Images/logo-new.svg" alt="">
            </a>           
        </div>
    </header>

<form id="orderForm" action="{{ route('order.xuathdb')}}" method="POST">
    @csrf
    <div class="coverorder">
        <div class="tonhat">
            <div class="bentrai">
                <div class="bentren">
                    <div class="thongtin">
                        <span>Thông tin nhận hàng</span>
                    </div>
                    <div class="nharieng">
                        <div>
                            <a style="margin-top: 5px; background-color: #326E51; color: white;">Nhà riêng</a>
                        </div>
                    </div>
                    <div class="thongtin" style="margin-top: 5px;">
                        <span>Ghi chú</span>
                    </div>
                    <div>
                        <textarea placeholder=" Nhập ghi chú (nếu có)" style="width: 615px; height: 40px; margin-top: 5px; border-radius: 5px;"></textarea>
                    </div>
                </div>

                <div class="vanchuyen">
                    <div class="thongtin">
                        <span>Phương thức thanh toán</span>
                    </div>
                    <div class="ghnhanh">
                        <input type="radio" id="vanchuyen" name="ghang" value="vch">
                        <label for="vch" style="color: #141414; font-size: 19px;">Thanh toán khi nhận hàng (COD)</label><br>
                    </div>
                    <div class="ghnhanh">
                        <input type="radio" id="giaohang" name="ghang" value="giaohang">
                        <label for="giaohang" style="color: #FF6600; font-size: 19px; margin-top: 20px;">Thanh toán qua thẻ ngân hàng<br></label><br>                       
                    </div>                                    
                </div>

                <!-- Nhập thông tin người nhận -->
                    <div class="benduoi">
                        <div class="thongtin">
                            <span>Thông tin khách hàng</span>
                        </div>
                        <div>
                            <textarea name = "HoTenKH" placeholder="  Nhập tên người nhận " style="width: 615px; height: 40px; margin-top: 5px; border-radius: 10px;"></textarea>
                        </div>
                        <div>
                            <textarea name = "SDTKH" placeholder="  Nhập số điện thoại người nhận" style="width: 615px; height: 40px; margin-top: 5px; border-radius: 10px;"></textarea>
                        </div>
                        <div>
                            <textarea name = "DiaChiKH" placeholder="  Nhập địa chỉ người nhận" style="width: 615px; height: 40px; margin-top: 5px; border-radius: 10px;"></textarea>
                        </div>
                        <div class="thongtin" style="margin-top: 5px; font-size: 24px;">
                            <span>Lưu Ý</span>
                            <ul>
                                <li>Không xuất hóa đơn cho các đơn hàng có sử dụng các loại phiếu quà tặng (Got it)</li>
                            </ul>
                        </div>
                    </div>                           
            </div>

            <div class="benphai"> 
                <div class="donhang">
                    <span>Đơn hàng</span>
                </div>

                <input type="hidden" name="TongTienHDB" value="{{ $cart->TinhTongTien() }}">

                <!-- Hiển thị sản phẩm từ cart -->
                @foreach($cart->list() as $item)
                <input type="hidden" name="MaMP[]" value="{{$item['MaMP']}}">
                <input type="hidden" name="GiaBan[]" value="{{$item['GiaBan']}}">
                <input type="hidden" name="SLTon[]" value="{{$item['SLTon']}}">
                <input type="hidden" name="TongTien[]" value="{{$item['GiaBan'] * $item['SLTon']}}">
                <div class="sp1">
                    <div class="hinhanhsp">
                        <img style="width: 60px; height: 60px;" src="{{ asset('uploads/' . $item['AnhDaiDien']) }}" alt="">
                    </div>
                    <div class="tieude">
                        <span style="color: #FF6600;">Innisfree</span><br>
                        <div class="mota">
                            <div>
                                <span>{{$item['TenMP']}}</span>
                            </div>
                            <div>
                                <span style="float: right; color: #FF6600; " >SL: {{$item['SLTon']}}</span>
                            </div>
                        </div>                        
                    </div>                   
                </div>
                @endforeach
                
                <hr style="width: 425px; margin-top: 10px;">
                <div class="tamtinh" style="margin-top: -20px;">
                    <div class="tamtinh1">
                        <p style="font-size: 19px;">Phí vận chuyển:</p>
                    </div>
                    <div class="giatien" style="margin-left: 240px;">
                        <p style="font-size: 19px;">30,000 <span class="dong">đ</span></p>
                    </div>
                </div>
                <div class="tamtinh" style="margin-top: -20px;">
                    <div class="tamtinh1">
                        <p style="font-size: 19px;">Giảm giá:</p>
                    </div>
                    <div class="giatien" style="margin-left: 325px;">
                        <p style="font-size: 19px;">-0 <span class="dong">đ</span></p>
                    </div>
                </div>
                <hr style="width: 425px; margin-top: 5px;">
                <div class="thanhtienn">
                    <div class="tieude">
                        <p style="margin-left: 5px;">Thành tiền</p>
                    </div>
                    <div class="tien" style=" margin-top: 35px; margin-left: -50px;">
                        {{ number_format($cart->TinhTongTien()) }} <span class="dong">đ</span></p>
                    </div>
                </div>
                <div class="nhacnho">
                    <p>Đã bao gồm VAT, phí đóng gói, phí vận chuyển và các chi phí khác vui lòng xem chính sách vận chuyển</p>
                </div>
                <div>
                    <button id="dathang" style="border: 1px solid white; margin-left: 20px; width: 435px; height: 50px; font-size: 24px; color: #F3F3F3; background-color: #326E51; cursor: pointer;">ĐẶT HÀNG</button>
                </div>  
            </div>
        </div>
    </div> 
</form> 
</body>
</html>