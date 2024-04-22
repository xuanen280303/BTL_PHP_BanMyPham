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
                  
            <div class="phanduoi">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách nhân viên</h3>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã, tên nhà nhân viên cần tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <?php
                        $index=1;
                        ?>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th>STT</th>
                            <th>Mã nhân viên</th>
                            <th>Mã tài khoản</th>
                            <th>Họ tên nhân viên</th>
                            <th>Chức vụ</th>
                            <th>Lương</th>
                            <th>Ca làm</th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>  
                        </tr>
                    </thead>

                    <tbody id="container-tabledata-table-tbody">
                        @foreach ($nv as $item)
                        <tr>
                        <td scope="row">{{$index++}}</td>
                        <td>{{$item['MaNV']}}</td>
                        <td>{{$item['MaTaiKhoan']}}</td>
                        <td>{{$item['HoTenNV']}}</td>
                        <td>{{$item['ChucVu']}}</td>
                        <td>{{$item['Luong']}}</td>
                        <td>{{$item['CaLam']}}</td>
                        <td>{{$item['SDTNV']}}</td> 
                        <td>{{$item['DiachiNV']}}</td> 
                        <td class="col-tacvu"><i class="fa-solid fa-eye"></i>
                        <td class="col-tacvu"><i class="fa-solid fa-pen-to-square"></i>
                        <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng nhân viên: </p>
                        <small id="quantity" style="padding-top: 0px;margin-left: 6px;font-size: 1.1rem; color: #e76800;">5</small>
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