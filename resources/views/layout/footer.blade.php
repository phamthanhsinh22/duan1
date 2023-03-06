<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="../uploads/logo_hp.jpg" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> CÔNG TY TNHH MTV CƠ KHÍ TỔNG HỢP HOÀNG PHÁT
</div>
                <div class="footer_sub_about pb-3"> 
                    <span style="color: #fff;">
                    Địa Chỉ: 84 Nguyễn Giản Thanh - Thanh Khê - Đà Nẵng
                    <br>
                    Nhà Xưởng: 85 - 87 Phan Khoang - Cẩm Lệ - Đà Nẵng
                    <br>
                    MST : 0402048562
                    <br>
                    Điện Thoại Tư Vấn 24/7: 02 36 37 39 468
                    <br>
                    Cơ Sở Vật Tư: Số 10 Phần Lăng 10 - Thanh Khê - Đà Nẵng
                    <br>
                    Điện Thoại: 0905 626 386 - 077 55 77 886 - 0365 129 179
                    <br>
                    Mail: congtycokhihoangphat@gmail.com
                    </span>
                    
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                
                <div class="footer_main_title py-3"> Danh Mục</div>
                @foreach($category as $cate)
                @if($cate->Active == 1)
                <ul class="footer_menu">
                    <li><a href="{{url('type/'.$cate->slug_type)}}" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; {{$cate->catName}}</a></li>
                   
                </ul>
                @endif
                @endforeach
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> VĂN PHÒNG</div>
                <span style="color: #fff">
                    Địa chỉ: 84 Nguyễn Giản Thanh - Thanh Khê - Đà Nẵng
                    <br>
                    Phone: 0905 626 386 - 077 55 77 886 - 0941 92 4343
                </span>
                <div class="footer_main_title py-3"> NHÀ XƯỞNG</div>  
                <span style="color: #fff;">
                    Địa chỉ: 85 - 87 Phan Khoang, Cẩm Lệ, Đà Nẵng
                    <br>
                    Cơ sở 2: Thôn Thuận Mỹ, Đại Phong, Đại Lộc,Quảng Nam
                    <br>
                    Phone: 0905 626 386 - 077 55 77 886 - 0941 92 4343
                </span>   
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Đối Tác</div>
                <a href="#" class="footer_img_post_6"><img src="{{url('../uploads/doitac.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{url('../uploads/doitac2.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{url('../uploads/doitac3.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{url('../uploads/doitac4.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{url('../uploads/doitac5.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{url('../uploads/logo_hp.jpg')}}" alt="img"/></a>
                
            </div>
        </div>
      
    </div>
</div>
<!--##########################-->
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> Công Ty Hoàng Phát dịch vụ uy tín nhất Đà Nẵng <a href="https://thicongmaiche.com/" title="Free HTML5 Bootstrap templates">Thi Công Mái Che Hoàng Phát</a>. </div>
            
        </div>
    </div>
</div>