@extends('layouts.master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="hero_single inner_pages background-image" data-background="url({{asset('be_header/'.$header_about->bg)}})">
    <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-8">
                    <h1>{{$header_about->judul}}</h1>
                    <p>{{$header_about->subjudul}}</p>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <div class="frame white"></div>
</div>
<!-- /hero_single -->

<div class="pattern_2">
    <div class="container margin_120_100 home_intro">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7" data-cue="slideInUp" data-delay="500">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>{{$data_about->judul}}</h2>
                </div>
                <p>{!!$data_about->deskripsi!!}</p>
                <p><img src="{{asset('be_img_about_ttd/'.$data_about->ttd)}}" width="140" height="50" alt="" class="mt-3"></p>
            </div>
        </div>
        <!--/row -->
    </div>
    <!--/container -->
</div>
<!--/pattern_2 -->

<div class="bg_gray">
    <div class="container margin_120_100">
        <div class="row flex-lg-row-reverse"> 
            <div class="col-lg-5 offset-lg-1 align-self-center mb-4 mb-md-0">
                <div class="intro_txt" data-cue="slideInUp" data-delay="500">
                    <div class="main_title">
                        <span><em></em></span>
                        <h2>{{$data_invitation->judul_heading}}</h2>
                    </div>
                    <p class="lead"><span>{{$data_invitation->judul_mini}}</span></p>
                    <p>{!!$data_invitation->deskripsi!!}</p>
                    <p><a href="{{route('contact')}}" class="btn_1 mt-2">Contact Us</a></p>
                </div>
            </div>
             <div class="col-lg-6">
                <div class="row">
                    @foreach ($data_service as $item)
                    <div class="col-lg-6 align-self-center">
                        <div class="box_how" data-cue="slideInUp">
                            <figure><img src="{{asset('be_service/'.$item->img)}}" data-src="{{asset('be_service/'.$item->img)}}" alt="" width="100" height="110" class="lazy"></figure>
                            <h3>{{$item->name}}</h3>
                            <p>{{$item->deskripsi}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--/container -->
</div>
<!--/pattern_2 -->
@endsection