@extends('layout.master')
@section('title','trending')
@section('trending')
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
                </div>
                @php
                $mucluc = count($trending);
                @endphp
                @if($mucluc>0)
                @foreach($trending as $trd)
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><a href="{{url('post/'.$trd->slug_title)}}"><img style="width:500px;" src="{{asset('uploads/'.$trd->images)}}" alt=""/></a></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="{{url('post/'.$trd->slug_title)}}" class="fh5co_magna py-2"> {{$trd->title}} </a>
                        <div class="fh5co_consectetur"> {{$trd->summary}}
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
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin Hot</div>
                </div>
                <div class="row pb-3">
                    @foreach($trending as $post)
                   
                    <div class="col-5 align-self-center">
                        <a href="#"><img style="width: 100%;" height="300px;"  src="{{asset('uploads/'.$post->images)}}" alt="img" class="fh5co_most_trading"/></a>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <a style="text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" href=""><span>{{ strlen($post->summary) > 50 ? mb_substr($post->summary,0,50).'...' : $post->summary }}</span></a></div>
                        <div class="most_fh5co_treding_font_123"> <a style="color: black; text-decoration: none; font-size: 16px;font-style: normal;font-family: Helvetica,sans-serif;" href=""><span>{{ strlen($post->summary) > 50 ? mb_substr($post->summary,0,50).'...' : $post->summary }}</span></a></div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                
                
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>
</div>
@endsection