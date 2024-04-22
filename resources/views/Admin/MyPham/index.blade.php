@extends('AdminLayout/layoutadmin')

@section('title','Quản lý mỹ phẩm')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ MỸ PHẨM</p>
                </div>          
                <img class="imgheader" src="{{asset('ADMIN/Hinhanh/icons8_lipstick.svg')}}" alt="#">
            </div>     
            
            <div class="phanduoi">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách mỹ phẩm</h3>
                    <a href="myphams/create"><button style="background-color: #0B7043;">Thêm mới</button></a>
                </div>

                <form action="{{ route('Admin.MyPham.index') }}" method="GET">
                    <div class="searchs">
                        <input type="text" name="search" placeholder="Nhập mã, tên mỹ phẩm mà bạn muốn tìm kiếm..." style="width: 2000px;" 
                        value="{{ request('search') }}">
                        <button type="submit" style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</button>
                    </div>
                </form>

                <table class="table-ds-sp">
                    <thead>
                        <?php
                        $index=1;
                        ?>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th>STT</th>
                            <th>Mã MP</th>
                            <th>Tên</th>
                            <th>Mã loại</th>
                            <th>Giá bán</th>
                            <th>Giá gốc</th>
                            <th>Xuất xứ</th>
                            <th>Khối lượng</th>
                            <th>NgàySX</th>
                            <th>HSD</th>
                            <th>Số lượng</th>
                            <th>Ảnh </th>
                            <th>Mô tả</th>
                            <th>Ghi chú</th>
                            <th>Sửa</th>
                            <th>Xóa</th> 
                        </tr>
                    </thead>

                    <tbody id="container-tabledata-table-tbody">
                        @foreach ($mp as $item)
                        <tr>
                        <td scope="row">{{$index++}}</td>
                        <td>{{$item['MaMP']}}</td>
                        <td>{{$item['TenMP']}}</td>
                        <td>{{$item['MaLoaiMP']}}</td> 
                        <td>{{$item['GiaBan']}}</td> 
                        <td>{{$item['GiaGoc']}}</td> 
                        <td>{{$item['XuatXu']}}</td> 
                        <td>{{$item['KhoiLuong']}}</td> 
                        <td>{{$item['NgaySX']}}</td> 
                        <td>{{$item['HSD']}}</td> 
                        <td>{{$item['SLTon']}}</td> 
                        <td>
                            <img src="{{ asset('uploads/' . $item['AnhDaiDien']) }}" alt="no" style="width: 100px; height: 80px;">
                        </td> 
                        <td>{{$item['MoTa']}}</td> 
                        <td>{{$item['GhiChu']}}</td> 
                        <td><a href="{{route('Admin.MyPham.edit',$item->MaMP)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a onClick= "return confirm('Bạn có chắc chắn muốn xóa mỹ phẩm này không?')" 
                        href="{{route('Admin.MyPham.del',$item->MaMP)}}"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng mỹ phẩm: </p>
                        <small id="quantity" style="padding-top: 0px;margin-left: 6px;font-size: 1.1rem; color: #e76800;">20</small>
                    </div>
                    <div class="phantrang">
                        <ul class="hienthids">
                            @if ($mp->onFirstPage())
                                <li class="disabled">
                                <span>&laquo;</span>
                                </li>
                            @else
                                <li><a href="{{ $mp->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                            @endif

                            @foreach ($mp->getUrlRange(1, $mp->lastPage()) as $page => $url)
                                @if ($page == $mp->currentPage())
                                    <li class="active"><span>{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            @if ($mp->hasMorePages())
                                <li><a href="{{ $mp->nextPageUrl() }}" rel="next">&raquo;</a></li>
                            @else
                                <li class="disabled"><span>&raquo;</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection