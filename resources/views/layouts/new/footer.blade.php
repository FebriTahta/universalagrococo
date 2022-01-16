<!-- FOOTER 1 -->
<footer id="footer1" class="page-section text-center pt-100-b-80-cont">
    <div class="container">
              
      <!-- Social Links -->
      <div class="footer-soc-a">
        @foreach ($social as $item)
        <a href="{{$item->judul}}" title="Facebook" target="_blank"><i class="fa fa-{{$item->subjudul}}"></i></a>
        @endforeach
        {{-- <a href="#" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a> --}}
      </div>

      <!-- Copyright -->
      <div class="footer-copy">
        <a href="#" target="_blank">&copy; Universal Agro Coco 2021</a>
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
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<!-- MAIN SCRIPT -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  
  <!-- REVOSLIDER SCRIPTS  -->
      <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
      <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>   
      <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution-parallax.min.js')}}"></script>

      <!-- FLEX SLIDER SCRIPTS  -->
		<script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script> 
		<script src="{{asset('assets/js/flex-slider.js')}}"></script> 
    
      <script>

          jQuery(document).ready(function() {
    if ( (navigator.appVersion.indexOf("Win")!=-1) && ( ieDetect == false ) ) {	
              jQuery('#rs-fullwidth').revolution(
              {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:700,
                hideThumbs:200,
                
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                //fullScreenAlignForce: "off",
                
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview0",
                
                hideTimerBar:"on",
                
                touchenabled:"on",
                onHoverStop:"on",
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                            
                parallax:"scroll",
                parallaxBgFreeze:"on",
                parallaxLevels:[45,40,35,50],
                parallaxDisableOnMobile:"on",
                            
                keyboardNavigation:"off",
                
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                    
                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner4",
                
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",
                
                autoHeight:"off",						
                forceFullWidth:"off",						
                            
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,						
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                //fullScreenOffsetContainer: ""	
              });
    } else {
            jQuery('#rs-fullwidth').revolution(
              {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:760,
                hideThumbs:200,
                
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview0",
                
                hideTimerBar:"on",
                
                touchenabled:"on",
                onHoverStop:"on",
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                            
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[0],
                parallaxDisableOnMobile:"on",
                            
                keyboardNavigation:"off",
                
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                    
                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner4",
                
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",
                
                autoHeight:"off",						
                forceFullWidth:"off",						
                            
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,						
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,

              });      
    }									
          });	//ready
          
      </script>
<script>
  $(document).ready(function() {
  
  //NAV SIDEBAR------------------------------------------------------------------
    var top_offset = $('header').height() - 1;  // get height of fixed navbar

    $('#nav-sidebar').onePageNav({
      currentClass: 'current',
      changeHash: false,
      scrollSpeed: 700,
      scrollOffset: top_offset,
      scrollThreshold: 0.5,
      filter: '',
      easing: 'swing',
      begin: function() {
        //I get fired when the animation is starting
      },
      end: function() {
        //I get fired when the animation is ending
      },
      scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
      }
    });

  //SIDEBAR STICKY---------------------------------------------	  
    var //offsetSb = $('.page-title-bg').height(),
      offsetFooter = $('#footer-offset').height()+30;
      // DM Menu
    jQuery('#sidebar-stiky').affix({
      offset: { top: 300, //top offset for header 1 for others headers it will have other value
        bottom: offsetFooter		
      }
    });
    
  }); 
</script>
<!-- JS end -->	
@yield('new_script')
</body>
</html>		