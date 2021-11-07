<!--start overlay-->
<div class="search-overlay"></div>
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
</div>
<div class="switcher-body">
    <div class="d-flex align-items-center">
        <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
        <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
    </div>
    <hr/>
    <h6 class="mb-0">Theme Styles</h6>
    <hr/>
    <div class="d-flex align-items-center justify-content-between">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
            <label class="form-check-label" for="lightmode">Light</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
            <label class="form-check-label" for="darkmode">Dark</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
            <label class="form-check-label" for="semidark">Semi Dark</label>
        </div>
    </div>
    <hr/>
    <div class="form-check">
        <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
        <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
    </div>
    <hr/>
    <h6 class="mb-0">Header Colors</h6>
    <hr/>
    <div class="header-colors-indigators">
        <div class="row row-cols-auto g-3">
            <div class="col">
                <div class="indigator headercolor1" id="headercolor1"></div>
            </div>
            <div class="col">
                <div class="indigator headercolor2" id="headercolor2"></div>
            </div>
            <div class="col">
                <div class="indigator headercolor3" id="headercolor3"></div>
            </div>
            <div class="col">
                <div class="indigator headercolor4" id="headercolor4"></div>
            </div>
            <div class="col">
                <div class="indigator headercolor5" id="headercolor5"></div>
            </div>
            <div class="col">
                <div class="indigator headercolor6" id="headercolor6"></div>
            </div>
            <div class="col">
                <div class="indigator headercolor7" id="headercolor7"></div>
            </div>
            <div class="col">
                <div class="indigator headercolor8" id="headercolor8"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{asset('be/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('be/js/jquery.min.js')}}"></script>
<script src="{{asset('be/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('be/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('be/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!--app JS-->
<script src="{{asset('be/js/app.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- Toast -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@yield('script')
</body>

</html>