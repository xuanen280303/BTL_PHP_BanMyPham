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

        <form action="{{ route('Admin.MyPham.save',$mp->MaMP ?? 0)}}" method='post'> 
                @csrf
            <div class="phantren">
            <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600; margin-left: 10px"></i>Nhập thông tin mỹ phẩm</h3>
            <div class="phannhap">
                <div class="cot1" style="margin-left: 40px">
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Tên của mỹ phẩm:</label> 
                        <input class='form-control' type='text' placeholder='Nhập tên mỹ phẩm' name='TenMP' id='TenMP' value="{{$mp->TenMP ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Mã loại mỹ phẩm:</label>
                        <input class='form-control' type='text' placeholder='Nhập mã loại mỹ phẩm' name='MaLoaiMP' id='TenMP' value="{{$mp->MaLoaiMP ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Giá bán mỹ phẩm:</label>
                        <input class='form-control' type='text' placeholder='Nhập mã loại mỹ phẩm' name='GiaBan' id='GiaBan' value="{{$mp->GiaBan ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Xuất xứ mỹ phẩm:</label>
                        <input class='form-control' type='text' placeholder='Nhập mã loại mỹ phẩm' name='XuatXu' id='XuatXu' value="{{$mp->XuatXu ??''}}">
                    </div>
                </div>

                <div class="cot1" style="margin-left: 60px">
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Khối lượng mp:</label>
                        <input class='form-control' type='text' placeholder='Nhập khối lượng' name='KhoiLuong' id='KhoiLuong' value="{{$mp->KhoiLuong ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Ngày sản xuất:</label>
                        <input class='form-control' type='text' placeholder='Nhập ngày sản xuất' name='NgaySX' id='NgaySX' value="{{$mp->NgaySX ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Hạn sử dụng:</label>
                        <input class='form-control' type='text' placeholder='Nhập hạn sử dụng' name='HSD' id='HSD' value="{{$mp->HSD ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Số lượng kho:</label>
                        <input class='form-control' type='text' placeholder='Nhập số lượng' name='SLTon' id='SLTon' value="{{$mp->SLTon ??''}}">
                    </div>
                </div>
                <div class="cot1" style="margin-left: 60px">
                    <div class="anhmp">
                        <label for='exampleInputEmail1' class='form-label'>Ảnh mỹ phẩm:</label>
                        <div class="baoquatanh" style="display: flex; margin-top: 10px; flex: 1; height: 40px; background: white; border-radius: 2px; align-items: center;">
                            <div class="nhapmp" style="position: relative;">
                                <input class='form-control' id="image" type='text' placeholder='Chọn ảnh' name='AnhDaiDien' id='AnhDaiDien' value="{{$mp->AnhDaiDien ??''}}">
                                    <button id="openPopup" class="btnanh" type="button" class="btn btn-sm btn-danger">
                                        <i class="fa fa-folder-open"></i>
                                    </button> 
                            </div>          
                        </div>              
                    </div>
                    <div class='mb-3' style="margin-top: 35px;">
                        <label for='exampleInputEmail1' class='form-label'>Mô tả mỹ phẩm:</label>
                        <input class='form-control' type='text' placeholder='Nhập mô tả' name='MoTa' id='MoTa' value="{{$mp->MoTa ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Ghi chú mỹ phẩm:</label>
                        <input class='form-control' type='text' placeholder='Nhập ghi chú' name='GhiChu' id='GhiChu' value="{{$mp->GhiChu ??''}}">
                    </div>  
                </div>
                <div>          
                    <button style="width:70px; margin-top: 290px; margin-left: -690px" type='submit' class='luuthongtin'>Save</button>                 
                </div>
            </div>                       
        </form>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <h2 class="popuptitle">ẢNH MỸ PHẨM</h2>
            <iframe src="{{url('file/dialog.php?field_id=image')}}" style="width: 100%; overflow-y: auto; height: 550px; border: none; margin-top: 60px;"></iframe>
        </div>
    </div>
@endsection