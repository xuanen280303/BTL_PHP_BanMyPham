@extends('AdminLayout/layoutadmin')

@section('title','Quản lý tài khoản')

@section('content')
        <div class="bodybenphaimp"> 
            <div class="headerbaiviet">
                <div style="display: flex;">
                  <p style="font-size: 25px; margin-left: 450px;">THÔNG TIN TÀI KHOẢN</p>
                </div>          
                <img class="imgheader" src="Admin/Hinhanh/icons8_couple_icloud.svg" alt="#">
            </div>   
            <div id="wrappers">
                <form action="" id="form-login">
                    <h1 class="form-heading">WELCOME ADMIN</h1>
                    <div class="in4">
                        <span>Thông tin hồ sơ của bạn trong các dịch vụ Hasaki</span>
                    </div>
                    <div class="in4chitiet">
                        <div class="thongtin">
                            <span>Mã quản lý</span>
                        </div>
                        <div class="chitiet">
                            <span style="margin-left: 5px;">QL001</span>
                        </div>
                    </div>
                    <div class="in4chitiet">
                        <div class="thongtin">
                            <span>Tên quản lý</span>
                        </div>
                        <div class="chitiet" style="margin-left: 52px;">
                            <span style="margin-left: 10px;">Trần Thị Xuân Én</span>
                        </div>
                    </div>
                    <div class="in4chitiet">
                        <div class="thongtin">
                            <span>Email</span>
                        </div>
                        <div class="chitiet" style="margin-left: 98px;">
                            <span style="margin-left: -23px;">enchan280303@gmail.com</span>
                        </div>
                    </div>
                    <div class="in4chitiet">
                        <div class="thongtin">
                            <span>SĐT</span>
                        </div>
                        <div class="chitiet" style="margin-left: 109px;">
                            <span style="margin-left: -29px;">0987233625</span>
                        </div>
                    </div>
                    <div class="in4chitiet">
                        <div class="thongtin">
                            <span>Địa chỉ</span>
                        </div>
                        <div class="chitiet" style="margin-left: 92px;">
                            <span style="margin-left: -15px;">Đình Cao - Phù Cừ - Hưng Yên</span>
                        </div>
                    </div>
                    <div class="in4chitiet">
                        <div class="thongtin">
                            <span>Chức vụ</span>
                        </div>
                        <div class="chitiet" style="margin-left: 80px;">
                            <span style="margin-left: -3px;">Quản lý</span>
                        </div>
                    </div>
                    <div class="in4chitiet">
                        <div class="thongtin">
                            <span>Mật khẩu </span>
                        </div>
                        <div class="chitiet" style="margin-left: 72px;">
                            <span style="margin-left: 3px;">********</span>
                        </div>
                    </div>                 
                </form> 
            </div>
            <div class="doimatkhau">
                <button class="change">Đổi mật khẩu</button>           
            </div>        
        </div>   
@endsection    
