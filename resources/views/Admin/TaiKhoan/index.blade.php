@extends('AdminLayout/layoutadmin')

@section('title','Quản lý tài khoản')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ TÀI KHOẢN</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_users_1.svg" alt="#">
            </div>    
                 
            <div class="phanduoi" style="height: 600px">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách tài khoản</h3>
                    <a href="taikhoans/create"><button style="background-color: #0B7043;">Thêm mới</button></a>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã, tên tài khoản cần tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <?php
                        $index=1;
                        ?>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th>STT</th>
                            <th>Mã tài khoản</th>
                            <th>Tên tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Quyền</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>  
                        </tr>
                    </thead>

                    <tbody id="container-tabledata-table-tbody">
                        @foreach ($tk as $item)
                        <tr>
                            <td scope="row">{{$index++}}</td>
                            <td>{{$item['MaTaiKhoan']}}</td>
                            <td>{{$item['TenTaiKhoan']}}</td>
                            <td>{{$item['MatKhau']}}</td>
                            <td>{{$item['Email']}}</td>
                            <td>{{$item['SDT']}}</td> 
                            <td>{{$item['Quyen']}}</td> 
                            <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
                            <td><a href="{{route('Admin.TaiKhoan.edit',$item->MaTaiKhoan)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a onClick= "return confirm('Bạn có chắc chắn muốn xóa tài khoản này không?')" href="{{route('Admin.TaiKhoan.del',$item->MaTaiKhoan)}}"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng tài khoản: </p>
                        <small id="quantity" style="padding-top: 0px;margin-left: 6px;font-size: 1.1rem; color: #e76800;">10</small>
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