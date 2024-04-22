@extends('AdminLayout/layoutadmin')

@section('title','Trang chủ')

@section('content')
<div class="bodybenphai">
            <div class="welcome-contener">
                <div class="title-welcome" style="display: flex;">
                  <h1>Hi, Xuân Én Trần<img src="Admin/Hinhanh/icons8_heart_1.svg" alt="" style="width: 20px; margin-left: 10px;"></h1>
                  <p>Welcome to Manager Page</p>
                </div>          
                <img class="image-welcome" src="Admin/./Hinhanh/icons8_businesswoman.svg" alt="#">
            </div>

            <div class="tongthu"> 
                <div class="tongsp_dat">
                    <div class="Tieude">
                        <p>Total Order</p>
                    </div>
                    <div class="number">
                        <p>40,869</p>
                        <i class='bx bx-cart'></i>
                    </div>
                    <div class="muiten">
                        <i class='bx bxs-up-arrow-circle'></i>
                        <p>Up from yesterday</p>
                    </div>
                </div>
                <div class="tongsp_ban">
                    <div class="Tieude">
                        <p>Total Sales</p>
                    </div>
                    <div class="number_doanhthu">
                        <p>38,876</p>
                        <i class='bx bxs-cart-add'></i>
                    </div>
                    <div class="muiten">
                        <i class='bx bxs-up-arrow-circle'></i>
                        <p>Up from yesterday</p>
                    </div>
                </div>
                <div class="tongsp_ban">
                    <div class="Tieude">
                        <p>Total Profit</p>
                    </div>
                    <div class="number_loinhuan">
                        <p>$12,289</p>
                        <i class='bx bx-cart'></i>
                    </div>
                    <div class="muiten">
                        <i class='bx bxs-up-arrow-circle'></i>
                        <p>Up from yesterday</p>
                    </div>
                </div>
                <div class="tongsp_ban">
                    <div class="Tieude" style="margin-left: 10px;">
                        <p>Total Return</p>
                    </div>
                    <div class="number_trave">
                        <p>38,876</p>
                        <i class='bx bx-cart-download'></i>
                    </div>
                    <div class="muiten_trave">
                        <i class='bx bx-down-arrow-circle'></i>
                        <p>Down from today</p>
                    </div>
                </div>          
            </div>
            <div class="chitiet">
                <div class=" banhang">
                    <div class="tittle_banhang">
                        <p>Đơn hàng gần đây</p>
                    </div>
                    <div class="chitiet_banhang">
                        <div class="thoigian" >
                            <p>Thời gian</p>
                            <ul style="margin-top: 10px; margin-left: -2px">
                                <li>29-11-2023</li>
                                <li>04-12-2023</li>
                                <li>06-11-2023</li>
                                <li>04-10-2023</li>
                                <li>20-11-2023</li>
                                <li>05-12-2023</li>
                                <li>28-10-2023</li>
                                <li>30-12-2023</li>
                                <li>01-10-2023</li>
                                <li>25-12-2023</li>
                            </ul>
                        </div>
                        <div class="thoigian" style="margin-left: 90px;">
                            <p>Khách hàng</p>
                            <ul>
                                <li>Trịnh Thuỳ Linh</li>
                                <li>Trần Thu Trà</li>
                                <li>Vũ Công Nam</li>
                                <li>Hoàng Phong</li>
                                <li>Nguyễn Huyền</li>
                                <li>Phạm Linh Linh</li>
                                <li>Trương Thị Loan</li>
                                <li>Nguyễn Thu Trang</li>
                                <li>Tạ Hồng Đào</li>
                                <li>Nguyễn Minh Công</li>
                            </ul>
                        </div>
                        <div class="thoigian" style="margin-left: 90px;">
                            <p>Tình trạng</p>
                            <ul>
                                <li>Đang vận chuyển</li>
                                <li>Hoàn hàng</li>
                                <li>Đang vận chuyển</li>
                                <li>Thất lạc hàng</li>
                                <li>Đang vận chuyển</li>
                                <li>Đang vận chuyển</li>
                                <li>Hoàn hàng</li>
                                <li>Đang vận chuyển</li>
                                <li>Đang vận chuyển</li>
                                <li>Hoàn hàng</li>
                            </ul>
                        </div>
                        <div class="thoigian" style="margin-left: 100px;">
                            <p>Tổng tiền</p>
                            <ul>
                                <li>$200</li>
                                <li>$309.21</li>
                                <li>$79</li>
                                <li>$103.45</li>
                                <li>$1000</li>
                                <li>$567</li>
                                <li>$48.98</li>
                                <li>$28.68</li>
                                <li>$283.03</li>
                                <li>$666.20</li>
                            </ul>
                        </div>                  
                    </div>
                    <div class="see_all">
                        <p>Xem tất cả</p>
                    </div>
                </div>
                <div class=" sanpham-banchay">
                    <div class="tittle_banhang">
                        <p>Top 10 Best-Seller</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product20.jpg" alt="">
                        <p>Kem dưỡng da tay</p>
                        <p style="margin-left: 130px;">$100</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product23.jpg" alt="">
                        <p>Tonner dưỡng ẩm</p>
                        <p style="margin-left: 135px;">$280</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product22.jpg" alt="">
                        <p>Toner dưỡng body</p>
                        <p style="margin-left: 128px;">$150</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product24.jpg" alt="">
                        <p>Kem chống nắng</p>
                        <p style="margin-left: 140px;">$980</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product25.jpg" alt="">
                        <p>Mặt nạ nha đam</p>
                        <p style="margin-left: 147px;">$1200</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product27.jpg" alt="">
                        <p>Toner dưỡng da mặt</p>
                        <p style="margin-left: 116px;">$360</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product29.jpg" alt="">
                        <p>Kem dưỡng innisfree</p>
                        <p style="margin-left: 110px;">$450</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product30.jpg" alt="">
                        <p>Mặt nạ giấy</p>
                        <p style="margin-left: 185px;">$3200</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product36.jpg" alt="">
                        <p>Toner cấp ẩm</p>
                        <p style="margin-left: 174px;">$595</p>
                    </div>
                    <div class="sanphams">
                        <img src="Admin/Hinhanh/product38.jpg" alt="">
                        <p>Mặt nạ mật ong</p>
                        <p style="margin-left: 158px;">$355</p>
                    </div>
                </div>
            </div> 
        </div>     
@endsection