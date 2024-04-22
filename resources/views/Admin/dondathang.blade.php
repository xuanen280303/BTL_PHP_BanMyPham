@extends('AdminLayout/layoutadmin')

@section('title','Quản lý đơn hàng đặt')

@section('content')
        <div class="bodybenphaimp" style="width: 87.5%">
            <div class="headerbaiviet" style="display: flex; width: 95.5%">
                <div>
                    <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ ĐƠN HÀNG ĐẶT</p>
                </div>          
                    <img class="imgheader" src="Admin/Hinhanh/icons8_buy.svg" alt="#">
                </div>
            <div class="danhsach-mp" style="margin-top:70px margin-left:-1200px">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px; font-size: 30px;"><i class="fa-solid fa-list-ul"></i> Danh sách đơn hàng đặt</h3>
                </div>
                <div class="search">
                    <input id="timkiemtt" type="text" placeholder="Nhập mã đơn hàng mà bạn muốn tìm kiếm..." style="width: 1245px;">
                    <button onclick="timKiem()"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-đh" style="width: 1280px; margin-top: 30px; margin-left: 20px;">
                    <thead>
                        <tr style="font-weight: bold; height: 40px;">
                            <th></th>
                            <th>STT</th>
                            <th>Mã đơn hàng đặt</th>
                            <th>Mã mỹ phẩm</th>
                            <th>Tên mỹ phẩm</th>
                            <th>Mã nhân viên</th>
                            <th>Tên khách hàng</th>
                            <th>SDT</th>
                            <th>Ngày đặt</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Tác vụ</th>  
                        </tr>
                    </thead>

                    <tbody id="tbody_donhang">
                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">1</td>
                            <td style="padding-top: 10px;">ĐHĐ001</td>
                            <td style="padding-top: 10px;">NC001</td>
                            <td style="padding-top: 10px;">Kem chống nắng Cushion C</td>
                            <td style="padding-top: 10px;">NV001</td>
                            <td style="padding-top: 10px;">Trần Thị Thu Trà</td>
                            <td style="padding-top: 10px;">0987233625</td>
                            <td style="padding-top: 10px;">15/11/2023</td>
                            <td style="padding-top: 10px;">325.000</td>
                            <td style="padding-top: 10px;">2</td>
                            <td style="padding-top: 10px;">650.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">2</td>
                            <td style="padding-top: 10px;">ĐHĐ002</td>
                            <td style="padding-top: 10px;">S001</td>
                            <td style="padding-top: 10px;">Son Background</td>
                            <td style="padding-top: 10px;">NV003</td>
                            <td style="padding-top: 10px;">Đặng Ngọc Hoa</td>
                            <td style="padding-top: 10px;">0987233623</td>
                            <td style="padding-top: 10px;">28/11/2023</td>
                            <td style="padding-top: 10px;">225.000</td>
                            <td style="padding-top: 10px;">10</td>
                            <td style="padding-top: 10px;">2.225.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">3</td>
                            <td style="padding-top: 10px;">ĐHĐ003</td>
                            <td style="padding-top: 10px;">PP003</td>
                            <td style="padding-top: 10px;">Phấn phủ kiềm dầu</td>
                            <td style="padding-top: 10px;">NV002</td>
                            <td style="padding-top: 10px;">Phạm Linh Linh</td>
                            <td style="padding-top: 10px;">0387233623</td>
                            <td style="padding-top: 10px;">2/12/2023</td>
                            <td style="padding-top: 10px;">350.000</td>
                            <td style="padding-top: 10px;">1</td>
                            <td style="padding-top: 10px;">350.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">4</td>
                            <td style="padding-top: 10px;">ĐHĐ004</td>
                            <td style="padding-top: 10px;">S004</td>
                            <td style="padding-top: 10px;">Son MAC</td>
                            <td style="padding-top: 10px;">NV001</td>
                            <td style="padding-top: 10px;">Nguyễn Thị Huyền</td>
                            <td style="padding-top: 10px;">0357233623</td>
                            <td style="padding-top: 10px;">10/12/2023</td>
                            <td style="padding-top: 10px;">400.000</td>
                            <td style="padding-top: 10px;">2</td>
                            <td style="padding-top: 10px;">800.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">5</td>
                            <td style="padding-top: 10px;">ĐHĐ005</td>
                            <td style="padding-top: 10px;">KCN005</td>
                            <td style="padding-top: 10px;">Kem chống nắng The Earth</td>
                            <td style="padding-top: 10px;">NV003</td>
                            <td style="padding-top: 10px;">Trịnh Thuỳ Linh</td>
                            <td style="padding-top: 10px;">0988233623</td>
                            <td style="padding-top: 10px;">5/11/2023</td>
                            <td style="padding-top: 10px;">300.000</td>
                            <td style="padding-top: 10px;">5</td>
                            <td style="padding-top: 10px;">1.500.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">6</td>
                            <td style="padding-top: 10px;">ĐHĐ006</td>
                            <td style="padding-top: 10px;">NTT006</td>
                            <td style="padding-top: 10px;">Nước tẩy trang Garnie</td>
                            <td style="padding-top: 10px;">NV005</td>
                            <td style="padding-top: 10px;">Cao Xuân Tài</td>
                            <td style="padding-top: 10px;">0988233623</td>
                            <td style="padding-top: 10px;">5/11/2023</td>
                            <td style="padding-top: 10px;">200.000</td>
                            <td style="padding-top: 10px;">3</td>
                            <td style="padding-top: 10px;">600.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">7</td>
                            <td style="padding-top: 10px;">ĐHĐ007</td>
                            <td style="padding-top: 10px;">KCN002</td>
                            <td style="padding-top: 10px;">Kem chống nắng Skin 1004</td>
                            <td style="padding-top: 10px;">NV001</td>
                            <td style="padding-top: 10px;">Trần An Nhiên</td>
                            <td style="padding-top: 10px;">0988233623</td>
                            <td style="padding-top: 10px;">5/12/2023</td>
                            <td style="padding-top: 10px;">800.000</td>
                            <td style="padding-top: 10px;">5</td>
                            <td style="padding-top: 10px;">3.500.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                        <tr style="height: 40px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">8</td>
                            <td style="padding-top: 10px;">ĐHĐ008</td>
                            <td style="padding-top: 10px;">SN005</td>
                            <td style="padding-top: 10px;">Son Romand</td>
                            <td style="padding-top: 10px;">NV008</td>
                            <td style="padding-top: 10px;">Nguyễn Ngân Hà</td>
                            <td style="padding-top: 10px;">0358233623</td>
                            <td style="padding-top: 10px;">14/10/2023</td>
                            <td style="padding-top: 10px;">900.000</td>
                            <td style="padding-top: 10px;">5</td>
                            <td style="padding-top: 10px;">4.500.000</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>

                    </tbody>
                </table>
                
                <div class="soluong" style="width: 1280px;">
                    <div class="tong-soluong">
                        <p>Số lượng đơn hàng đặt chưa xử lý: </p>
                        <small id="quantity" style="padding-top: 0px;margin-left: 6px;font-size: 1.1rem; color: #e76800;">8</small>
                    </div>
                    <div class="page">
                        <button><i class="fa-solid fa-angles-left"></i></button>
                        <button><i class="fa-solid fa-angle-left"></i></button>
                        <button>1</i></button>
                        <button>2</i></button>
                        <button><i class="fa-solid fa-angle-right"></i></button>
                        <button><i class="fa-solid fa-angles-right"></i></button>
                    </div>
                </div>
            </div>          
        </div>       
@endsection