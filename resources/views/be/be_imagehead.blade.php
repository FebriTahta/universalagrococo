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
                        <li class="breadcrumb-item active" aria-current="page">Image Header</li>
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
                    <div class="dropdown-divider"></div>
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
                        <h5>FOOTER SOCMED</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formsubmit1" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                            <input type="hidden" name="id" value="{{$header_about->id}}">
                            <div class="p-4 border rounded">
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">LINK FACEBOOK</label>
                                    <input value="{{$header_about->judul}}" type="text" name="judul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">NAME</label>
                                    <input value="{{$header_about->subjudul}}" type="text" name="subjudul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                
                                {{-- <div class="mb-3">
                                    <input onchange="showPreview1(event);" type="file" name="bg" class="form-control" aria-label="file example" accept="image/*">
                                    <div class="invalid-feedback">harus diisi</div><br>
                                    <div class="preview text-right">
                                        <img src="{{asset('be_header/'.$header_about->bg)}}" width="350" height="200" id="preview" class="img-thumbnail"><br>
                                        <small>1400px x 800px</small>
                                    </div>
                                </div> --}}
                                <input type="submit" id="btnadd1" class="btn btn-primary" value="SUBMIT"><br>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body col-xl-6">
                    <div class="card-body">
                        <h5>FOOTER SOCMED</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formsubmit2" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                            <input type="hidden" name="id" value="{{$header_product->id}}">
                            <div class="p-4 border rounded">
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">LINK TWITTER</label>
                                    <input value="{{$header_product->judul}}" type="text" name="judul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">NAME</label>
                                    <input value="{{$header_product->subjudul}}" type="text" name="subjudul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                
                                {{-- <div class="mb-3">
                                    <input onchange="showPreview2(event);" type="file" name="bg" class="form-control" aria-label="file example" accept="image/*">
                                    <div class="invalid-feedback">harus diisi</div><br>
                                    <div class="preview text-right">
                                        <img src="{{asset('be_header/'.$header_product->bg)}}" width="350" height="200" id="preview2" class="img-thumbnail"><br>
                                        <small>1400px x 800px</small>
                                    </div>
                                </div> --}}
                                <input type="submit" id="btnadd2" class="btn btn-primary" value="SUBMIT"><br>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body col-xl-6">
                    <div class="card-body">
                        <h5>FOOTER SOCMED</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formsubmit3" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                            <input type="hidden" name="id" value="{{$header_contact->id}}">
                            <div class="p-4 border rounded">
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">LINK INSTAGRAM</label>
                                    <input value="{{$header_contact->judul}}" type="text" name="judul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">NAME</label>
                                    <input value="{{$header_contact->subjudul}}" type="text" name="subjudul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                
                                {{-- <div class="mb-3">
                                    <input onchange="showPreview3(event);" type="file" name="bg" class="form-control" aria-label="file example" accept="image/*">
                                    <div class="invalid-feedback">harus diisi</div><br>
                                    <div class="preview text-right">
                                        <img src="{{asset('be_header/'.$header_contact->bg)}}" width="350" height="200" id="preview3" class="img-thumbnail"><br>
                                        <small>1400px x 800px</small>
                                    </div>
                                </div> --}}
                                <input type="submit" id="btnadd3" class="btn btn-primary" value="SUBMIT"><br>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body col-xl-6">
                    <div class="card-body">
                        <h5>FOOTER SOCMED</h5>
                    </div>
                    <div class="modal-body">
                        <form id="formsubmit4" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                            <input type="hidden" name="id" value="{{$header_blog->id}}">
                            <div class="p-4 border rounded">
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">LINK LINKEDIN</label>
                                    <input value="{{$header_blog->judul}}" type="text" name="judul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationServer01" class="form-label">NAME</label>
                                    <input value="{{$header_blog->subjudul}}" type="text" name="subjudul" class="form-control" placeholder="-" required>
                                    <div class="invalid-feedback">harus diisi</div>
                                </div>
                                
                                {{-- <div class="mb-3">
                                    <input onchange="showPreview4(event);" type="file" name="bg" class="form-control" aria-label="file example" accept="image/*">
                                    <div class="invalid-feedback">harus diisi</div><br>
                                    <div class="preview text-right">
                                        <img src="{{asset('be_header/'.$header_blog->bg)}}" width="350" height="200" id="preview4" class="img-thumbnail"><br>
                                        <small>1400px x 800px</small>
                                    </div>
                                </div> --}}
                                <input type="submit" id="btnadd4" class="btn btn-primary" value="SUBMIT"><br>
                            </div>
                        </form>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>


@endsection

@section('script')

<script type="text/javascript">
    function showPreview1(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview");
            preview.src = src;
        }
    }
    function showPreview2(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview2");
            preview.src = src;
        }
    }
    function showPreview3(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview3");
            preview.src = src;
        }
    }
    function showPreview4(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview4");
            preview.src = src;
        }
    }

    // store data
    $('#formsubmit1').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_imagehead.store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnadd1').attr('disabled','disabled');
                    $('#btnadd1').val('Process');
                },
                success: function(response){
                    if(response.status == 200)
                    {
                        $('#btnadd1').val('SUBMIT');
                        $('#btnadd1').attr('disabled',false);
                        toastr.success(response.message);
                    }else{
                        $('#btnadd1').val('SUBMIT');
                        $('#btnadd1').attr('disabled',false);
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

            $('#formsubmit2').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_imagehead.store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnadd2').attr('disabled','disabled');
                    $('#btnadd2').val('Process');
                },
                success: function(response){
                    if(response.status == 200)
                    {
                        $('#btnadd2').val('SUBMIT');
                        $('#btnadd2').attr('disabled',false);
                        toastr.success(response.message);
                    }else{
                        $('#btnadd2').val('SUBMIT');
                        $('#btnadd2').attr('disabled',false);
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

            $('#formsubmit3').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_imagehead.store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnadd3').attr('disabled','disabled');
                    $('#btnadd3').val('Process');
                },
                success: function(response){
                    if(response.status == 200)
                    {
                        $('#btnadd3').val('SUBMIT');
                        $('#btnadd3').attr('disabled',false);
                        toastr.success(response.message);
                    }else{
                        $('#btnadd3').val('SUBMIT');
                        $('#btnadd3').attr('disabled',false);
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

            $('#formsubmit4').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_imagehead.store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnadd4').attr('disabled','disabled');
                    $('#btnadd4').val('Process');
                },
                success: function(response){
                    if(response.status == 200)
                    {
                        $('#btnadd4').val('SUBMIT');
                        $('#btnadd4').attr('disabled',false);
                        toastr.success(response.message);
                    }else{
                        $('#btnadd4').val('SUBMIT');
                        $('#btnadd4').attr('disabled',false);
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