@extends('layouts.master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="hero_single inner_pages background-image" data-background="url({{asset('be_header/'.$header_blog->bg)}})">
    <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-8">
                    <h1>{{$header_blog->judul}}</h1>
                    <p>{{$header_blog->subjudul}}</p>
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
        <div class="col-lg-8">
            <div class="singlepost">
                <figure><img alt="" class="img-fluid" width="100%" src="{{asset('be_product/'.$data_product->img)}}"></figure>
                <h1>{{$data_product->name}}</h1>
                <div class="postmeta">
                    <ul>
                        <li><i class="icon_calendar"></i> {{\Carbon\Carbon::parse($data_product->created_at)->isoFormat('D MMMM Y')}}</li>
                        <li><a href="#0"><i class="icon_comment_alt"></i> Comment ({{$data_product->komentar->count()}})</a></li>
                    </ul>
                </div>
                <!-- /post meta -->
                <div class="post-content">
                    <div class="dropcaps">
                        <p>{!!$data_product->deskripsi!!}</p>
                    </div>
                </div>
                <!-- /post -->
            </div>
            <!-- /single-post -->

            <div id="comments">
                <h5>Comments</h5>
                @foreach ($komentar as $item)
                <ul>
                    <li>
                        <div class="avatar">
                            <a href="#"><img src="{{asset('img/avatar1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="comment_right clearfix">
                            <div class="comment_info">
                                By <a href="#">{{$item->nama}}</a><span>|</span>
                                {{\Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y')}}
                                <span>
                            </div>
                            <p>
                                {{$item->komen}}
                            </p>
                        </div>
                    </li>
                </ul>
                @endforeach
                
            </div>

            <hr>

            <h5>Leave a comment</h5>
            <form action="/komen-product-post" method="post">@csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="hidden" value="{{$data_product->id}}" name="product_id">
                            <input type="text" name="nama" id="name2" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email2" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="komen" id="comments2" rows="6" placeholder="Comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit2" class="btn_1 mb-3">Submit</button>
                </div>
            </form>

        </div>
        <!-- /col -->

        <aside class="col-lg-4">
            <div class="widget">
                <div class="widget-title first">
                    <h4>Product Sejenis</h4>
                </div>
                <ul class="comments-list">
                    @foreach ($data_product_random as $item)
                    <li>
                        <div class="alignleft">
                            <a href="/detail-product/{{$item->slug}}"><img src="{{asset('be_product_thumb/'.$item->img_thumbnail)}}" alt=""></a>
                        </div>
                        <small>{{\Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y')}}</small>
                        <h3><a href="/detail-product/{{$item->slug}}" title="">{{substr($item->name,0,25)}}</a>
                            @if (strlen($item->name) > 25)
                                ...
                            @endif
                        </h3>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title">
                    <h4>Menu</h4>
                </div>
                <ul class="cats">
                    <li><a href="#">Our Product <span>({{$data_product->count()}})</span></a></li>
                    <li><a href="{{route('about')}}">About Us </a></li>
                    <li><a href="{{route('contact')}}">Contact Us </a></li>
                </ul>
            </div>
            <!-- /widget -->
        </aside>
        <!-- /aside -->
    </div>
    <!-- /row -->	
</div>
<!-- /container -->
@endsection