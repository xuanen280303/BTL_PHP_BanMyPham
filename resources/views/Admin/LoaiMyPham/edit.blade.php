@extends('AdminLayout/layoutadmin')

@section('title','Quản lý loại mỹ phẩm')

@section('content')
    <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ LOẠI MỸ PHẨM</p>
                </div>          
                <img class="imgheader" src="{{asset('ADMIN/Hinhanh/icons8_lipstick.svg')}}" alt="#">
            </div>     

        <form action="{{ route('Admin.LoaiMyPham.save',$lmp->MaLoaiMP ?? 0)}}" method='post'> 
                @csrf

            <div class="phantren" style="height: 250px">
            <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600; margin-left: 10px"></i>Nhập thông tin mỹ phẩm</h3>
            <div class="phannhap">
                <div class="cot1" style="margin-left: 40px">
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Tên của loại mỹ phẩm:</label> 
                        <input class='form-control' type='text' placeholder='Nhập tên mỹ phẩm' name='TenLoaiMP' id='TenLoaiMP' value="{{$lmp->TenLoaiMP ??''}}">
                    </div>
                </div>
                <div class="cot1" style="margin-left: 50px">
                    <div class="anhmp">
                        <label for='exampleInputEmail1' class='form-label'>Ảnh loại mỹ phẩm:</label>
                        <div class="baoquatanh" style="display: flex; margin-top: 10px; flex: 1; height: 40px; background: white; border-radius: 2px; align-items: center;">
                            <div class="nhapmp" style="position: relative;">
                                <input class='form-control' id="image" type='text' placeholder='Chọn ảnh' name='AnhDaiDien' id='AnhDaiDien' value="{{$lmp->AnhDaiDien ??''}}">
                                    <button id="openPopup" class="btnanh" type="button" class="btn btn-sm btn-danger">
                                        <i class="fa fa-folder-open"></i>
                                    </button> 
                            </div>          
                        </div>              
                    </div>
                </div>
                <div class="cot1" style="margin-left: 140px">
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Mô tả loại mỹ phẩm:</label>
                        <input class='form-control' type='text' placeholder='Nhập mô tả mỹ phẩm' name='MoTa' id='MoTa' value="{{$lmp->MoTa ??''}}">
                    </div>
                </div>
                <div>          
                    <button style="width:70px; margin-top: 80px; margin-left: -690px" type='submit' class='luuthongtin'>Save</button>                 
                </div>
            </div>                       
        </form>
    </div>

        <!-- Popup -->
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
             <h2 class="popuptitle">ẢNH MỸ PHẨM</h2>
                <iframe src="{{url('file/dialog.php?field_id=image')}}" style="width:100% ;overflow-y:auto; height:550px;margin-top:60px; boder:none;"></iframe>
            </div>
        </div>     
@endsection