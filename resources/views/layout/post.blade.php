@extends('layout.master')
@section('title','post')
@section('post')
<style type="text/css">
     img {
        width: 100%;
     }

</style>
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
<!--######################-->
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <h2 style="margin-bottom: 20px;">
                    {{$post->title}}
                </h2>
                
                <img style="width:100%;" src="{{asset('uploads/'.$post->images)}}" alt="">
                
                <h2 style="margin-top: 20px;">THÔNG TIN CHI TIẾT</h2>
                <span style=" margin-top: 20px;font-size: 18px;font-style: normal;font-family: Helvetica,sans-serif;">
                    {!!$post->content!!}
                </span>
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
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4"><span>Bài viết liên quan</span></div>
                </div>
                <div class="row pb-3">
                    @foreach($cungdanhmuc as $post)
                    @if($post->active==1)
                    <div class="col-5 align-self-center">
                        <img  src="{{asset('uploads/'.$post->images)}}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> <span>{{$post->title}}</span></div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection