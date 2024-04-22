@extends('AdminLayout/layoutadmin')

@section('title','Thống kê')

@section('content')
        <div class="bodybenphai"> 
            <div class="headerthongke">
                <div style="display: flex;">
                  <p style="font-size: 22px;">THỐNG KÊ</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_Circle_Chart.svg" alt="#">
            </div>

            <div class="tongquatheader"> 
                <div class="doanhthu" style="background-color: #01A6D6; width: 220px;">
                    <div class="hinhanh">
                        <img src="Admin/Hinhanh/icons8_Money_Bag_Pounds_1.svg" alt="">
                    </div>                  
                    <div class="tieude">
                        <p style="margin-top: 15px;">Doanh thu</p>
                        <p style="margin-top: 3px;">283.000.000đ</p>
                    </div>
                </div>
                <div class="doanhthu" style="background-color: #59AF6D; width: 220px;">
                    <div class="hinhanh">
                        <img src="Admin/Hinhanh/icons8_Create_Order.svg" alt="">
                    </div>                  
                    <div class="tieude">
                        <p style="margin-top: 15px;">Đơn hàng nhập: 500</p>
                        <p style="margin-top: 3px;">Mỹ phẩm nhập: 825</p>
                    </div>
                </div>
                <div class="doanhthu" style="background-color: #326E51; width: 220px;">
                    <div class="hinhanh">
                        <img src="Admin/Hinhanh/icons8_purchase_order.svg" alt="">
                    </div>                  
                    <div class="tieude">
                        <p style="margin-top: 15px;">Đơn hàng đặt: 200</p>
                        <p style="margin-top: 3px;">Mỹ phẩm bán: 250</p>
                    </div>
                </div>
                <div class="doanhthu" style="background-color: #991B26; width: 220px;">
                    <div class="hinhanh">
                        <img src="Admin/Hinhanh/icons8_replace.svg" alt="">
                    </div>                  
                    <div class="tieude">
                        <p style="margin-top: 15px;">Đơn hoàn trả</p>
                        <p style="margin-top: 3px;">12</p>
                    </div>
                </div>         
            </div>

            <div class="luachon">
                <label for="selectOption">Chọn loại thống kê:</label>
                <select id="selectOption" onchange="showChart()">
                    <option value="" disabled selected>Chọn loại thống kê</option>
                    <option value="option1">Số lượng mỹ phẩm bán được</option>
                    <option value="option2">Số lượng mỹ phẩm tồn trong kho</option>
                    <option value="option3">Doanh thu theo tuần</option>
                </select>           
            </div>
            <div style="width: 90%; margin-left: 90px; margin-top: 30px; height: 500px;">
                <canvas id="myChart" width="1350" height="530" style="display: block; box-sizing: border-box; height: 500px; width: 1000px;"></canvas>
            </div>          
        </div>     
@endsection