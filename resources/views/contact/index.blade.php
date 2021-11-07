@extends('layouts.master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="hero_single inner_pages background-image" data-background="url({{asset('be_header/'.$header_contact->bg)}})">
    <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-8">
                    <h1>{{$header_contact->judul}}</h1>
                    <p>{{$header_contact->subjudul}}</p>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <div class="frame white"></div>
</div>
<!-- /hero_single -->

<div class="bg_gray">
    <div class="container margin_60_40">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="box_contacts">
                    <i class="icon_phone"></i>
                    <h2>Shop Now</h2>
                    <a href="#0">{{$data_contact->telp}}</a> - <a href="#0">universalagrococo.com</a>
                    <small>- <a href="reservations.html">Or use the online form below</a> -</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box_contacts">
                    <i class="icon_pin_alt"></i>
                    <h2>Address</h2>
                    <div>{{$data_contact->alamat}}</div>
                    <small>- <a href="#0">Get Directions Below</a> -</small>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_gray -->

<div class="container margin_60_40">
    <h5 class="mb_5">Drop Us a Line</h5>
    <div class="row">
        <div class="col-lg-4 col-md-6 add_bottom_25">
            <div id="message-contact"></div>
            <form action="/client-message-post" method="post">@csrf
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name" id="name_contact" name="nama" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" id="email_contact" name="email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="height: 150px;" placeholder="Message" id="message_contact" name="komen" required></textarea>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" id="verify_contact" name="telp" placeholder="phone number" required>
                </div>
                <div class="form-group">
                    <input class="btn_1 full-width" type="submit" value="Submit" id="submit-contact">
                </div>
            </form> 
        </div>
        <div class="col-lg-8 col-md-6 add_bottom_25">
            <div style="width: 100%">
                {!!$data_contact->lokasi!!}
            </div>
            {{-- <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" allowfullscreen></iframe> --}}
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->

<div class="container margin_60_40">			
    
    <!-- /row -->	
</div>
<!-- /container -->
@endsection