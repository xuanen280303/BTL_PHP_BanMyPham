@extends('AdminLayout/layoutadmin')

@section('title','Quản lý loại mỹ phẩm')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ LOẠI MỸ PHẨM</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_lipstick.svg" alt="#">
            </div>    
                 
            <div class="phanduoi" style="height: 600px">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách loại mỹ phẩm</h3>
                    <a href="loaimyphams/create"><button style="background-color: #0B7043;">Thêm mới</button></a>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã, tên loại mỹ phẩm cần tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <?php
                        $index=1;
                        ?>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th>STT</th>
                            <th>Mã loại mỹ phẩm</th>
                            <th>Tên loại mỹ phẩm</th>
                            <th>Ảnh đại diện</th>
                            <th>Mô tả</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>  
                        </tr>
                    </thead>

                    <tbody id="container-tabledata-table-tbody">
                        @foreach ($lmp as $item)
                        <tr>
                            <td scope="row">{{$index++}}</td>
                            <td>{{$item['MaLoaiMP']}}</td>
                            <td>{{$item['TenLoaiMP']}}</td>
                            <td>
                            <img src="{{ asset('uploads/' . $item['AnhDaiDien']) }}" alt="no" style="width: 90px; height: 70px;">
                            </td>
                            <td>{{$item['MoTa']}}</td> 
                            <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
                            <td><a href="{{route('Admin.LoaiMyPham.edit',$item->MaLoaiMP)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a onClick= "return confirm('Bạn có chắc chắn muốn xóa loại mỹ phẩm này không?')" 
                            href="{{route('Admin.LoaiMyPham.del',$item->MaLoaiMP)}}"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng loại mỹ phẩm: </p>
                        <small id="quantity" style="padding-top: 0px;margin-left: 6px;font-size: 1.1rem; color: #e76800;">10</small>
                    </div>

                    <!-- Trong phần hiển thị phân trang -->
                    <div class="phantrang">
                        <ul class="hienthids">
                            @if ($lmp->onFirstPage())
                                <li class="disabled">
                                <span>&laquo;</span>
                                </li>
                            @else
                                <li><a href="{{ $lmp->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                            @endif

                            @foreach ($lmp->getUrlRange(1, $lmp->lastPage()) as $page => $url)
                                @if ($page == $lmp->currentPage())
                                    <li class="active"><span>{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            @if ($lmp->hasMorePages())
                                <li><a href="{{ $lmp->nextPageUrl() }}" rel="next">&raquo;</a></li>
                            @else
                                <li class="disabled"><span>&raquo;</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection