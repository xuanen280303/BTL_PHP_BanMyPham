@extends('AdminLayout/layoutadmin')

@section('title','Quản lý nhà cung cấp')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ NHÀ CUNG CẤP</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_Motorcycle_Delivery_Single_Box.svg" alt="#">
            </div>    
            <div class="phantren">       
                <div class="phantren1">
                    <div class="nhap-thongtin">
                        <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600;"></i>Nhập thông tin nhà cung cấp</h3>
                        <form class="nhap-thongtin-sp">
                            <label for="MaMP" class="txtmasp">Mã nhà cung cấp: </label>
                            <input id="mabv" type="text" style="width: 347px;" placeholder="Nhập mã nhà cung cấp...">
                            <label for="MaMP" class="txtmasp">Tên nhà cung cấp: </label>
                            <input id="tieudebv" type="text" style="width: 347px;" placeholder="Nhập tên nhà cung cấp...">

                        </form>                  
                    </div>      
                    <div class="nhap-thongtin" style=" margin-left:400px">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;x">
                            <label for="TenMP" class="txtmasp">Số điện thoại: </label>
                            <input id="nguoidangbv" type="text" style="width: 347px;" placeholder="Nhập số điện thoại nhà cung cấp...">         
                            <label for="TenMP" class="txtmasp">Địa chỉ: </label>
                            <input id="tgiandangbv" type="text" style="width: 347px;" placeholder="Nhập địa chỉ nhà cung cấp...">         
                        </form>                  
                    </div>   
                </div>            
                <div class="cacbuttons">
                    <button id="thembv" class="themmp"><i class="fa-solid fa-plus" style="margin-right: 5px;"></i>Thêm</button>
                    <button id="suabv" class="suamp"><i class="fa-solid fa-pen" style="margin-right: 5px;"></i>Sửa</button>
                    <button id="lammoibv" class="capnhatmp"><i class="fa-solid fa-arrows-rotate" style="margin-right: 5px;"></i>Làm mới</button>
                </div> 
            </div>  
            
            <div class="phanduoi">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách nhà cung cấp</h3>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã, tên nhà cung cấp cần tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th>
                            </th>
                            <th>Mã nhà cung cấp</th>
                            <th>Tên nhà cung cấp</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>
                            <th>Tác vụ</th>  
                        </tr>
                    </thead>

                    <tbody id="container-tabledata-table-tbody">
                        <tr >
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td class="col-mamp" style="padding-top: 10px;">NCC01</td>
                            <td class="col-tenmp" style="padding-top: 10px;">Makeup Beauty</td>
                            <td class="col-quantity">0987233625</td>
                            <td class="col-price">Phù Cừ - Hưng Yên</td>
                            <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng nhà cung cấp: </p>
                        <small id="quantity" style="padding-top: 0px;margin-left: 6px;font-size: 1.1rem; color: #e76800;">0</small>
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