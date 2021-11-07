@extends('layouts.master')
@section('head')
    
    <style>
        *{padding:0;margin:0;}

        /* body{
            font-family:Verdana, Geneva, sans-serif;
            font-size:18px;
            background-color:#CCC;
        } */

        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:80px;
            right:10px;
            background-color:#0C9;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:22px;
        }
    </style>
@endsection
@section('content')
<div id="carousel-home">
    <div class="owl-carousel owl-theme">			
        <div class="owl-slide cover lazy" data-bg="url(img/slides/slide_home_3.jpg)">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        @foreach ($data_slider as $item)
                        <div class="col-lg-12 static">
                            <div class="slide-text text-center white">
                                <h2 class="owl-slide-animated owl-slide-title">{{$item->judul}}</h2>
                                <p class="owl-slide-animated owl-slide-subtitle">
                                    {{$item->deskripsi}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--/owl-slide-->
        </div>
    </div>
    <div id="icon_drag_mobile"></div>
</div>
<!--/carousel-->

<ul id="banners_grid" class="clearfix">
    <li>
        <a href="{{route('all.product')}}" class="img_container">
            <img src="{{asset('be_menu/'.$menu_product->bg)}}" data-src="{{asset('be_menu/'.$menu_product->bg)}}" alt="" class="lazy">
            <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <h3>{{$menu_product->judul}}</h3>
                <p>{{$menu_product->subjudul}}</p>
            </div>
        </a>
    </li>
    <li>
        <a href="{{route('contact')}}" class="img_container">
            <img src="{{asset('be_menu/'.$menu_contact->bg)}}" data-src="{{asset('be_menu/'.$menu_contact->bg)}}" alt="" class="lazy">
            <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <h3>{{$menu_contact->judul}}</h3>
                <p>{{$menu_contact->subjudul}}</p>
            </div>
        </a>
    </li>
    <li>
        <a href="{{route('about')}}" class="img_container">
            <img src="{{asset('be_menu/'.$menu_profile->bg)}}" data-src="{{asset('be_menu/'.$menu_profile->bg)}}" alt="" class="lazy">
            <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <h3>{{$menu_profile->judul}}</h3>
                <p>{{$menu_profile->subjudul}}</p>
            </div>
        </a>
    </li>
</ul>
<!--/banners_grid -->
<div class="pattern_2">
    <div class="container margin_120_100 home_intro">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
                <figure>
                    <img src="{{asset('be_img_about/'.$data_about->img)}}" data-src="{{asset('be_img_about/'.$data_about->img)}}" width="354" height="440" alt="" class="img-fluid lazy">
                    {{-- <a href="https://www.youtube.com/watch?v=MO7Hi_kBBBg" class="btn_play" data-cue="zoomIn" data-delay="500"><span class="pulse_bt"><i class="arrow_triangle-right"></i></span></a> --}}
                </figure>
            </div>
            <div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>{{$data_about->judul}}</h2>
                </div>
                <p>{!!substr($data_about->deskripsi,0,255).' ...'!!}</p>
                <p><img src="{{asset('be_img_about_ttd/'.$data_about->ttd)}}" width="140" height="50" alt="" class="mt-3"></p>
                @if (strlen($data_about->deskripsi) > 255)
                    <a href="#0" class="btn btn_1">Get In Touch</a>
                @endif
            </div>
        </div>
        <!--/row -->
    </div>
    <!--/container -->
</div>
<!--/pattern_2 -->

<div class="pattern_2">
    <div class="container margin_60_40" data-cues="slideInUp">
        <div class="banner lazy" data-bg="url({{asset('be_special_offer_bg/'.$data_special->bg)}})">
            <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div>
                    <small>{{$data_special->judul_mini}}</small>
                    <h3>{{$data_special->judul_heading}}</h3>
                    <p>{{$data_special->deskripsi}}</p>
                    <a href="{{route('all.product')}}" class="btn_1">All Product</a>
                </div>
                <figure class="d-none d-lg-block"><img src="{{asset('be_special_offer_img/'.$data_special->img)}}" alt="" width="200" height="200" class="img-fluid"></figure>
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /banner -->

        <div class="row justify-content-center magnific-gallery mb-3">
            @foreach ($data_product as $item)
            <div class="col-md-4 col-xl-3" data-cue="slideInUp">
                <div class="item menu_item_grid">
                    <div class="item-img" data-cue="slideInUp">
                        <img src="{{asset('be_product/'.$item->img)}}" alt="">
                        <div class="content">
                            <a href="{{asset('be_product/'.$item->img)}}" title="Photo title" data-effect="mfp-zoom-in"><i class="arrow_expand"></i></a>
                        </div>
                    </div>
                    <h3>{{$item->name}}</h3>
                    <p>{{substr($item->deskripsi,0,25).' ...'}}</p>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            @endforeach
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="call_section lazy" data-bg="url({{asset('be_invitation_bg/'.$data_invitation->bg)}})">
        <div class="container clearfix">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 text-center">
                    <div class="box_1" data-cue="slideInUp">
                        <h2>{{$data_invitation->judul_heading}} <span>{{$data_invitation->judul_mini}}</span></h2>
                        <p>{{$data_invitation->deskripsi}}</p>
                        <a href="{{route('contact')}}" class="btn_1 mt-3">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!--/call_section-->
</div>
<!-- /pattern_2 -->

<a href="{{$data_contact->whatsapp}}" target="_blank" class="float">
    <i class="fa fa-whatsapp"  style="margin-top: 5px; font-size: 50px"></i>
</a>
@endsection