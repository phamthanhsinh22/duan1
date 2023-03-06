@extends('layout.master')
@section('content')
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img  src="uploads/slider3.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Công Trình của Hoàng Phát</h3>
          <p>Công Ty Hoàng Phát uy tín chất lượng</p>
        </div>
      </div>

      <div class="item">
        <img  src="uploads/slider4.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Công Trình của Hoàng Phát</h3>
          <p>Công Ty Hoàng Phát uy tín chất lượng</p>
        </div>
      </div>
    
      <div class="item">
        <img  src="uploads/slider2.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Công Trình của Hoàng Phát</h3>
          <p>Công Ty Hoàng Phát uy tín chất lượng</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>

<div class="social-button">
  <div class="social-button-content">
    <a href="https://zalo.me/0775577886" target="_blank" class="zalo">
      <i class="fa fa-commenting-o" aria-hidden="true"></i>
      <div class="animated alo-circle"></div>
      <div class="animated alo-circle-fill"></div>
      <span>Zalo: 0775577886</span>
    </a>
  </div>
</div>

<div style="margin-bottom: 80px;" id="support" class="hotline-ef">
        <div class="hovicon effect-8">
            <a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <span><a style="color: #fff;display: block;" href="tel:0905 626 386">0905 626 386</a></span>
        </div>
</div>
<div style="float: right;" id="support" class="hotline-ef">
        <div class="hovicon effect-8">
            <a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <span><a style="color: #fff;display: block;" href="tel:0941 92 4343">0941 92 4343</a></span>
        </div>
    </div>
<!--#####################################-->
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><a style="color: #3ba820 !important" href="{{url('trending/')}}">Trending</a></div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach($trending as $trend)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img">
                        <img src="{{asset('uploads/'.$trend->images)}}" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="{{url('post/'.$trend->slug_title)}}" style="text-decoration:none;" class="text-white"> <span style="font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;">{{ strlen($trend->title) > 50 ? mb_substr($trend->title,0,50).'...' : $trend->title }}</span> </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> <span style="font-size: 14px;font-style: normal;font-family: Helvetica,sans-serif;">{{ strlen($trend->summary) > 50 ? mb_substr($trend->summary,0,50).'...' : $trend->summary }}</span></div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>
<!--##################################-->
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin Mới Cập Nhật</div>
                </div>
                @foreach($post as $pos)
                <div class="row pb-4">
                    
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><a href="{{URL('post/'.$pos->slug_title)}}"><img style="width: 100%;" src="{{asset('uploads/'.$pos->images)}}" alt=""/></a></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a style="text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" href="{{URL('post/'.$pos->slug_title)}}" class="fh5co_magna py-2"> {{ strlen($pos->title) > 50 ? mb_substr($pos->title,0,50).'...' : $pos->title }} </a> 
                        <div class="fh5co_consectetur"> <span style="font-size: 14px;font-style: normal;font-family: Helvetica,sans-serif;">{{ strlen($pos->summary) > 200 ? mb_substr($pos->summary,0,200).'...' : $pos->summary }}</span>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
           
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin Hot</div>
                </div>
                @foreach($tinhot as $hot)
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <a href="{{URL('post/'.$hot->slug_title)}}"><img style="width: 100%;height: 100px;" src="{{asset('uploads/'.$hot->images)}}" alt="img" class="fh5co_most_trading"/></a>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <a style="text-decoration: none;" href="{{URL('post/'.$hot->slug_title)}}"><span style="font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;">{{$hot->title}}</span></a></div>
                        <div class="most_fh5co_treding_font_123"> <span style="font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;">{{ strlen($hot->summary) > 50 ? mb_substr($hot->summary,0,70).'...' : $hot->summary }}</span></div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
       
    </div>
</div>
<!--##############################-->
<div class="container-fluid pb-4 pt-5">
    
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Dự Án</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach($post1 as $pot)
            <div class="item px-2">
                
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><a href="{{URL('post/'.$pot->slug_title)}}"><img style="width: 100%;" src="{{asset('uploads/'.$pot->images)}}" alt=""/></a></div>
                    <div>
                        <a href="{{URL('post/'.$pot->slug_title)}}" class="d-block fh5co_small_post_heading"><span style="font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" class="">{{$pot->title}}</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
    
</div>
<!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

@endsection