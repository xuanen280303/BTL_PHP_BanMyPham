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
            <div class="phantren">
                <div class="phantren1">
                    <div class="nhap-thongtin">
                        <h3 class="text-header"><i class="fa-solid fa-pen-to-square" style="color: #ff6600;"></i>Nhập thông tin mỹ phẩm</h3>
                        <form class="nhap-thongtin-sp">
                            <label for="MaMP" class="txtmasp">Mã mỹ phẩm: </label>
                            <input type="text" id="MaMP" style="width: 347px;" placeholder="Nhập mã mỹ phẩm...">

                            <label for="select-loai-sp">Mã loại mỹ phẩm: </label>
                            <select name="select-loai-sp" id="loaimp">
                                <option value="choose">--Chọn loại mỹ phẩm</option>
                                <option value="Kem chống nắng">Kem chống nắng</option>
                                <option value="Son">Son</option>
                                <option value="Nước tẩy trang">Nước tẩy trang</option>
                                <option value="Sữa tắm">Sữa tắm</option>
                                <option value="Toner">Toner</option>
                                <option value="Nước hoa">Nước hoa</option>
                                <option value="Cushion">Cushion</option>
                                <option value="Dưỡng thể">Dưỡng thể</option>
                                <option value="Phấn phủ">Phấn phủ</option>
                                <option value="Ủ tóc">Ủ tóc</option>              
                            </select>

                        </form>                  
                    </div>      
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="TenMP" class="txtmasp">Tên mỹ phẩm: </label>
                            <input type="text" id="TenMP" style="width: 347px;" placeholder="Nhập tên mỹ phẩm...">         
                            <label for="hinhanh" class="txt-enterimg">Hình Ảnh: </label>
                        <input type="file" id="ImgMp"  style="width: 347px;">
                        </form>                  
                    </div>   
                    <div class="nhap-thongtin">
                        <form class="nhap-thongtin-sp" style="margin-top: 80px;">
                            <label for="MaMP" class="txtmasp">Số lượng: </label>
                            <input type="text" id="solg" style="width: 347px;" placeholder="Nhập số lượng mỹ phẩm...">
                            <label for="TenMP" class="txtmasp">Mô tả: </label>
                            <input type="text" id="mota" style="width: 347px;" placeholder="Nhập mô tả mỹ phẩm...">  
                        </form>                  
                    </div>  
                </div>            
                <div class="cacbuttons">
                    <button id="them" class="themmp"><i class="fa-solid fa-plus" style="margin-right: 5px;"></i>Thêm</button>
                    <button id="sua" class="suamp"><i class="fa-solid fa-pen" style="margin-right: 5px;"></i>Sửa</button>
                    <button id="lammoi" class="capnhatmp"><i class="fa-solid fa-arrows-rotate" style="margin-right: 5px;"></i>Làm mới</button>
                </div> 
            </div>  
            
            <div class="phanduoi">
                <div class="header-ds">
                    <h3 class="text-header" style="margin-left: 20px;"><i class="fa-solid fa-list-ul"></i> Danh sách mỹ phẩm</h3>
                </div>
                <div class="searchs">
                    <input type="text" placeholder="Nhập mã, tên mỹ phẩm mà bạn muốn tìm kiếm..." style="width: 2000px;">
                    <button style="margin-left: 20px;"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
                </div>

                <table class="table-ds-sp">
                    <thead>
                        <tr style="font-weight: bold; height: 40px; font-size: 18px;">
                            <th></th>
                            <th>STT</th>
                            <th>Mã mỹ phẩm</th>
                            <th>Tên mỹ phẩm</th>
                            <th>Mã loại mỹ phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Mô tả</th>
                            <th>Tác vụ</th>  
                        </tr>
                    </thead>
                    <tbody id="tbody_mypham">
                        <tr style="height: 40px; font-size: 16px;">
                            <td class="check-sp">
                                <input type="checkbox" name="check" id="chk-loai-sp">
                            </td>
                            <td style="padding-top: 10px;">1</td>
                            <td style="padding-top: 10px;">MP01</td>
                            <td >Kem chống nắng Skin</td>
                            <td>L10</td>
                            <td></td>
                            <td>28</td>
                            <td>Dịu nhẹ</td>
                            <td><i class="fa-solid fa-trash-can"></i></td>
                        </tr>                      
                    </tbody>
                </table>
                <div class="soluong">
                    <div class="tong-soluong">
                        <p>Số lượng mỹ phẩm </p>
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