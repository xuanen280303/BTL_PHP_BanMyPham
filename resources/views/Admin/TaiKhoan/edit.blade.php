@extends('AdminLayout/layoutadmin')

@section('title','Quản lý tài khoản')

@section('content')
    <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">QUẢN LÝ TÀI KHOẢN</p>
                </div>          
                <img class="imgheader" src="{{asset('ADMIN/Hinhanh/icons8_lipstick.svg')}}" alt="#">
            </div>     

        <form action="{{ route('Admin.TaiKhoan.save',$tk->MaTaiKhoan ?? 0)}}" method='post'> 
                @csrf

            <div class="phantren" style="height: 310px">
            <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600; margin-left: 10px"></i>Nhập thông tin mỹ phẩm</h3>
            <div class="phannhap">
                <div class="cot1" style="margin-left: -10px">
                    <div class='mb-3'>
                        <label style="margin-left: 60px" for='exampleInputEmail1' class='form-label'>Tên tài khoản:</label> 
                        <input style="margin-left: 60px" class='form-control' type='text' placeholder='Nhập tên mỹ phẩm' name='TenTaiKhoan' id='TenTaiKhoan' value="{{$tk->TenTaiKhoan??''}}">
                    </div>
                    <div class='mb-3'>
                        <label style="margin-left: 60px" for='exampleInputEmail1' class='form-label'>Mật khẩu:</label> 
                        <input style="margin-left: 60px; display: block; margin-top: 5px;" class='form-control' type='text' placeholder='Nhập tên mỹ phẩm' name='MatKhau' id='MatKhau' value="{{$tk->MatKhau ??''}}">
                    </div>
                </div>
                <div class="cot1" style="margin-left: 40px">
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Email người dùng:</label> 
                        <input class='form-control' type='text' placeholder='Nhập tên mỹ phẩm' name='Email' id='Email' value="{{$tk->Email ??''}}">
                    </div>
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Số điện thoại:</label> 
                        <input style="display: block; margin-top: 5px;" class='form-control' type='text' placeholder='Nhập tên mỹ phẩm' name='SDT' id='SDT' value="{{$tk->SDT ??''}}">
                    </div>            
                </div>
                <div class="cot1" style="margin-left: 70px">
                    <div class='mb-3'>
                        <label for='exampleInputEmail1' class='form-label'>Quyền:</label>
                        <select class='form-control' name='Quyen' id='Quyen'>
                            <option value="choose">--Chọn quyền người dùng</option>
                            <option value="1" {{ isset($tk) && $tk->Quyen == 1 ? 'selected' : '' }}>Chủ cửa hàng</option>
                            <option value="2" {{ isset($tk) && $tk->Quyen == 2 ? 'selected' : '' }}>Nhân viên</option>           
                        </select>

                    </div>
                </div>
                <div>          
                    <button style="width:70px; margin-top: 140px; margin-left: -690px" type='submit' class='luuthongtin'>Save</button>                 
                </div>
            </div>                       
        </form>
    </div>  
@endsection