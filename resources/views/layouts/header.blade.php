<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UAC - Universal Agro Coco">
    <meta name="author" content="Ansonika">
    <title>Universal Agro Coco</title>

    <!-- Favicons-->
    {{-- <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon"> --}}
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
	<link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/vendors.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/wizard.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	@yield('head')

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Page Preload -->
				
	<header class="header clearfix element_to_stick">
		<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
		<div class="container-fluid">
		{{-- <div id="logo">
			<a href="/">
				<img src="{{asset('be_contact_logo/'.$data_contact->img_light)}}" width="140" height="35" alt="" class="logo_normal">
				<img src="{{asset('be_contact_logo/'.$data_contact->img_dark)}}" width="140" height="35" alt="" class="logo_sticky">
			</a>
		</div> --}}
		
		</nav>
	</div>
	{{-- <!-- Search -->
	<div class="search-overlay-menu">
	    <span class="search-overlay-close"><span class="closebt"><i class="icon_close"></i></span></span>
	    <form role="search" id="searchform" method="get">
	        <input value="" name="q" type="search" placeholder="Search..." />
	        <button type="submit"><i class="icon_search"></i></button>
	    </form>
	</div><!-- End Search --> --}}
	</header>
	<!-- /header -->