@extends('layouts.new2.master')
@section('containers')
    <div id="index-link" class="relative">

        <div class="rev_slider_wrapper fullscreen-container" id="rev_slider_280_1_wrapper"
            style="background-color:#fff;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
            <div class="rev_slider fullscreenbanner" data-version="5.1.4" id="rev_slider_280_1" style="display:none;">
                <ul>
                    <!-- SLIDE -->
                    <li data-description="" data-easein="Power2.easeInOut" data-easeout="default" data-index="rs-898"
                        data-masterspeed="1500" data-param1="" data-param10="" data-param2="" data-param3="" data-param4=""
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
                        data-saveperformance="off" data-slotamount="default" data-title="Slide" data-transition="fade">
                        <!-- MAIN IMAGE -->
                        <?php $slide = \App\Models\Slider::first();?>
                        <img alt="img" class="rev-slidebg" data-bgparallax="12" data-bgposition="top center"
                            data-duration="30000" data-ease="Linear.easeNone" data-no-retina=""
                            {{-- src="{{ asset('assets/images/revo-slider/index-portfolio2.jpg') }}"> --}}
                            src="{{ asset('be_slider/' . $slide->img) }}">

                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->


                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption font-lato font-white tp-resizeme " id="slide-898-layer-2"
                            data-fontsize="['67','67','45','42']" data-fontweight="300" data-height="none"
                            data-lineheight="['80','80','80','80']" data-responsive_offset="on" data-splitin="none"
                            data-splitout="none"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:.95;","delay":900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                            data-whitespace="nowrap" data-width="none" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['center','center','center','center']"
                            data-voffset="['-20','-20','-20','-20']"
                            style="z-index: 8; white-space: nowrap; letter-spacing:10px; background: #363636; border-radius: 20px; padding: 7%;">
                            <img class="logotengah" src="{{ asset('1642351982.png') }}" alt="">
                            <p class="tulisan" style="font-size: 20px">UNIVERSAL AGRO COCO</p>
                        </div>

                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->

        <!-- SCROLL ICON -->
        <div class="local-scroll-cont font-white">
            <a href="#about" class="scroll-down smooth-scroll">
                <div class="icon icon-arrows-down"></div>
            </a>
        </div>

    </div>
    </div>
    <!-- FEATURES 1 we are creative -->
    <div id="about" class="page-section grey-light-bg">
        <div class="container fes1-cont">
            <div class="row">

                <div class="col-md-4 fes1-img-cont wow fadeInUp mb-20">
                    <img src="{{ asset('be_img_about/' . $data_about->img) }}" alt="img">
                </div>

                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="fes1-main-title-cont wow fadeInDown">
                                <div class="title-fs-60">
                                    BE<br>
                                    <span class="bold">CREATIVE</span>
                                </div>
                                <div class="line-3-100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12" style="text-align: justify;">
                            <div class="fes1-box wow fadeIn">
                                <div class="fes1-box-icon">
                                    <div class="icon icon-basic-helm"></div>
                                </div>
                                <h3>ABOUT US</h3>
                                <p>We (UAC Indonesia) are an Indonesian manufacturing company engaged in plantations and
                                    supplying raw materials from fresh coconut to processed coconut products that have the
                                    highest value and benefits for our consumers. Our company is very expert in coconut
                                    derivative industry, we have the best experience, make our clients satisfied with every
                                    cooperation as a project.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div id="clients-link" class="page-section p-110-cont">
        <div class="container">
            <div class="row">

                <div class="col-md-12 wow fadeInLeft">
                    <div class="mb-50">
                        <h2 class="section-title">OUR <span class="bold">VISION</span> AND <span
                                class="bold">MISSION</span></h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- CLIENTS 1 -->
                <div class="fes1-box col-md-6 wow fadeInUp">
                    <div class="fes4-box-icon">
                        <div class="icon icon-basic-todo-pencil"></div>
                    </div>
                    <blockquote class="quote mb-0 pl-50-min-1169" style="text-align: justify;">
                        <p>Our company was founded based on a bright vision to become one of the leading coconut suppliers
                            in Indonesia and prosper local Indonesian farmers who cultivate their cultivation with full soul
                            to create a better future and economically</p>
                        <footer>Vision.</footer>
                    </blockquote>
                </div>

                <div class=" fes1-box col-md-6 wow fadeInDown">
                    <div class="fes4-box-icon">
                        <div class="icon icon-basic-todo-txt"></div>
                    </div>
                    <blockquote class="quote mb-0 pl-50-min-1169" style="text-align: justify;">
                        <p>To realize our vision, we will fulfill clients request and satisfaction for a product that can be
                            accounted for in terms of product quality so that it can meet customer satisfaction. And provide
                            the needed support and education to our farmers in meeting our processed demands so that they
                            can meet the needs of our industry</p>
                        <footer>Mission.</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div id="services-link" class="page-section fes4-cont grey-light-bg">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn">
                        <h2 class="section-title">OUR <span class="bold">SERVICES</span></h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
                        <div class="fes4-title-cont">
                            <div class="fes4-box-icon">
                                <img src="{{asset('be_service/fococlipping-20220206-174727.png')}}" style="max-width: 50px" alt="">
                            </div>
                            <h3><span class="bold">QUALITY</span></h3>
                            <p>________</p>
                        </div>
                        <div>
                            The real quality of both quality products and services is the main thing for companies to
                            maintain company value.
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="400ms">
                        <div class="fes4-title-cont">
                            <div class="fes4-box-icon">
                                <img src="{{asset('be_service/fococlipping-20220206-174745.png')}}" style="max-width: 50px" alt="">
                            </div>
                            <h3><span class="bold">INNOVATION</span></h3>
                            <p>________</p>
                        </div>
                        <div>
                            Innovation covered by ideas, new ideas, and analytical research can develop a product that aims
                            to compete and have its own appeal in the international market.
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms" style="display: none;">
                        <div class="fes4-title-cont">
                            <div class="fes4-box-icon">
                                <img src="{{asset('be_service/fococlipping-20220206-17479.png')}}" style="max-width: 50px" alt="">
                            </div>
                            <h3><span class="bold">BRANDING</span></h3>
                            <p>________</p>
                        </div>
                        <div>
                            Donec vel luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam
                            volutpat suscipit antena.
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms">
                        <div class="fes4-title-cont">
                            <div class="fes4-box-icon">
                                <img src="{{asset('be_service/fococlipping-20220206-17479.png')}}" style="max-width: 50px" alt="">
                            </div>
                            <h3><span class="bold">COMMITMENT</span></h3>
                            <p>________</p>
                        </div>
                        <div>
                            Commitment or cooperation is important for the company where we are very enthusiastic to
                            maintain commitment to the client so that client satisfaction remains an evaluation for us to be
                            better
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                        <div class="fes4-title-cont">
                            <div class="fes4-box-icon">
                                <img src="{{asset('be_service/fococlipping-20220206-174644.png')}}" style="max-width: 50px" alt="">
                            </div>
                            <h3><span class="bold">INTEGRITY</span></h3>
                            <p>________</p>
                        </div>
                        <div>
                            Integrity is a principle that we have instilled since the company was founded. Our company has
                            good integrity by telling the truth without hiding anything, keeping the deals that have been
                            made, and being consistent all the time.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <!-- ABOUT US 2 -->
    <div id="clients-link" class="page-section ">
        <div class="container">
            <div class="row">
                <div class="indent-header">
                    <div class="slider-1" style="max-height: 500px;">
                        <div class="flex-container">
                            <div class="flexslider loading">
                                <ul class="slides">
                                    @foreach ($data_product as $item)
                                        <li>
                                            <div class="container" style="text-decoration-color: black">
                                                <div class="sixteen columns contain">
                                                    <h2 style="margin-top: 20px;" class="section-title pr-0 wow fadeInUp">
                                                        OUR <span class="bold">PRODUCT</span>
                                                    </h2>
                                                    <h2 data-toptitle="10%" class="font-dark top-28-767 flex-top-bot"
                                                        style="margin-left: 30px; text-transform: uppercase; font-size: 28px;">
                                                        <b>{{ $item->name }}</b>
                                                    </h2>
                                                    <a class="button small thin hover-dark bot-15-767 flex-bot-top mt-50"
                                                        style="margin-left: 25px; max-width: 100px;text-align: center;"
                                                        href="/all-product">SEE DETAIL</a>
                                                    <img style="max-width: 500" src="{{ asset('be_product/' . $item->img) }}"
                                                        class="item" data-topimage="5%" />
                                                </div>
                                            </div><!-- End Container -->
                                        </li><!-- End item -->
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div><!-- End slider -->
                </div>
            </div>
        </div>
        <!-- VIEW MORE PROJECTS  -->
        <div class="port-view-more-cont">
            <a class="port-view-more-inv" href="/all-product">VIEW ALL PRODUCT</a>
        </div>


        <!-- CONTACT INFO SECTION 1 -->
        <!-- CONTACT INFO SECTION 1 -->
        <div class="page-section p-110-cont" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-map"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">ADDRESS</span></h3>
                                <p>{{ $data_contact->alamat }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-mail"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">EMAIL</span></h3>
                                <p><a href="#">{{ $data_contact->email }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-smartphone"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">PHONE</span></h3>
                                <p>{{ $data_contact->telp }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- GOOGLE MAP & CONTACT FORM -->
        <div class="page-section gray-bg" >
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">
                            <!-- <div data-address="580 California Street, San Francisco, CA" id="google-map"></div> -->

                            <!-- *This is an example of using latitude and longitude if you need to use them instead of an address. Read more in the documentation.* -->
                            {{-- <div data-latitude="37.792888" data-longitude="-122.404041" id="google-map"></div> --}}
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3957.407620157608!2d112.74823310265508!3d-7.308019703658126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fba78a3b4027%3A0x9c42c5ff58de32d2!2sJl.%20Sidosermo%20I%20No.8a%2C%20Sidosermo%2C%20Kec.%20Wonocolo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060239!5e0!3m2!1sid!2sid!4v1636277246273!5m2!1sid!2sid"
                                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-form-cont">
                            <!-- TITLE -->
                            <div class="mb-40">
                                <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                            </div>

                            <!-- CONTACT FORM -->
                            <div class="" id="">
                                <form action="/client-message-post" method="post">@csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <!-- <label>Your name *</label> -->
                                            <input type="text" value="" data-msg-required="Please enter your name"
                                                maxlength="100" class="controled" name="nama" id="name"
                                                placeholder="NAME" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <!-- <label>Your email address *</label> -->
                                            <input type="email" value="" data-msg-required="Please enter your email address"
                                                data-msg-email="Please enter a valid email address" maxlength="100"
                                                class="controled" name="email" id="email" placeholder="EMAIL"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <!-- <label>Your email address *</label> -->
                                            <input type="number" value="" data-msg-required="Please enter your phone number"
                                                data-msg-email="Please enter a valid email address" maxlength="100"
                                                class="controled" name="telp" id="telp" placeholder="PHONE NUMBER"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-40">
                                            <!-- <label>Message *</label> -->
                                            <textarea maxlength="5000" data-msg-required="Please enter your message"
                                                rows="3" class="controled" name="komen" id="message"
                                                placeholder="MESSAGE" required></textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 text-center-xxs">
                                            <input type="submit" value="SEND MESSAGE" class="button medium gray"
                                                data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    @endsection
