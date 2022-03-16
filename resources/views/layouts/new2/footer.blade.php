<footer class="page-section text-center pt-100-b-80-cont">
    <div class="container">
        <?php $link = App\Models\Linkbutton::all();
              $profile = App\Models\Profile::find(1);
        ?>
        <!-- Social Links -->
        <div class="footer-soc-a">
            @foreach ($link as $item)
                <a href="{{$item->link}}" class="text-dark" title="{{$item->name}}" target="_blank"> {{$item->name}}</a>
            @endforeach
        </div>

        <!-- Copyright -->
        <div class="footer-copy">
            <a href="/" target="_blank">{{$profile->email}}</a>
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
<script src="{{ 'assets/js/jquery-1.11.2.min.js' }}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ 'assets/js/bootstrap.min.js' }}"></script>

<!-- MAGNIFIC POPUP -->
<script src='{{ 'assets/js/jquery.magnific-popup.min.js' }}'></script>

<!-- PORTFOLIO SCRIPTS -->
<script src="{{ 'assets/js/isotope.pkgd.min.js' }}"></script>
<script src="{{ 'assets/js/imagesloaded.pkgd.min.js' }}"></script>
<script src="{{ 'assets/js/masonry.pkgd.min.js' }}"></script>

<!-- COUNTER -->
<script src="{{ 'assets/js/jquery.countTo.js' }}"></script>

<!-- APPEAR -->
<script src="{{ 'assets/js/jquery.appear.js' }}"></script>

<!-- OWL CAROUSEL -->
<script src="{{ 'assets/js/owl.carousel.min.js' }}"></script>

<!-- HEADER BELOW -->
<script src="{{ 'assets/js/jquery.sticky.js' }}"></script>

<!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]-->

<!-- FORMS VALIDATION	-->
<script src="{{ 'assets/js/jquery.validate.min.js' }}"></script>
<script src="{{ 'assets/js/contact-form-validation.min.js' }}"></script>

<!-- MAIN SCRIPT -->
<script src="{{ 'assets/js/main.js' }}"></script>
<!-- FLEX SLIDER SCRIPTS  -->
<script src="{{ 'assets/js/jquery.flexslider-min.js' }}"></script>
<script src="{{ 'assets/js/flex-slider.js' }}"></script>
<!-- REVOSLIDER SCRIPTS  -->
<script src="{{ 'assets/revo-slider-5/js/jquery.themepunch.tools.min.js' }}">
</script>
<script src="{{ 'assets/revo-slider-5/js/jquery.themepunch.revolution.min.js' }}">
</script>

<!-- PARTICLES ADD-ON FILES -->
<script
src="{{ 'assets/revo-slider-5/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3' }}">
</script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.actions.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.carousel.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.kenburn.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.layeranimation.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.migration.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.navigation.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.parallax.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.slideanims.min.js' }}"></script>
<script src="{{ 'assets/revo-slider-5/js/extensions/revolution.extension.video.min.js' }}"></script>

<!-- SLIDER REVOLUTION INITIALIZATION  -->
<script>
    var tpj = jQuery;
    var revapi8;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_280_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_280_1");
        } else {
            revapi8 = tpj("#rev_slider_280_1").show().revolution({
                sliderType: "hero",
                jsFileLocation: "revo-slider-5/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                particles: {
                    startSlide: "first",
                    endSlide: "last",
                    zIndex: "1",
                    particles: {
                        number: {
                            value: 90
                        },
                        color: {
                            value: "#dadada"
                        },
                        shape: {
                            type: "circle",
                            stroke: {
                                width: 0,
                                color: "#dadada",
                                opacity: 1
                            },
                            image: {
                                src: ""
                            }
                        },
                        opacity: {
                            value: .1,
                            random: false,
                            min: 0.25,
                            anim: {
                                enable: false,
                                speed: 1,
                                opacity_min: 0,
                                sync: false
                            }
                        },
                        size: {
                            value: 5,
                            random: true,
                            min: 1,
                            anim: {
                                enable: false,
                                speed: 40,
                                size_min: 0.1,
                                sync: false
                            }
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#dadada",
                            opacity: 0.5,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: true,
                            min_speed: 3,
                            straight: false,
                            out_mode: "out"
                        }
                    },
                    interactivity: {
                        events: {
                            onhover: {
                                enable: true,
                                mode: "repulse"
                            },
                            onclick: {
                                enable: false,
                                mode: "bubble"
                            }
                        },
                        modes: {
                            grab: {
                                distance: 400,
                                line_linked: {
                                    opacity: 0.5
                                }
                            },
                            bubble: {
                                distance: 400,
                                size: 40,
                                opacity: 1
                            },
                            repulse: {
                                distance: 75
                            }
                        }
                    }
                },
                navigation: {},
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    type: "off",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [0],
                    type: "scroll",
                    disable_onmobile: "on"
                },
                shadow: 0,
                spinner: "spinner0",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                }
            });
        }

        RsParticlesAddOn(revapi8);
    }); /*ready*/
</script>

<!-- JS end -->

</body>

</html>
