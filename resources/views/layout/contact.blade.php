@extends('layout.master')
@section('title','contact')
@section('contact')
<div class="container-fluid contact_us_bg_img">
    <div class="container">
        <div class="row">
            <a href="#" class="fh5co_con_123"><i class="fa fa-home"></i></a>
            <a href="#" class="fh5co_con pt-2"> Liên Hệ </a>
        </div>
    </div>
</div>
<div class="container-fluid  fh5co_fh5co_bg_contcat">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Số Điện Thoại</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">0905 626 386</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Email</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">congtycokhihoangphat@gmail.com</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 py-3">
                <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                    <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                        <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span> </div>
                    </div>
                    <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                        <span class="c_g d-block">Nhà Xưởng</span>
                        <span class="d-block c_g fh5co_contact_us_no_text">85 - 87 Phan Khoang - Cẩm Lệ - Đà Nẵng</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">
            <div class="text-center fh5co_heading py-2">Liên Hệ</div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
            	<div class="alert alert-success" role="alert">
                                {{ session('message') }}
                  </div>
                <form class="row" method="post" id="fh5co_contact_form">
                	{{csrf_field()}}
                    <div class="col-12 py-3">
                        <input type="text" name="name" class="form-control fh5co_contact_text_box" placeholder="Họ Tên" />
                    </div>
                    <div class="col-6 py-3">
                        <input type="text" name="email" class="form-control fh5co_contact_text_box" placeholder="E-mail" />
                    </div>
                   <div class="col-6 py-3">
                        <input type="text" name="phone" class="form-control fh5co_contact_text_box" placeholder="Số điện thoại" />
                    </div>
                    <div class="col-12 py-3">
                        <textarea name="content" class="form-control  fh5co_contacts_message" placeholder="Nội dung"></textarea>
                    </div>
                    <div class="col-12 py-3 text-center"> <button type="submit" class="btn btn-lg btn-default active">Gửi</button> </div>
                </form>
            </div>
            <div class="col-12 col-md-6 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3168.639290621062!2d-122.08624618469247!3d37.421999879825215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbe!4v1514861541665" class="map_sss" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection