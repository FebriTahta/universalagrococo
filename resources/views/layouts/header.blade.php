<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Foores - Single Restaurant Version">
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
		<div id="logo">
			<a href="index.html">
				<img src="{{asset('be_contact_logo/'.$data_contact->img_light)}}" width="140" height="35" alt="" class="logo_normal">
				<img src="{{asset('be_contact_logo/'.$data_contact->img_dark)}}" width="140" height="35" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			{{-- <li><a href="#0" class="search-overlay-menu-btn"></a></li> --}}
			{{-- <li>
				<div class="dropdown dropdown-cart">
				    <a href="shop-cart.html" class="cart_bt"><strong>2</strong></a>
				    <div class="dropdown-menu">
				        <ul>
				            <li>
				                <figure><img src="{{asset('img/item_placeholder_square_small.jpg')}}" data-src="img/item_square_small_1.jpg" alt="" width="50" height="50" class="lazy"></figure>
				                <strong><span>1x Pizza Napoli</span>$12.00</strong>
				                <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
				            </li>
				             <li>
				                <figure><img src="{{asset('img/item_placeholder_square_small.jpg')}}" data-src="img/item_square_small_2.jpg" alt="" width="50" height="50" class="lazy"></figure>
				                <strong><span>1x Hamburgher Maxi</span>$10.00</strong>
				                <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
				            </li>
				             <li>
				                <figure><img src="{{asset('img/item_placeholder_square_small.jpg')}}" data-src="img/item_square_small_3.jpg" alt="" width="50" height="50" class="lazy"></figure>
				                <strong><span>1x Red Wine Bottle</span>$20.00</strong>
				                <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
				            </li>
				        </ul>
				        <div class="total_drop">
				            <div class="clearfix add_bottom_15"><strong>Total</strong><span>$32.00</span></div>
				            <a href="shop-cart.html" class="btn_1 outline">View Cart</a><a href="shop-checkout.html" class="btn_1">Checkout</a>
				        </div>
				    </div>
				</div>
				<!-- /dropdown-cart-->
			</li> --}}
		</ul>
		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
		    <div id="header_menu">
		        <a href="#0" class="open_close">
		            <i class="icon_close"></i><span>Menu</span>
		        </a>
		        <a href="index.html"><img src="{{asset('be_contact_logo/'.$data_contact->img_light)}}" width="140" height="35" alt=""></a>
		    </div>
		    <ul>
		        <li class="submenu">
		            <a href="/">Home</a>
		            {{-- <ul>
		                <li><a href="index.html">Slider 1</a></li>
		                <li><a href="index-2.html">Slider 2</a></li>
		                <li><a href="index-6.html">Slider 3</a></li>
		                <li><a href="index-3.html">Video Background</a></li>
		                <li><a href="index-5.html">Text Rotator</a></li>
		                <li><a href="index-4.html">GDPR Cookie Bar EU Law</a></li>
		            </ul> --}}
		        </li>
		        <li class="submenu">
		            <a href="#0" class="show-submenu">Product</a>
		            <ul>
		                <li><a href="{{route('all.product')}}">All Product </a></li>
		                {{-- <li><a href="/detail-product">prduct name <span class="badge badge-danger">HOT</span></a></li>
						<li><a href="/detail-product">prduct name</a></li> --}}
		            </ul>
		        </li>
		        {{-- <li class="submenu">
		            <a href="#0" class="show-submenu">News</a>
		            <ul>
		            	<li><a href="about.html">About</a></li>
		                <li><a href="blog.html">Blog</a></li>
		                <li><a href="gallery.html">Gallery</a></li>
		                <li><a href="gallery-2.html">Gallery Masonry</a></li>
		                <li><a href="modal-advertise.html">Modal Advertise</a></li>
		                <li><a href="modal-newsletter.html">Modal Newsletter</a></li>
		                <li><a href="404.html">404 Error page</a></li>
		                <li><a href="coming-soon.html" target="_blank">Coming Soon</a></li>
		                <li><a href="leave-review.html">Leave a review</a></li>
		                <li><a href="contacts.html">Contacts</a></li>
		                <li><a href="icon-pack-1.html">Icon Pack 1</a></li>
		                <li><a href="icon-pack-2.html">Icon Pack 2</a></li>
		            </ul>
		        </li> --}}
				{{-- <li><a href="#0">Services</a></li> --}}
				<li><a href="{{route('contact')}}">Contact</a></li>
				<li><a href="{{route('about')}}">About Us</a></li>
				@auth
					<li><a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
						 {{ __('Logout') }}
					 </a>

					 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						 @csrf
					 </form></li>
					@else
					<li><a href="/login">Login</a></li>
				@endauth
		        {{-- <li><a href="reservations.html" class="btn_top">Reservations</a></li> --}}
		    </ul>
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