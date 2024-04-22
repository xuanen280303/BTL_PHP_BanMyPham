@extends('UserLayout/layoutuser')

@section('title','Chi tiết')

@section('css')
  <link rel="stylesheet" href="{{asset('USER/css/index.css')}}">
  <link rel="stylesheet" href="{{asset('USER/css/menu.css')}}"> 
  <link rel="stylesheet" href="{{asset('USER/css/product_details.css')}}" />
  <link rel="stylesheet" href="{{asset('USER/fontawesome-free-6.4.0-web/css/all.min.css')}}">
  <script src="{{asset('USER/js/productdetail.js')}}"></script>
@endsection
    
@section('content') 
  <div class="link-out">
        <div class="link" style="margin-top: 15px">
          <a href="index.html">Trang chủ </a>
          <i class="fas fa-caret-right"></i> Sức khoẻ-làm đẹp
          <i class="fas fa-caret-right"></i> Dầu dưỡng
          <i class="fas fa-caret-right"></i> Dầu dưỡng tóc
          <i class="fas fa-caret-right"></i> Dầu dưỡng tóc cho Nữ
          <i class="fas fa-caret-right"></i> Dầu LOreal Tinh Dầu Hoa Tự Nhiên
        </div>
  </div>

  <!-- Chi tiết sản phẩm -->
  <div class="details_products">  
        <div class="bentrai">
          <!-- CHi tiết mỹ phẩm -->
          <div class="sanpham-bentrai">
            <div class="bentrai1">
              <div class="hinhanh">
                <img src="{{ asset('uploads/' . $mp['AnhDaiDien']) }}" alt="" />
              </div>
            </div>
            <div class="bentrai2">
              <div class="tensp">
                <img src="User/Images/icon_nowfree.png" alt="" />
                <p>Chloé</p>
              </div>
              <div class="tittle1">
                <p>{{$mp['TenMP']}}</p>
              </div>
              <div class="tittle2">
              <p>{{$mp['GhiChu']}}</p>
              </div>
              <div class="xephang1">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <div class="xephang-number">
                  3028 đánh giá | 1000 Hỏi Đáp 
                </div>
              </div>
              <div class="thanhngang" style="background-color: #FF6600; width: 700px ">
                <div class="thanhngang_trai">
                  <img src="{{asset('USER/Images/flash_deal_title.svg')}}" alt="" />
                </div>
                <div class="thanhngang_phai">
                  <p>DEAL ĐÃ HẾT HẠN</p>
                </div>
              </div>

              <div class="giasp">
                <div class="gia1">
                  <p>{{ number_format($mp['GiaBan']) }}<span class="dong">đ</span></p> 
                </div>
                <div class="mota">
                  <p>(Đã bao gồm VAT)</p>
                </div>
              </div>

              <div class="giathitruong">
                <span style="font-size: 14px; margin-top: 5px;">Giá thị trường :</span>
                <p style="margin-left: 5px;font-size: 14px; ">{{ number_format($mp['GiaGoc']) }}<span class="dong">đ</span></p>
                <span style="margin-left: 5px; font-size: 14px; margin-top: 5px; ">Tiết kiệm: 80.000 ₫</span>
                <span style="color: #ff6600; font-size: 14px; margin-top: 5px;">(-34%)</span>
              </div>
              <div class="dungtich">
                <p>Khối lượng: {{$mp['KhoiLuong']}}</p>
                <img src="{{ asset('uploads/' . $mp['AnhDaiDien']) }}" alt="" />
              </div>
              
              <!-- Thêm giỏ hàng -->
              <form action="{{ route('cart.addToCart') }}" method="post">
                @csrf
                <input type="hidden" name="MaMP" value="{{$mp->MaMP}}">
                
              <div id="product-count">
                <p style="font-size: 15px">Số lượng: 
                  <input style="width: 50px; height: 35px; margin-left: 10px; margin-right: 10px; text-align: center;" type="number" name="quantity" min="1" value="1">
                    <button style="font-size: 15px" onclick="updateCount()">Cập nhật</button>
                </p>       
              </div>         
              <div class="giaohang">
                <img src="{{asset('USER/Images/icon_nowfree.png')}}" alt="" />
                <p>Giao Nhanh Miễn Phí 2H tại 35 Tỉnh Thành:</p>
              </div>
              <div class="giaohang1">
                <p>
                  Bạn muốn nhận hàng trước 11h hôm nay (Miễn phí). Đặt hàng trong
                  46 phút tới và chọn giao hàng 2H ở bước thanh toán. Xem chi tiết
                </p>
              </div>
              <div class="nhanchon">
                <div class="nut1">
                  <div class="nut1_tren">
                    <p>31/ 104 Chi Nhánh</p>
                  </div>
                  <div class="nut1_duoi">
                    <p>Còn sản phẩm</p>
                  </div>
                </div>
      
                <div class="nut2">
                  <button type="submit" class="shopping-cart-btn"><i class="fas fa-shopping-cart"></i> Giỏ hàng</button>
                </div>
                </form>

                <div class="nut3">
                  <div class="nut3_tren">
                    <p>Mua ngay NowFree 2H</p>
                  </div>
                  <div class="nut3_duoi">
                    <p>Trễ tặng 100k</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mota_sanpham">
            <div class="gioithieusp">
              <p>Thông tin sản phẩm</p>
              <p>Thông số sản phẩm</p>
              <p>Thành phần sản phẩm</p>
              <p>Hướng dẫn sử dụng</p>
              <p>Hỏi đáp</p>
              <p>Đánh giá</p>
            </div>
            <div class="contents_sp">
              <p>
                Nước Hoa Nữ Chloe Love Story EDP 75ml là sản phẩm nước hoa eau de
                parfum cho nữ đến từ thương hiệu Chloe của Pháp. Với mùi hương hoa
                cỏ gần gũi, nữ tính và ngọt ngào mang lại nét đẹp dịu dàng thanh
                lịch cho những cô gái yêu thích sự lãng mạn. Thiết kế chai theo
                hình cái móc khóa mô phỏng hình ảnh những chiếc khóa tình yêu trên
                cầu Pont des Arts, bên trên móc khóa là dãy ruy băng mỏng manh
                khéo léo cột vào, góp phần tăng sự nữ tính và hấp dẫn.
              </p>
            </div>
            <div class="anh_nuochoa">
              <img src="{{asset('USER/Images/nuochoa_nu.jpg')}}" alt="" />
            </div>
            <div class="contents_sp" style="margin-top: 24px">
              <p>
                Tháng 9 năm 2014, thương hiệu Chloe cho ra mắt dòng nước hoa mới
                mang tên Love story, được sáng tạo bởi nhà pha chế nước hoa Anne
                Flipo. Lấy cảm hứng từ các câu chuyện tình lãng mạn ở Paris và
                những cái móc khóa tình yêu trên cây cầu nổi tiếng Pont des Arts.
              </p>
              <p style="margin-top: 10px">
                Ấn tượng đầu tiên khi đến với Love Story là hương thơm tươi mát,
                quyến rũ của dầu hoa cam, sau đó chuyển dần qua sức hút của hoa
                lài trâu mang lại đôi chút cảm giác nữ tính. Hương cuối ấm áp với
                gỗ tuyết tùng và xạ hương. Love Story được xem là một sự kết hợp
                hoàn mỹ làm nổi bật vẻ đẹp tinh tế của người phụ nữ, nhưng vẫn
                không kém phần quyến rũ, lưu lại dấu ấn khó quên với người đối
                diện.
              </p>
              <p style="margin-top: 10px">
                Hiện sản phẩm Nước Hoa Nữ Chloe Love Story EDP 75ml đã có mặt tại
                <a href="#">Hasaki.</a>
              </p>
            </div>
            <div class="anh_nuochoa">
              <img src="{{asset('USER/Images/nuochoa_nu2.jpg')}}" alt="" />
            </div>
            <div class="tieude_nuochoa">
              <p>Các tầng hương:</p>
              <div class="mota_chitiet">
                <ul>
                  <li>Hương đầu: Hoa cam Neroli.</li>
                  <li>Hương giữa: Hoa cam, Hoa lài trâu.</li>
                  <li>Hương cuối: Xạ hương, Gỗ tuyết tùng.</li>
                </ul>
                <p style="margin-top: 12px">Nhóm hương: Floral (Hương hoa)</p>
                <p>Thời điểm khuyên dùng: Xuân, Ngày, Đêm</p>
                <p>Độ lưu hương: 3 - 6 tiếng</p>
              </div>
            </div>
            <div class="tieude_nuochoa">
              <p>Bảo quản:</p>
              <div class="mota_chitiet">
                <ul>
                  <li>Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp.</li>
                  <li>Đậy nắp kín sau khi sử dụng.</li>
                </ul>
              </div>
            </div>
            <div class="tieude_nuochoa">
              <p>Thông số sản phẩm:</p>
              <div class="mota_chitiet">
                <ul>
                  <li>Nồng độ: Eau De Perfum (EDP)</li>
                  <li>Dung tích: 30ml; 75ml</li>
                  <li>Thương hiệu: Chloe</li>
                  <li>Xuất xứ thương hiệu: Pháp.</li>
                </ul>
              </div>
            </div>
            <div class="ghichu_sp">
              <div class="tieude_nuochoa">
                <p>Làm sao để phân biệt hàng có trộn hay không ?</p>
                <div class="mota_chitiet">
                  <ul>
                    <li>
                      Hàng trộn sẽ không thể xuất hoá đơn đỏ (VAT) 100% được do có
                      hàng không nguồn gốc trong đó.
                    </li>
                    <li>
                      Tại Hasaki, 100% hàng bán ra sẽ được xuất hoá đơn đỏ cho dù
                      khách hàng có lấy hay không. Nếu có nhu cầu lấy hoá đơn đỏ,
                      quý khách vui lòng lấy trước 22h cùng ngày. Vì sau 22h, hệ
                      thống Hasaki sẽ tự động xuất hết hoá đơn cho những hàng hoá
                      mà khách hàng không đăng kí lấy hoá đơn.
                    </li>
                    <li>
                      Do xuất được hoá đơn đỏ 100% nên đảm bảo 100% hàng tại
                      Hasaki là hàng chính hãng có nguồn gốc rõ ràng.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="thugon">
              <p>Thu gọn nội dung</p>
            </div>
          </div>
          <div class="thanhphan-sanpham">
            <div class="tieude">
              <p>Thành phần sản phẩm</p>
                <p style="font-size: 15px;">Các tầng hương:</p>
                <ul>
                  <li>Hương đầu: Hoa cam Neroli.</li>
                  <li>Hương giữa: Hoa cam, Hoa lài trâu.</li>
                  <li>Hương cuối: Xạ hương, Gỗ tuyết tùng.</li>
                </ul>
            </div> 
          </div>
        </div>    
        <div class="benphai">
          <div class="sanpham-benphai">
            <div class="benphai1">
              <div class="vanchuyen">
                <div class="anh"><img src="{{asset('USER/Images/delivery1.png')}}" alt="" /></div>
                <div class="noidung">
                  <p>Giao nhanh miễn phí 2H (tại 35 tỉnh thành). Trễ tặng 100K</p>
                </div>
              </div>
              <div class="vanchuyen">
                <div class="anh"><img src="{{asset('USER/Images/quality.png')}}" alt="" /></div>
                <div class="noidung">
                  <p style="margin-top: -10px">
                    Hasaki đền bù 100% + hãng đền bù 100% nếu phát hiện hàng giả
                  </p>
                </div>
              </div>
              <div class="vanchuyen">
                <div class="anh"><img src="{{asset('USER/Images/quality_2.png')}}" alt="" /></div>
                <div class="noidung">
                  <p style="margin-top: -10px">
                    Giao Hàng Miễn Phí (từ 90K tại 35 Tỉnh Thành trừ huyện, toàn
                    Quốc từ 249K)
                  </p>
                </div>
              </div>
              <div class="vanchuyen">
                <div class="anh"><img src="{{asset('USER/Images/quality_4.png')}}" alt="" /></div>
                <div class="noidung">
                  <p style="margin-top: 10px">Đổi trả trong 14 ngày.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="benphai2">
            <div class="benphai2_anh">
              <img src="{{asset('USER/Images/Chloe-logo.jpg')}}" alt="" />
            </div>
          </div>
          <div class="benphai3">
            <div class="title-benphai">Sản phẩm xem cùng</div>
            <div class="product-sanpham">
              <img src="{{asset('USER/Images/sanpham1.jpg')}}" alt="" class="sanpham-img" />
              <div class="sanpham-price">
                <div class="sanpham-giagoc">
                  <p>154.000 <span class="dong">đ</span></p>
                </div>
                <div class="sanpham-price-old">
                  <p>350.000 <span class="dong">đ</span></p>
                </div>
                <div>
                  <button class="sanpham-icon">56%</button>
                </div>
              </div>
              <div class="sanpham-tittle">
                <span>Foellie</span>
              </div>
              <div class="sanpham-content">
                <p>
                  Nước Hoa Vùng Kín Foellie Hương Hoa<br />
                  Inner Perfum #Eau De Beijou
                </p>
              </div>
              <div class="xephang">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <div class="xephang-number">
                  (3) |
                  <i class="fa fa-shopping-cart"></i>
                  207
                </div>
              </div>
              <div class="thanh_bar-line">
                <div class="time_deal_process">
                  <span
                    style="width: 80%"
                    class="progress_bar_fill active"
                  ></span>
                </div>
                <div class="sanpham-phantram">78%</div>
              </div>
            </div>
            <div class="product-sanpham">
              <img src="{{asset('USER/Images/sanpham2.jpg')}}" alt="" class="sanpham-img" />
              <div class="sanpham-price">
                <div class="sanpham-giagoc">
                  <p>329.000 <span class="dong">đ</span></p>
                </div>
                <div class="sanpham-price-old">
                  <p>549.000 <span class="dong">đ</span></p>
                </div>
                <div>
                  <button class="sanpham-icon">40%</button>
                </div>
              </div>
              <div class="sanpham-tittle">
                <span>LAURA ANNE</span>
              </div>
              <div class="sanpham-content">
                <p>Nước Hoa Nữ Laura Anne Diamond</p>
              </div>
              <div class="xephang">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <div class="xephang-number">
                  (114) |
                  <i class="fa fa-shopping-cart"></i>
                  66
                </div>
              </div>
              <div class="thanh_bar-line">
                <div class="time_deal_process">
                  <span
                    style="width: 80%"
                    class="progress_bar_fill active"
                  ></span>
                </div>
                <div class="sanpham-phantram">69%</div>
              </div>
              <div class="sanpham-combo">
                Bill 399k Laura Anne/Gennie/Gota/Parisia...
              </div>
            </div>
            <div class="product-sanpham">
              <img src="{{asset('USER/Images/sanpham3.jpg')}}" alt="" class="sanpham-img" />
              <div class="sanpham-price">
                <div class="sanpham-giagoc">
                  <p>354.000 <span class="dong">đ</span></p>
                </div>
                <div class="sanpham-price-old">
                  <p>550.000 <span class="dong">đ</span></p>
                </div>
                <div>
                  <button class="sanpham-icon">36%</button>
                </div>
              </div>
              <div class="sanpham-tittle">
                <span>De Memoria</span>
              </div>
              <div class="sanpham-content">
                <p>Nước Hoa Nữ De Memoria #02 Val De</p>
              </div>
              <div class="xephang">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <div class="xephang-number">
                  (8) |
                  <i class="fa fa-shopping-cart"></i>
                  48
                </div>
              </div>
              <div class="thanh_bar-line">
                <div class="time_deal_process">
                  <span
                    style="width: 80%"
                    class="progress_bar_fill active"
                  ></span>
                </div>
                <div class="sanpham-phantram">91%</div>
              </div>
              <div class="sanpham-combo">
                Bill 399k Pinker Bell, De Memoria tặng Nước...
              </div>
            </div>
            <div class="product-sanpham">
              <img src="{{asset('USER/Images/sanpham4.jpg')}}" alt="" class="sanpham-img" />
              <div class="sanpham-price">
                <div class="sanpham-giagoc">
                  <p>329.000 <span class="dong">đ</span></p>
                </div>
                <div class="sanpham-price-old">
                  <p>549.000 <span class="dong">đ</span></p>
                </div>
                <div>
                  <button class="sanpham-icon">40%</button>
                </div>
              </div>
              <div class="sanpham-tittle">
                <span>LAURA ANNE</span>
              </div>
              <div class="sanpham-content">
                <p>Nước Hoa Nữ Laura Anne Diamond Pink</p>
              </div>
              <div class="xephang">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <div class="xephang-number">
                  (114) |
                  <i class="fa fa-shopping-cart"></i>
                  27
                </div>
              </div>
              <div class="thanh_bar-line">
                <div class="time_deal_process">
                  <span
                    style="width: 80%"
                    class="progress_bar_fill active"
                  ></span>
                </div>
                <div class="sanpham-phantram">69%</div>
              </div>
              <div class="sanpham-combo">
                Bill 399k Laura Anne/Gennie/Gota/Parisia...
              </div>
            </div>
            <div class="product-sanpham">
              <img src="{{asset('USER/Images/sanpham5.jpg')}}" alt="" class="sanpham-img" />
              <div class="sanpham-price">
                <div class="sanpham-giagoc">
                  <p>1.429.000 <span class="dong">đ</span></p>
                </div>
                <div class="sanpham-price-old">
                  <p>2.442.000 <span class="dong">đ</span></p>
                </div>
                <div>
                  <button class="sanpham-icon">41%</button>
                </div>
              </div>
              <div class="sanpham-tittle">
                <span>Moschino</span>
              </div>
              <div class="sanpham-content">
                <p>Nước Hoa Nữ Moschino Toy 2 Eau De</p>
              </div>
              <div class="xephang">
                <div class="xephang-number" style="margin-left: -5px">
                  <i class="fa fa-shopping-cart"></i>
                  10
                </div>
              </div>
              <div class="thanh_bar-line">
                <div class="time_deal_process">
                  <span
                    style="width: 80%"
                    class="progress_bar_fill active"
                  ></span>
                </div>
                <div class="sanpham-phantram">98%</div>
              </div>
            </div>
          </div>
          <div class="benphai4">
            <div class="title-benphai">Sản phẩm cùng thương hiệu</div>
            <div class="sanphams">
              <div class="sanpham1">
                <img src="{{asset('USER/Images/hinhanh1.jpg')}}" alt="" />
                <div class="noidungphai" style="">
                  <div class="giamoi">
                    <p>190.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="giacu">
                    <p>350.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-tittle">
                    <span>Chloé</span>
                  </div>
                  <div class="sanpham-content">
                    <p>
                      Nước Hoa Nữ <br />
                      Eau De Parfum
                    </p>
                  </div>
                </div>
              </div>
              <div class="sanpham1">
                <img src="{{asset('USER/Images/hinhanh2.jpg')}}" alt="" />
                <div class="noidungphai" style="">
                  <div class="giamoi">
                    <p>2.835.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="giacu">
                    <p>4.130.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-tittle">
                    <span>Chloé</span>
                  </div>
                  <div class="sanpham-content">
                    <p>
                      Nước Hoa Nữ <br />
                      L'Eau Eau De
                    </p>
                  </div>
                </div>
              </div>
              <div class="sanpham1">
                <img src="{{asset('USER/Images/hinhanh3.jpg')}}" alt="" />
                <div class="noidungphai" style="">
                  <div class="giamoi">
                    <p>2.843.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="giacu">
                    <p>4.130.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-tittle">
                    <span>Chloé</span>
                  </div>
                  <div class="sanpham-content">
                    <p>
                      Nước Hoa Nữ <br />
                      Eau De Parfum
                    </p>
                  </div>
                </div>
              </div>
              <div class="sanpham1">
                <img src="{{asset('USER/Images/hinhanh4.jpg')}}" alt="" />
                <div class="noidungphai" style="">
                  <div class="giamoi">
                    <p>2.932.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="giacu">
                    <p>4.290.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-tittle">
                    <span>Chloé</span>
                  </div>
                  <div class="sanpham-content">
                    <p>
                      Nước Hoa Nữ <br />
                      Nomade Eau De
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sanpham-duoi">
          <div class="sanpham-so1">
              <img src="{{asset('USER/Images/anh1.png')}}" alt="" />
              <div class="sanpham-price">
                  <div class="sanpham_giagoc">
                      <p>375.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-price-old">
                      <p>525.000 <span class="dong">đ</span></p>
                  </div>
                  <div>
                      <button class="sanpham_icon">30%</button>
                  </div>
              </div>
              <div class="sanpham-tittle">
                  <span>LA ROCHE-POSAY</span>
              </div>
              <div class="sanpham-content">
                  <p>Kem Chống Nắng La Roche-Posay <br> Anthelios Anti-Shine Gel-Cream </p>
              </div>
              <div class="xephang">
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9734;</span>
                  <div class="xephang-number">
                      (119) |
                      <i class="fa fa-shopping-cart"></i>
                      4659            
                  </div>
              </div>
              <div class="sanpham-quatang">
                Bill 399k Tặng Kem Dưỡng La Roc...
              </div>
          </div>
          <div class="sanpham-so1">
              <img src="{{asset('USER/Images/anh2.png')}}" alt="" />
              <div class="sanpham-price">
                  <div class="sanpham_giagoc">
                      <p>159.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-price-old">
                      <p>219.000 <span class="dong">đ</span></p>
                  </div>
                  <div>
                      <button class="sanpham_icon">31%</button>
                  </div>
              </div>
              <div class="sanpham-tittle">
                  <span>L'REAL</span>
              </div>
              <div class="sanpham-content">
                  <p>Nước Tẩy Trang Lo'Real Tươi Mát<br> Water 3-IN-1 3ml Refreashing</p>
              </div>
              <div class="xephang">
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9734;</span>
                  <div class="xephang-number">
                      (119) |
                      <i class="fa fa-shopping-cart"></i>
                      4659            
                  </div>
              </div>
              <div class="sanpham-quatang">
                Bill 399k Tặng Kem Dưỡng La Roc...
              </div>
          </div>
          <div class="sanpham-so1">
              <img src="{{asset('USER/Images/anh3.png')}}" alt="" />
              <div class="sanpham-price">
                  <div class="sanpham_giagoc">
                      <p>258.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-price-old">
                      <p>399.000 <span class="dong">đ</span></p>
                  </div>
                  <div>
                      <button class="sanpham_icon">31%</button>
                  </div>
              </div>
              <div class="sanpham-tittle">
                  <span>Klairs</span>
              </div>
              <div class="sanpham-content">
                  <p>Nước Hoa Hồng Klairs Không Mùi<br> Anthelios Anti-Shine Gel-Cream </p>
              </div>
              <div class="xephang">
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <div class="xephang-number">
                      (119) |
                      <i class="fa fa-shopping-cart"></i>
                      4659            
                  </div>
              </div>
              <div class="sanpham-quatang">
                Bill 399k Tặng Kem Dưỡng La Roc...
              </div>
          </div>
          <div class="sanpham-so1">
              <img src="{{asset('USER/Images/anh4.png')}}" alt="" />
              <div class="sanpham-price">
                  <div class="sanpham_giagoc">
                      <p>429.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-price-old">
                      <p>715.000 <span class="dong">đ</span></p>
                  </div>
                  <div>
                      <button class="sanpham_icon">40%</button>
                  </div>
              </div>
              <div class="sanpham-tittle">
                  <span>ASSENSA</span>
              </div>
              <div class="sanpham-content">
                  <p>Sữa Chống Nắng ASSENSA Dưỡng<br> Perfect UV Sunscreen Skincare</p>
              </div>
              <div class="xephang">
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9734;</span>
                  <div class="xephang-number">
                      (53)|
                      <i class="fa fa-shopping-cart"></i>
                      1083           
                  </div>
              </div>
              <div class="sanpham-quatang">
                Bill 399k Tặng Kem Dưỡng La Roc...
              </div>
          </div>
          <div class="sanpham-so1">
              <img src="{{asset('USER/Images/anh5.png')}}" alt="" />
              <div class="sanpham-price">
                  <div class="sanpham_giagoc">
                      <p>367.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-price-old">
                      <p>525.000 <span class="dong">đ</span></p>
                  </div>
                  <div>
                      <button class="sanpham_icon">30%</button>
                  </div>
              </div>
              <div class="sanpham-tittle">
                  <span>BIODERMA</span>
              </div>
              <div class="sanpham-content">
                  <p>Nước Tẩy Trang Bioderma Dành <br> Sensibio H2O</p>
              </div>
              <div class="xephang">
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9734;</span>
                  <div class="xephang-number">
                      (97) |
                      <i class="fa fa-shopping-cart"></i>
                      1580            
                  </div>
              </div>
              <div class="sanpham-quatang">
                Bill 399k Tặng Kem Dưỡng La Roc...
              </div>
          </div>
          <div class="sanpham-so1">
              <img src="{{asset('USER/Images/anh6.png')}}" alt="" />
              <div class="sanpham-price">
                  <div class="sanpham_giagoc">
                      <p>159.000 <span class="dong">đ</span></p>
                  </div>
                  <div class="sanpham-price-old">
                      <p>219.000 <span class="dong">đ</span></p>
                  </div>
                  <div>
                      <button class="sanpham_icon">31%</button>
                  </div>
              </div>
              <div class="sanpham-tittle">
                  <span>L'OREAL</span>
              </div>
              <div class="sanpham-content">
                  <p>Nước Tẩy Trang L'Oreal Làm Sạch<br> Water 3-IN-1 Deep</p>
              </div>
              <div class="xephang">
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9733;</span>
                  <span class="star">&#9734;</span>
                  <div class="xephang-number">
                      (250) |
                      <i class="fa fa-shopping-cart"></i>
                      3659            
                  </div>
              </div>
              <div class="sanpham-quatang">
                Bill 399k Tặng Kem Dưỡng La Roc...
              </div>
          </div>
      </div>
  </div>
@endsection

