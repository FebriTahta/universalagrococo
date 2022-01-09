<!DOCTYPE html>
<!--

	Theme Name: HASWELL
	Description: HTML/CSS 
	Author: ABCgomel 
	Designed & Coded by ABCgomel
	
-->

<html lang="en">
 	<head>
		<title>UAC</title>
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<meta name="robots" content="index, follow" > 
		<meta name="keywords" content="HTML5 Template" > 
		<meta name="description" content="Haswell - Responsive HTML5 Template" > 
		<meta name="author" content="ABCgomel">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- FAVICONS -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('asset/images/favicon/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('asset/images/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('asset/images/favicon/apple-touch-icon-114x114.png')}}">
		
<!-- CSS -->

    <!-- FLEXSLIDER SLIDER CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/flexslider.css')}}"  >

    <!-- BOOTSTRAP -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> 
	
    <!-- GOOGLE FONT -->		
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
  
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS -->		
		<link rel="stylesheet" href="{{asset('assets/css/icons-fonts.css')}}" >	
	
    <!-- CSS THEME -->		
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" >

    <!-- ANIMATE -->	
		<link rel='stylesheet' href="{{asset('assets/css/animate.min.css')}}">
		
    <!-- IE Warning CSS -->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->
    
    <!-- Magnific popup  in style.css	Owl Carousel Assets in style.css -->		
	
<!-- CSS end -->

