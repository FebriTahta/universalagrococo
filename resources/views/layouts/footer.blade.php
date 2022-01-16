{{-- <footer>
    <div class="frame black"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="footer_wp">
                    <i class="icon_pin_alt"></i>
                    <h3>Address</h3>
                    <p>{{$data_contact->alamat}}</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="footer_wp">
                    <i class="icon_phone"></i>
                    <h3>Shopping</h3>
                    <p><a href="tel:{{$data_contact->telp}}">{{$data_contact->telp}}</a><br><a href="#0">universalagrococo.com</a></p>
                </div>
            </div>
            
            
        </div>
        <!-- /row-->
        <hr>
        <div class="row">
            <div class="col-sm-5">
                <p class="copy">© 2021 Universal Agro Coco - All rights reserved</p>
            </div>
            {{-- <div class="col-sm-7">
                <div class="follow_us">
                    <ul>
                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
        <p class="text-center"></p>
    </div>
</footer> --}}
<!--/footer-->

<div id="toTop"></div><!-- Back to top button -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/common_scripts.min.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/common_func.js')}}"></script>
<script src="{{asset('phpmailer/validate.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('js/jquery.cookiebar.js')}}"></script>
<script>
    $(document).ready(function() {
        'use strict';
        $.cookieBar({
            fixed: true
        });
    });
</script>

<!-- SPECIFIC SCRIPTS (wizard form) -->
<script src="{{asset('js/wizard/wizard_scripts.min.js')}}"></script>
<script src="{{asset('js/wizard/wizard_func.js')}}"></script>
@yield('script')
</body>
</html>