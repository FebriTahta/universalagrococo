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
            {{-- <div class="text-right" style="margin-bottom: 10px">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">...</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#exampleVerticallycenteredModal">Create</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div> --}}
            <div class="card">
                <div id="errList" class="text-uppercase">

                </div>
            </div>

            <div class="row">
                <div class="card col-md-4" style="padding: 1%">
                    <div class="col-md-12">
                        <form method="POST" id="formadd">@csrf
                            <div class="form-group">
                                <label>Nama Social Media (Facebook / Instagram / Dsb)</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Link (diawali https://)</label>
                                <input type="text" class="form-control" name="link" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="btnadd" class="btn btn-primary btn-sm" value="submit">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card col-md-8" style="padding: 1%">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%; ">
                            <thead>
                                <tr>
                                    <th>Social Media</th>
                                    <th>Link</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th>Social Media</th>
                                    <th>Link</th>
                                    <th>Option</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalupdate" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">UPDATE SOCIAL MEDIA</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formupdate" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="">Social Media Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Social Media Link</label>
                            <input type="text" class="form-control" id="link" name="link" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" id="btnupdate" class="btn btn-primary" value="update">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalhapus" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">HAPUS SOCIAL MEDIA</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formhapus" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group text-center">
                            <p>YAKIN AKAN MENGHAPUS SOCIAL MEDIA INI ?</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" id="btnhapus" class="btn btn-danger" value="hapus">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('#modalupdate').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var link = button.data('link')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #link').val(link);            
        })
        $('#modalhapus').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
                   
        })
        // store data
        $('#formupdate').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be_social_link_post') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnupdate').attr('disabled', 'disabled');
                    $('#btnupdate').val('Process');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $('#btnupdate').val('update');
                        $('#btnupdate').attr('disabled', false);
                        // $("#formupdate")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        // $('#modalupdate').hide('hide');
                        toastr.success(response.message);
                    } else {
                        $('#btnupdate').val('subimt');
                        $('#btnupdate').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formhapus').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be_social_link_dell') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnhapus').attr('disabled', 'disabled');
                    $('#btnhapus').val('Process');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $('#btnhapus').val('hapus');
                        $('#btnhapus').attr('disabled', false);
                        $("#formhapus")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        // $('#modalupdate').hide('hide');
                        toastr.warning(response.message);
                    } else {
                        $('#btnhapus').val('subimt');
                        $('#btnhapus').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formsubmit3').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be_imagehead.store') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd3').attr('disabled', 'disabled');
                    $('#btnadd3').val('Process');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $('#btnadd3').val('SUBMIT');
                        $('#btnadd3').attr('disabled', false);
                        toastr.success(response.message);
                    } else {
                        $('#btnadd3').val('SUBMIT');
                        $('#btnadd3').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('be_social_link_post') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd').attr('disabled', 'disabled');
                    $('#btnadd').val('Process');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $('#btnadd').val('submit');
                        $('#btnadd').attr('disabled', false);
                        $("#formadd")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        toastr.success(response.message);
                    } else {
                        $('#btnadd').val('subimt');
                        $('#btnadd').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $(function() {

            var table = $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('be_social_link') }}",
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'link',
                        name: 'link'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });
    </script>
@endsection
