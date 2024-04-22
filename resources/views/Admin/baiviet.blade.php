@extends('AdminLayout/layoutadmin')

@section('title','Quản lý bài viết')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ BÀI VIẾT</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_Australia_Post.svg" alt="#">
            </div>    
            <div class="phantren">       
                <div class="phantren1">
                    <div class="nhap-thongtin">
                        <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600;"></i>Nhập thông tin bài viết</h3>
                        <form class="nhap-thongtin-sp">
                            <label for="MaMP" class="txtmasp">Mã bài viết: </label>
                            <input id="mabv" type="text" style="width: 347px;" placeholder="Nhập mã bài viết...">
                            <label for="MaMP" class="txtmasp">Tiêu đề: </label>
                            <input id="tieudebv" type="text" style="width: 347px;" placeholder="Nhập tiêu đề bài viết...">

                        </form>                  
                    </div>      
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="TenMP" class="txtmasp">Người đăng bài: </label>
                            <input id="nguoidangbv" type="text" style="width: 347px;" placeholder="Nhập tên người đăng bài viết...">         
                            <label for="TenMP" class="txtmasp">Thời gian: </label>
                            <input id="tgiandangbv" type="text" style="width: 347px;" placeholder="Nhập thời gian đăng bài viết...">         
                        </form>                  
                    </div>   
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="MaMP" class="txtmasp">Ngày kết thúc: </label>
                            <input id="ngayktbv" type="text" style="width: 347px;" placeholder="Nhập ngày kết thúc bài viết..">
                            <label for="TenMP" class="txtmasp">Nội dung: </label>
                            <input id="noidungbv" type="text" style="width: 347px;" placeholder="Nhập nội dung bài viết..">  
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
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách bài viết</h3>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã, tiêu đề bài viết cần tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th></th>
                            <th>STT</th>
                            <th>Mã bài viết</th>
                            <th>Tiêu đề</th>
                            <th>Người đăng</th>
                            <th>Thời gian đăng</th>
                            <th>Thời gian kết thúc</th>
                            <th>Nội dung</th>
                            <th>Tác vụ</th>  
                        </tr>
                    </thead>
                    <tbody id="tbody_baiviet">
                        <tr style="height: 40px; font-size: 16px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">1</td>
                            <td style="padding-top: 10px;">BV01</td>
                            <td>Tác dụng của kem chống nắng</td>
                            <td>Trần Thu Trà</td>
                            <td>20/11/2023</td>
                            <td>28</td>
                            <td>Kem chống nắng giúp hấp thụ hoặc phản xạ một lượng tia UV từ ánh sáng mặt trời, từ đó giúp bảo vệ làn da bạn không bị cháy nắng</td>
                            <td><i id="xoabv" class="fa-solid fa-trash-can"></i></td>
                        </tr>
                    </tbody>
                </table>

                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng bài viết: </p>
                        <small id="quantity" style="padding-top: 0px;margin-left: 6px;font-size: 1.1rem; color: #e76800;">3</small>
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