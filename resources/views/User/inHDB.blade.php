<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="color: transparent;">IN HOÁ ĐƠN BÁN</title>
    <link rel="icon" href="{{asset('USER/Images/logo1.jpg')}}">
    <link rel="stylesheet" href="{{asset('USER/css/inHDB.css')}}">
</head>
<body>        
    <div class="shop">
        <div class="shop1">
            <img  src="{{asset('USER/Images/logo1.jpg')}}" alt="">
            <h1 style="margin-left: 185px; margin-top: 15px;">HASAKI VIỆT NAM</h1> 
        </div>  
        <div class="le" style="font-size: 18px; margin-left: 280px; margin-top: -68px; " >Địa chỉ: Số 1 Quan Nhân, Thanh Xuân, Hà Nội </div>
        <div class="le" style="font-size: 18px; margin-left: 290px; " >Số điện thoại: 0987.233.625 - 035.831.2793 </div>
    </div>
    <section class="container">
        <h1 style="margin-top: 50px;">HÓA ĐƠN BÁN HÀNG</h1>
        <p style="margin-left: 590px; margin-top: -15px; " >Mã số thuế: 123456</p>
        <p>Thời gian: {{$hdb->NgayTao}}</p>
    </section>
    <div>
        <button style="margin-top: -10px;"  class="print" onclick="printInvoice()">IN HOÁ ĐƠN</button>
    </div>

    <div class="le dam" style="margin-top: -20px;" >Họ tên khách hàng: {{$kh->HoTenKH}}</div>
    <div class="le">Số điện thoại: {{$kh->SDTKH}}</div>
    <div class="le">Địa chỉ khách hàng: {{$kh->DiaChiKH}}</div>
    <div class="le">Mã nhân viên bán hàng: 1</div>
    <div class="kethop">
        <p>Hình thức thanh toán: Chuyển khoản</p>
        <p style="margin-left: 325px;">Số tài khoản: 6888828032003</p>
    </div>
    <table style="margin-top: 30px;">
        <tr style="background: #326E51; color: #fff;">
            <th>STT</th>
            <th>Tên mỹ phẩm</th>
            <th>Giá bán</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <?php
        $index = 1
        ?>
        @foreach($cthdb as $cthdb)
        <tr>
            <td>{{$index++}}</td>
            <td>
                {{$cthdb['TenMP']}}
            </td>
            <td>{{number_format($cthdb['GiaBan'])}} VNĐ</td>
            <td>{{$cthdb['SLBan']}}</td>
            <td>{{number_format($cthdb['GiaBan'] * $cthdb['SLBan'])}} VNĐ</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4" class="dam">Tổng tiền hóa đơn bán</td>
            <td class="dam">{{number_format($hdb->TongTien)}} VNĐ</td>
        </tr>
    </table>
    <div style="margin-top: 20px; margin-left: 670px; font-size: 20px;">
        <p class="dam" style="color: red; text-decoration: underline dotted">
        Tổng tiền: {{number_format($hdb->TongTien)}} VNĐ</p>
        <p class="dam" style="margin-top: 10px; color: red; margin-left: 30px;"></p>
    </div>
    <div class="kethop1">
        <h5 style="margin-left: 165px;">KHÁCH HÀNG</h5>
        <h5 style="margin-left: 376px;">NGƯỜI BÁN HÀNG</h5>
    </div>
    <div class="kethop2">
        <p style="margin-left: 180px;">(Ký tên)</p>
        <p style="margin-left: 432px;">(Ký tên)</p>
    </div>
    <div class="kethop1">
        <p style="margin-left: 150px; margin-top: -22px;">{{$kh->HoTenKH}}</p>
        <p style="margin-left: 360px; margin-top: -22px;">Hasaki Việt Nam</p>
    </div>
</body>
<script>
    function printInvoice() {
        window.print();
    }
</script>
</html>