<!-- JS begin some js files in bottom of file-->
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
    <!-- Modernizr -->
    <!-- <script src="js/modernizr.js"></script> -->
		
	</head>
	<body>
	
		<!-- LOADER -->	
		<div id="loader-overflow">
      <div id="loader-cont">
        <div id="loader3">Please enable JS</div>
      </div>
    </div>	

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				
				<!--[if lte IE 8]>
				<div id="ie-container">
					<div id="ie-cont-close">
						<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
					</div>
					<div id="ie-cont-content" >
						<div id="ie-cont-warning">
							<img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
						</div>
						<div id="ie-cont-text" >
							<div id="ie-text-bold">
								You are using an outdated browser
							</div>
							<div id="ie-text">
								For a better experience using this site, please upgrade to a modern web browser.
							</div>
						</div>
						<div id="ie-cont-brows" >
							<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
							<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
							<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
							<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
						</div>
					</div>
				</div>
				<![endif]-->
				
				<!-- HEADER 1 NO-TRANSPARENT -->
				<header id="nav" class="header header-1 no-transparent affix-on-mobile">
          
				  <div class="header-wrapper">
					<div class="container-m-30 clearfix">
					  <div class="logo-row">
					  
						<!-- LOGO --> 
						<div class="logo-container-2">
                <div class="logo-2">
                  <a href="/" class="clearfix">
                    <img src="{{asset('assets/images/logo.png')}}" class="logo-img" alt="Logo">
                  </a>
                </div>
              </div>
						<!-- BUTTON --> 
						<div class="menu-btn-respons-container">
							<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
								<span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
							</button>
						</div>
					 </div>
					</div>

					<!-- MAIN MENU CONTAINER -->
					<div class="main-menu-container">
						
						  <div class="container-m-30 clearfix">	
						  
								<!-- MAIN MENU -->
								<div id="main-menu">
								  <div class="navbar navbar-default" role="navigation">

									<!-- MAIN MENU LIST -->
									<nav class="collapse collapsing navbar-collapse right-1024">
									  <ul class="nav navbar-nav">
									  
                                        <li class="parent {{ Request::routeIs('landing') ? 'current' : '' }}">
                                            <a href="/"><div class="main-menu-title">HOME</div></a>
                                          </li>
                    
                                          <!-- MENU ITEM -->
                                          <li class="parent {{ Request::routeIs('all.product') ? 'current' : '' }}">
                                            <a href="{{route('all.product')}}"><div class="main-menu-title">PRODUCT</div></a>
                                          </li>
                    
                                          <li class="parent">
                                            <a href="#"><div class="main-menu-title">CONTACT</div></a>
                                          </li>
                    
                                          <li class="parent">
                                            <a href="#"><div class="main-menu-title">ABOUT US</div></a>
                                          </li>
                    
									  </ul>
						  
									</nav>

								  </div>
								</div>
								<!-- END main-menu -->
								
						  </div>
						  <!-- END container-m-30 -->
						
					</div>
					<!-- END main-menu-container -->
					
					<!-- SEARCH READ DOCUMENTATION -->
					
					
				  </div>
				  <!-- END header-wrapper -->
				  
				</header>

        <!-- PAGE TITLE SMALL -->
        <div class="page-title-cont page-title-small grey-light-bg">
          <div class="relative container align-left">
            <div class="row">
              
              <div class="col-md-8">
                <h1 class="page-title">ALL PRODUCTS</h1>
              </div>
              
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="/">Home</a><span class="slash-divider">/</span><span class="bread-current">ALL PRODUCTS</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <!-- MAIN CONTENT -->
        
        <div class="p-140-cont">
          
          <!-- DIVIDER -->
          @foreach ($data_product as $item)
          <hr id="branding-section" class="mt-0 mb-80">
          
          <!-- CONTAINER -->
          <div class="container"> 
            <div class="row mb-80">

              <!-- SIDEBAR -->
              <div class="col-sm-6 col-md-6">
                <h2 class="section-title-3 mb-30" style="text-transform: uppercase">{{$item->name}}</h2>
                <div class="mb-50">
                  <p>{{$item->deskripsi}}</p>
                </div>
              </div>
                    
              <!-- CONTENT -->
              <div class="col-sm-6 col-md-6 ">
                <div class="row">
                  
                  <!-- ITEM -->
                  <div class="col-md-12 plr-0 lightbox-item">
                    <a href="#" >
                      <div class="port-img-overlay">
                        <img class="port-main-img" src="{{asset('assets/images/portfolio/projects-3.jpg')}}" alt="img">
                      </div>
                      <div class="port-overlay-cont">
                        <div class="port-btn-cont">
                          <div aria-hidden="true" class="icon_link"></div>
                        </div>
                      </div>
                    </a>  
                  </div>

                </div>
              </div>

            </div>
          </div>
          @endforeach
          <!-- DIVIDER -->
          <hr id="web-design-section"  class="mt-0 mb-80"> 
              
        
        <!-- NEWS LETTER -->
        <div class="page-section nl-cont">
          <div class="container">
            <div class="relative" >
              <div id="mc_embed_signup" class="nl-form-container clearfix">
                <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                  <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your whatsapp number" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
          
                  <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                </form>
                <div id="notification_container"  ></div>
              </div>
            </div>
          </div>
        </div>

        <!-- FOOTER 2 -->
        <footer class="page-section pt-80 pb-50">
          <div class="container">
            <div class="row">
            
              <div class="col-md-3 col-sm-3 widget">
                <div class="logo-footer-cont">
                  <a href="#">
                    <img class="logo-footer" src="{{asset('assets/images/logo-footer.png')}}" alt="logo">
                  </a>
                </div>
                <div class="footer-2-text-cont">
                  <address>
                    Jl. Sidosermo I No.8a<br>
                    Indonesia, Surabaya
                  </address>
                </div>
                <div class="footer-2-text-cont">
                  1-800-312-2121
                </div>
                <div class="footer-2-text-cont">
                  <a class="a-text" href="mailto:info@haswell.com">uac@gmail.com</a>
                </div>
              </div>
              
              <div class="col-md-3 col-sm-3 widget">
                <h4>NAVIGATE</h4>
                <ul class="links-list bold a-text-cont">
                  <li><a href="/">HOME</a></li>
                  <li><a href="/">PRODUCT</a></li>
                  <li><a href="/">CONTACT</a></li>
                  <li><a href="/">ABOUT US</a></li>
                </ul>
              </div>
              
              <div class="col-md-3 col-sm-3 widget">
                <h4>ABOUT US</h4>
                <ul class="links-list a-text-cont" >
                  <li><a href="/">CONTACT</a></li>
                </ul>
              </div>
              
              <div class="col-md-3 col-sm-3 widget">
                <h4>RECENT POSTS</h4>
                <div id="post-list-footer">

                  <div class="post-prev-title">
                    <h3><a class="a-text"  href="##">New trends in web design</a></h3>
                  </div>
                  <div class="post-prev-info">
                    Jule 10
                  </div>
                   
                  <div class="post-prev-title">
                    <h3><a class="a-text"  href="##">The sound of life</a></h3>
                  </div>
                  <div class="post-prev-info">
                    October 10
                  </div>
                   
                  <div class="post-prev-title">
                    <h3><a class="a-text"  href="##">Time for minimalism</a></h3>
                  </div>
                  <div class="post-prev-info">
                     September 21
                  </div>

                </div>                  
              </div>
            </div>    
            
            <div class="footer-2-copy-cont clearfix">
              <!-- Social Links -->
              <div class="footer-2-soc-a right">
                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="#" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
              </div>
              
              <!-- Copyright -->
              <div class="left">
                <a class="footer-2-copy" href="#" target="_blank">&copy; Universal Agro Coco 2021</a>
              </div>
              

            </div>
                    
          </div>
        </footer>
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<!-- JS begin -->

		<!-- jQuery  -->
        <script src="{{asset('assets/js/jquery-1.11.2.min.js')}}"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>		
      
        <!-- MAGNIFIC POPUP -->
        <script src='{{asset('assets/js/jquery.magnific-popup.min.js')}}'></script>
      
      <!-- PORTFOLIO SCRIPTS -->
      <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
      
      <!-- COUNTER -->
      <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
      
      <!-- APPEAR -->    
      <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
      
      <!-- GOOLE MAP --> 
      <script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
      <script src="{{asset('assets/js/gmap3.min.js')}}"></script>
      
      <!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]--> 
      
      <!-- FORMS VALIDATION	-->
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/contact-form-validation.min.js')}}"></script>
      
      <!-- OWL CAROUSEL -->    
      <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
      
      <!-- MAIN SCRIPT -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        
        <!-- REVOSLIDER SCRIPTS  -->
            <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
            <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>   
            <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution-parallax.min.js')}}"></script>
    
<!-- JS end -->	
	
	</body>
</html>		