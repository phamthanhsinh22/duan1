<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Công Ty TNHH MTV Cơ Khí Hoàng Phát</a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="{{url('trending')}}" class="treding_btn">Trending</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Thi công uy tín chất lượng giá rẽ tại Đà Nẵng</a>
            </div>
        </div>
    </div>
</div>


<!-- ###########################################################-->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
               <a href="{{URL('index')}}"> <img style="width: 100%;" src="../uploads/logo_hp.jpg" alt="img" class="fh5co_logo_width"/></a>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://www.facebook.com/thicongmaiche/" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- ###########################################################-->
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{URL('index')}}">Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                    @foreach($category as $cat)
                    @if($cat->Active == 1)
                    <li class="nav-item dropdown">
                        <a style="text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{$cat->catName}} <span class="sr-only">(current)</span></a>
                       
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            @foreach($type as $typ)
                            @if($cat->id == $typ->category_id && $typ->Active==1)
                            <a style="text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" class="dropdown-item" href="{{URL('type/'.$typ->slug_typ)}}">{{$typ->typName}}</a>
                            @endif
                            @endforeach
                        </div>
                        
                    </li>
                    @endif
                    @endforeach
                    <li class="nav-item ">
                        <a style="text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" class="nav-link" href="{{url('contact')}}">Liên Hệ <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        

    </div>
</div>