@extends('AdminLayout/layoutadmin')

@section('title','Quản lý hóa đơn nhập')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ NHẬP HÀNG</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_buy.svg" alt="#">
            </div>    
            <div class="phantren">
                <div class="phantren1">
                    <div class="nhap-thongtin">
                        <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600;"></i>Nhập thông tin mỹ phẩm</h3>
                        <form class="nhap-thongtin-sp">
                            <label for="MaMP" class="txtmasp">Mã hóa đơn nhập: </label>
                            <input type="text" id="MaMP" style="width: 347px;" placeholder="Nhập mã hóa đơn nhập...">
                            <label for="MaMP" class="txtmasp">Mã nhân viên: </label>
                            <input type="text" id="MaMP" style="width: 347px;" placeholder="Nhập mã nhân viên...">

                        </form>                  
                    </div>      
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="TenMP" class="txtmasp">Mã nhà cung cấp: </label>
                            <input type="text" id="TenMP" style="width: 347px;" placeholder="Nhập mã nhà cung cấp...">         
                            <label for="TenMP" class="txtmasp">Tên nhà cung cấp: </label>
                            <input type="text" id="TenMP" style="width: 347px;" placeholder="Nhập tên nhà cung cấp...">         
                        </form>                  
                    </div>   
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="MaMP" class="txtmasp">Số điện thoại nhà cung cấp: </label>
                            <input type="text" id="solg" style="width: 347px;" placeholder="Nhập số điện thoại nhà cung cấp...">
                            <label for="TenMP" class="txtmasp">Tổng tiền: </label>
                            <input type="text" id="mota" style="width: 347px;" placeholder="Nhập tổng tiền...">  
                        </form>                  
                    </div>  
                </div>            
                <div class="cacbuttons">
                    <button id="them" class="themmp"><i class="fa-solid fa-plus" style="margin-right: 5px;"></i>Thêm</button>
                    <button id="sua" class="suamp"><i class="fa-solid fa-pen" style="margin-right: 5px;"></i>Sửa</button>
                    <button id="lammoi" class="capnhatmp"><i class="fa-solid fa-arrows-rotate" style="margin-right: 5px;"></i>Làm mới</button>
                </div> 
            </div>  
            
            <div class="phanduoi">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách hóa đơn nhập</h3>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã hóa đơn mà bạn muốn tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th>
                            </th>
                            <th>Mã HDN</th>
                            <th>Mã NV</th>
                            <th>Mã NCC</th>
                            <th>Họ tên nhà cung cấp</th>
                            <th>SĐT nhà cung cấp</th>
                            <th>Tổng tiền</th>
                            <th>Tác vụ</th>  
                        </tr>
                    </thead>

                    <tbody id="container-tabledata-table-tbody">
                        <tr >
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td class="col-mamp" style="padding-top: 10px;">1</td>
                            <td class="col-tenmp" style="padding-top: 10px;">1</td>
                            <td class="col-quantity">1</td>
                            <td class="col-price">Makeup Beauty Thỏ Ngọc</td>
                            <td class="col-type">0987233625</td>
                            <td class="col-type">6.250.000đ</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>
                    </tbody>
                </table>
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng hóa đơn nhập</p>
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