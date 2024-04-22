@extends('AdminLayout/layoutadmin')

@section('title','Quản lý nhân viên')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ NHÂN VIÊN</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_users_1.svg" alt="#">
            </div>    
            <div class="phantren">
                <div class="phantren1">
                    <div class="nhap-thongtin">
                        <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600;"></i>Nhập thông tin nhân viên</h3>
                        <form class="nhap-thongtin-sp">
                            <label for="MaMP" class="txtmasp">Mã nhân viên: </label>
                            <input type="text" id="MaMP" style="width: 347px;" placeholder="Nhập mã nhân viên...">
                            <label for="TenMP" class="txtmasp">Mã tài khoản: </label>
                            <input type="text" id="TenMP" style="width: 347px;" placeholder="Nhập tên mỹ phẩm..."> 

                            <label for="select-loai-sp">Chức vụ: </label>
                            <select name="select-loai-sp" id="loaimp">
                                <option value="choose">--Chọn chức vụ nhân viên</option>
                                <option value="Kem chống nắng">Nhân viên bán hàng</option>
                                <option value="Son">Nhân viên thu ngân</option>
                                <option value="Nước tẩy trang">Nhân viên kho</option>             
                            </select>

                        </form>                  
                    </div>      
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="TenMP" class="txtmasp">Họ tên nhân viên: </label>
                            <input type="text" id="TenMP" style="width: 347px;" placeholder="Nhập tên nhân viên..."> 
                            <label for="select-loai-sp">Ca làm: </label>
                            <select name="select-loai-sp" id="loaimp">
                                <option value="choose">--Chọn ca làm</option>
                                <option value="Kem chống nắng">Fulltime</option>
                                <option value="Son">Parttime</option>            
                            </select>   
                            <label for="TenMP" class="txtmasp">Lương nhân viên: </label>
                            <input type="text" id="TenMP" style="width: 347px;" placeholder="Nhập lương nhân viên.."> 

                        </form>                  
                    </div>   
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="MaMP" class="txtmasp">Số điện thoại: </label>
                            <input type="text" id="solg" style="width: 347px;" placeholder="Nhập số điện thoại nhân viên...">
                            <label for="TenMP" class="txtmasp">Địa chỉ: </label>
                            <input type="text" id="mota" style="width: 347px;" placeholder="Nhập địa chỉ nhân viên...">  
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
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách nhân viên</h3>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã, tên nhân viên mà bạn muốn tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th></th>
                            <th>STT</th>
                            <th>Mã nhân viên</th>
                            <th>Mã tài khoản</th>
                            <th>Chức vụ</th>
                            <th>Họ tên</th>
                            <th>Ca làm</th>
                            <th>Lương</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tác vụ</th>  
                        </tr>
                    </thead>
                    <tbody id="tbody_nhanvien">
                        <tr style="height: 40px; font-size: 16px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td class="col-mamp" style="padding-top: 10px;">1</td>
                            <td class="col-mamp" style="padding-top: 10px;">1</td>
                            <td class="col-mamp" style="padding-top: 10px;">1</td>
                            <td class="col-mamp" style="padding-top: 10px;">Nhân viên thu ngân</td>
                            <td class="col-tenmp" >Trần Thu Trà</td>
                            <td class="col-quantity">Fulltime</td>
                            <td class="col-price">6.500.000</td>
                            <td class="col-price">0987233625</td>
                            <td class="col-type">Phù Cừ, Hưng Yên</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>
                    </tbody>
                </table>
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng nhân viên </p>
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