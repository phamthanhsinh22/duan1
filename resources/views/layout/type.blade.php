
@extends('layout.master')
@section('title','type')
@section('type')
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
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{$type1}}</div>
                </div>
                @php
                $mucluc = count($post);
                @endphp
                @if($mucluc>0)
                @foreach($post as $pos)
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><a href="{{url('post/'.$pos->slug_title)}}"><img style="width:500px;" src="{{asset('uploads/'.$pos->images)}}" alt=""/></a></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="{{url('post/'.$pos->slug_title)}}" class="fh5co_magna py-2"> {{$pos->title}} </a>
                        <div class="fh5co_consectetur"> {{$pos->summary}}
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <li class="vip-0">Đang cập nhật bài viết mới...</li>
                @endif
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                @foreach($type as $typ)
                @if($typ->Active==1)

                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">{{$typ->typName}}</a>
                    
                </div>
                @endif
                @endforeach
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin Hot</div>
                </div>
                <div class="row pb-3">
                    @foreach($trending as $pos)
                   
                    <div class="col-5 align-self-center">
                        <a href="#"><img style="width: 100%;" height="300px;"  src="{{asset('uploads/'.$pos->images)}}" alt="img" class="fh5co_most_trading"/></a>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <a style="text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" href=""><span>{{ strlen($pos->summary) > 50 ? mb_substr($pos->summary,0,50).'...' : $pos->summary }}</span></a></div>
                        <div class="most_fh5co_treding_font_123"> <a style="color: black; text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" href=""><span>{{ strlen($pos->summary) > 50 ? mb_substr($pos->summary,0,50).'...' : $pos->summary }}</span></a></div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                {{ $post->links('layout.link') }}
                <!-- <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="" class="btn_pagging">1</a>
                
                
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a> -->

             </div>
        </div>
    </div>
</div>
@endsection