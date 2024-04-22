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
                        <?php
                        $index=1;
                        ?>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th>STT</th>
                            <th>Mã nhà cung cấp</th>
                            <th>Tên nhà cung cấp</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>  
                        </tr>
                    </thead>

                    <tbody id="container-tabledata-table-tbody">
                        @foreach ($ncc as $item)
                        <tr>
                        <td scope="row">{{$index++}}</td>
                        <td>{{$item['MaNCC']}}</td>
                        <td>{{$item['HoTenNCC']}}</td>
                        <td>{{$item['SDTNCC']}}</td> 
                        <td>{{$item['DiaChiNCC']}}</td> 
                        <td class="col-tacvu"><i class="fa-solid fa-eye"></i>
                        <td class="col-tacvu"><i class="fa-solid fa-pen-to-square"></i>
                        <td class="col-tacvu"><i class="fa-solid fa-trash-can"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng nhà cung cấp: </p>
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