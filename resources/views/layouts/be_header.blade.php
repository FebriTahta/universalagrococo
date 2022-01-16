<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	{{-- <link rel="icon" href="be/images/favicon-32x32.png" type="image/png" /> --}}
	<!--plugins-->
	<link href="be/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="be/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="be/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="be/css/pace.min.css" rel="stylesheet" />
	<script src="be/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="be/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="be/css/app.css" rel="stylesheet">
	<link href="be/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="be/css/dark-theme.css" />
	<link rel="stylesheet" href="be/css/semi-dark.css" />
	<link rel="stylesheet" href="be/css/header-colors.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    @yield('head')
	<title>Agrococo Admin</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header wrapper-->	
		<div class="header-wrapper">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand">
						<div class="topbar-logo-header">
							<div class="">
								<img src="{{asset('be/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
							</div>
							<div class="">
								<h4 class="logo-text">Agrococo Admin</h4>
							</div>
						</div>
						<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
						<div class="top-menu-left d-none d-lg-block ps-3">
							<div class="nav-item dropdown dropdown-large">
								{{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a> --}}
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
												ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
												ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
												ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
												ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</div>	
						</div>
						<div class="search-bar flex-grow-1">
							<div class="position-relative search-bar-box">
								<input type="text" class="form-control search-control" placeholder=""> <span class="position-absolute top-50 search-show translate-middle-y">
									{{-- <i class='bx bx-search'></i> --}}
								</span>
								<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
							</div>
						</div>
						<div class="top-menu ms-auto">
							<ul class="navbar-nav align-items-center">
								{{-- <li class="nav-item mobile-search-icon">
									<a class="nav-link" href="#">	<i class='bx bx-search'></i>
									</a>
								</li> --}}
								
								
								<li class="nav-item dropdown dropdown-large">
									
									<div class="dropdown-menu dropdown-menu-end">
										
										<div class="header-message-list">
											
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="user-box dropdown">
							<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{asset('be/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
								<div class="user-info ps-3">
									<p class="user-name mb-0">Agrococo</p>
									<p class="designattion mb-0">Admin</p>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" href="{{route('be_contact.page')}}"><i class="bx bx-user"></i><span>Profile</span></a>
								</li>
								<li>
									<div class="dropdown-divider mb-0"></div>
								</li>
								<li>
									<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!--end header -->
			<!--navigation-->
			<div class="nav-container">
				<div class="mobile-topbar-header">
					<div>
						<img src="{{asset('be/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
					</div>
					<div>
						<h4 class="logo-text">Synadmin</h4>
					</div>
					<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
					</div>
				</div>
				<nav class="topbar-nav">
					<ul class="metismenu" id="menu">
						{{-- <li>
							<a href="javascript:;" class="has-arrow">
								<div class="parent-icon"><i class='bx bx-home-circle'></i>
								</div>
								<div class="menu-title">Dashboard</div>
							</a>
							<ul>
								<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
								</li>
								<li> <a href="#p"><i class="bx bx-right-arrow-alt"></i>Sales</a>
								</li>
							</ul>
						</li> --}}
						<li>
							<a href="javascript:;" class="has-arrow">
								<div class="parent-icon"><i class="bx bx-category"></i>
								</div>
								<div class="menu-title">Section</div>
							</a>
							<ul>
								<li> <a href="{{route('be_slider.page')}}"><i class="bx bx-right-arrow-alt"></i>Slider</a>
								</li>
								<li> <a href="{{route('be_about.page')}}"><i class="bx bx-right-arrow-alt"></i>About</a>
								</li>
								{{-- <li> <a href="{{route('be_special_off.page')}}"><i class="bx bx-right-arrow-alt"></i>Special Offer</a>
								</li> --}}
								<li> <a href="{{route('be_invitation.page')}}"><i class="bx bx-right-arrow-alt"></i>Vission Mission</a>
								</li>
								<li> <a href="{{route('be_service.page')}}"><i class="bx bx-right-arrow-alt"></i>Service</a>
								</li>
								<li> <a href="{{route('be_imagehead.page')}}"><i class="bx bx-right-arrow-alt"></i>Social Media</a>
								</li>
								{{-- <li> <a href="{{route('be_imagemenu.page')}}"><i class="bx bx-right-arrow-alt"></i>Image Menu</a>
								</li> --}}
							</ul>
						</li>
						
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class="bx bx-lock"></i>
								</div>
								<div class="menu-title">Profile</div>
							</a>
							<ul>
								<li> <a href="{{route('be_account.page')}}"><i class="bx bx-right-arrow-alt"></i>Account</a>
								</li>
								<li> <a href="{{route('be_contact.page')}}"><i class="bx bx-right-arrow-alt"></i>Contact</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
								</div>
								<div class="menu-title">Interaction</div>
							</a>
							<ul>
								{{-- <li> <a href="{{route('be_produkomen.page')}}"><i class="bx bx-right-arrow-alt"></i>Product Comments</a>
								</li> --}}
								<li> <a href="{{route('be_client.page')}}"><i class="bx bx-right-arrow-alt"></i>Client</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="{{route('be_product.page')}}">
								<div class="parent-icon"><i class="bx bx-line-chart"></i>
								</div>
								<div class="menu-title">Product</div>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<!--end navigation-->
		   </div>
		   <!--end header wrapper-->