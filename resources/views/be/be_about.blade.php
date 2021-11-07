@extends('layouts.be_master')

@section('head')
{{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Section</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="text-right" style="margin-bottom: 10px">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">...</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Create</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Remove All</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div id="errList" class="text-uppercase">

            </div>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

           <div class="row">
                <div class="card-body col-xl-6">
                    <div class="card-body">
                        <h5>SECTION ABOUT US</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formsubmitabout" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="p-4 border rounded">
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">HEADER</label>
                                    <input value="{{$data->judul}}" type="text" name="judul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationTextarea" class="form-label">CONTENT DESCRIPTION</label>
                                    <textarea rows="5" class="form-control" name="deskripsi" id="validationTextarea" placeholder="-" required>{!!$data->deskripsi!!}</textarea>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <input onchange="showPreviewttd(event);" type="file" name="ttd" class="form-control" aria-label="file example" placeholder="boleh kosong" accept="image/*">
                                    <div class="invalid-feedback">harus diisi</div>
                                    <div class="gambar text-right">
                                        <img src="{{asset('be_img_about_ttd/'.$data->ttd)}}" width="140" height="50" alt="" id="preview_ttd" class="mt-3"><br>
                                        <small>140px x 50px</small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input onchange="showPreview(event);" type="file" name="img" class="form-control" aria-label="file example" accept="image/*">
                                    <div class="invalid-feedback">harus diisi</div><br>
                                    <div class="preview text-right">
                                        <img src="{{asset('be_img_about/'.$data->img)}}" width="175" height="220" id="preview" class="img-thumbnail"><br>
                                        <small>350px x 440px</small>
                                    </div>
                                </div>
                                <input type="submit" id="btnaddslider" class="btn btn-primary" value="SUBMIT"><br>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="pattern_2 card-body col-xl-6">
                    <div class="card-body">
                        <h5>PREVIEW</h5>
                    </div>
                    <div class="card-body container margin_120_100 home_intro">
                        <div class="row justify-content-center d-flex align-items-center">
                            {{-- <div class="col-lg-12 text-lg-center d-none d-lg-block" data-cue="slideInUp">
                                <figure>
                                    <img src="img/home_1_placeholder.png" data-src="img/home_1.jpg" width="354" height="440" alt="" class="img-fluid lazy">
                                    <a href="https://www.youtube.com/watch?v=MO7Hi_kBBBg" class="btn_play" data-cue="zoomIn" data-delay="500"><span class="pulse_bt"><i class="arrow_triangle-right"></i></span></a>
                                </figure>
                            </div> --}}
                            <div class="col-xl-12" data-cue="slideInUp" id="preview_about_us" data-delay="500">
                                <div class="main_title">
                                    <span><em></em></span>
                                    <h2 id="about_header">Some words about us</h2>
                                    {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                                </div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p><img src="img/signature.png" width="140" height="50" alt="" class="mt-3"></p>
                            </div>
                        </div>
                        <!--/row -->
                    </div>
                    <!--/container -->
                </div>
           </div>
        </div>
    </div>
</div>


@endsection

@section('script')

<script type="text/javascript">
    function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview");
            preview.src = src;
        }
    }
    function showPreviewttd(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview_ttd");
            preview.src = src;
        }
    }
    $(document).ready(function(){
        $.ajax({
            url:"{{ route('be_about.preview')}}",
            type: 'get',
            dataType: 'json',
                success:function(data) {
                    document.getElementById('preview_about_us').innerHTML = data;
                    console.log(data);
            }
        });
    })

    // store data
    $('#formsubmitabout').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_about.store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnaddslider').attr('disabled','disabled');
                    $('#btnaddslider').val('Process');
                },
                success: function(response){
                    if(response.status == 200)
                    {
                        $('#btnaddslider').val('SUBMIT');
                        $('#btnaddslider').attr('disabled',false);
                        toastr.success(response.message);
                        $.ajax({
                            url:"{{ route('be_about.preview')}}",
                            type: 'get',
                            dataType: 'json',
                                success:function(data) {
                                    document.getElementById('preview_about_us').innerHTML = data;
                                    console.log(data);
                            }
                        });
                    }else{
                        $('#btnaddslider').val('SUBMIT');
                        $('#btnaddslider').attr('disabled',false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>'+err_values+'</div>');
                        });
                    }
                },
                error: function(data)
                {
                    console.log(data);
                    }
                });
            });
</script>
@endsection