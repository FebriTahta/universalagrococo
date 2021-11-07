@extends('layouts.master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/shop.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="hero_single inner_pages background-image" data-background="url({{asset('be_header/'.$header_product->bg)}})">
    <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-8">
                    <h1>{{$header_product->judul}}</h1>
                    <p>{{$header_product->subjudul}}</p>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <div class="frame white"></div>
</div>
<!-- /hero_single -->

<div class="container margin_60_40">

    <div class="row">
        <aside class="col-lg-3" id="sidebar_fixed">
            <div class="filter_col">
                <div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a></div>
                <div class="filter_type version_2">
                    <h4><a href="#filter_1" data-toggle="collapse" class="opened">Menu</a></h4>
                    <div class="collapse show" id="filter_1">
                        <ul>
                        <li>
                            <a href="{{route('all.product')}}" class="container_check">Our Product <small>{{$data_product->count()}}</small>
                                {{-- <input type="checkbox">
                                <span class="checkmark"></span> --}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('about')}}" class="container_check">About Us
                                {{-- <input type="checkbox">
                                <span class="checkmark"></span> --}}
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" class="container_check">Contact Us 
                                {{-- <input type="checkbox">
                                <span class="checkmark"></span> --}}
                            </a>
                        </li>
                    </ul>
                    </div>
                    <!-- /filter_type -->
                </div>
            </div>
        </aside>
        <!-- /col -->
        <div class="col-lg-9">
            @foreach ($data_product as $item)
            <div class="row row_item" data-cue="slideInUp">
                <div class="col-sm-4">
                    <figure>
                        {{-- <span class="ribbon off">-30%</span> --}}
                        <a href="/detail-product/{{$item->slug}}">
                            <img class="img-fluid lazy" src="{{asset('be_product/'.$item->img)}}" data-src="{{asset('be_product/'.$item->img)}}" alt="">
                        </a>
                    </figure>
                </div>
                <div class="col-sm-8">
                     
                    <a href="/detail-product/{{$item->slug}}">
                        <h3>{{$item->name}}</h3>
                    </a>
                    <p>{{substr($item->deskripsi,0,500).' ...'}}</p>
                    <a href="/detail-product/{{$item->slug}}" class="btn btn_1">Read More</a>
                     
                </div>
            </div>
            <!-- /row_item -->
            @endforeach
           
            <!-- /row_item -->
            {{$data_product->links("pagination::bootstrap-4")}}
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->			
</div>
<!-- /container -->
@endsection

@section('script')

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('js/specific_shop.js')}}"></script>
<script src="{{asset('js/sticky_sidebar.min.js')}}"></script>
<script>
    // Sticky sidebar
    $('#sidebar_fixed').theiaStickySidebar({
        minWidth: 991,
        updateSidebarHeight: true,
        additionalMarginTop: 90
    });
</script>
@endsection