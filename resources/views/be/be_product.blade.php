@extends('layouts.be_master')

@section('head')
{{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Product</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Product List</li>
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
            
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

           
            <div class="card-body">
                <div id="errList" class="text-uppercase">

                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; ">
                        <thead class="text-uppercase ">
                            <tr>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD NEW PRODUCT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formaddslider" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                <div class="modal-body">
                    <div class="p-4 border rounded">
                        <div class="mb-3">
                            <label for="validationServer01" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control is-invalid" placeholder="-" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control is-invalid" id="validationTextarea" placeholder="-" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" name="img" class="form-control" aria-label="file example" accept="image/*" required>
                            <div class="invalid-feedback">harus diisi</div><br>
                            <small>1000px x 1000px</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" id="btnaddslider" class="btn btn-primary" value="Add Product">
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalupdateproduct" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">UPDATE PRODUCT</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formupdateproduct" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="p-4 border rounded">
                        <div class="mb-3">
                            <label for="validationServer01" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control is-invalid" placeholder="-" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi_update" rows="4" name="deskripsi" class="form-control is-invalid" id="validationTextarea" placeholder="-" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" name="img" class="form-control" aria-label="file example" accept="image/*">
                            <div class="invalid-feedback">harus diisi</div>
                        </div>
                        <div class="mb-3">
                            <img src="" id="preview" width="200" height="200" alt=""><br>
                            <small>800px x 800px</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" id="btnupslider" class="btn btn-primary" value="Update Product">
                </div>
            </form>
        </div>
    </div>
</div>

  <div id="modaldel" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">UPDATE PRODUCT</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formdel" class="was-validated" enctype="multipart/form-data" method="post">@csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id_del">
                    <div class="p-4 border rounded">
                        <p>YAKIN AKAN MENGHAPUS ITEM INI ?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" id="btndel" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- summernote css/js -->
<script type="text/javascript">

$('#modaldel').on('show.bs.modal', function(event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var modal = $(this)
modal.find('.modal-body #id_del').val(id);
})

//update data product
$('#modalupdateproduct').on('show.bs.modal', function(event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var name = button.data('name')
var deskripsi = button.data('deskripsi')
var img = button.data('img')
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #name').val(name);
modal.find('.modal-body #deskripsi_update').val(deskripsi);
document.getElementById("preview").src = img;
})
    // view data table
    $(document).ready(function(){
      var table = $('#example').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('be_product.data') }}",
          columns: [
              {data: 'img', name: 'img'},
              {data: 'name', name: 'name'},
              {data: 'deskripsi', name: 'deskripsi'},
              {
                  data: 'action', 
                  name: 'action', 
                  orderable: true, 
                  searchable: true
              },
          ]
      });
    });

    // store data
    $('#formaddslider').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_product.store')}}",
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
                        $("#formaddslider")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btnaddslider').val('Add Product');
                        $('#btnaddslider').attr('disabled',false);
                        $('#exampleVerticallycenteredModal').modal('hide');
                        toastr.success(response.message);
                    }else{
                        $("#formaddslider")[0].reset();
                        $('#btnaddslider').val('Add Product');
                        $('#btnaddslider').attr('disabled',false);
                        $('#exampleVerticallycenteredModal').modal('hide');
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
    
            $('#formupdateproduct').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_product.store')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnupslider').attr('disabled','disabled');
                    $('#btnupslider').val('Process');
                },
                success: function(response){
                    if(response.status == 200)
                    {
                        // $("#formupdateproduct")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btnupslider').val('Update Product');
                        $('#btnupslider').attr('disabled',false);
                        $('#modalupdateproduct').modal('hide');
                        toastr.success(response.message);
                    }else{
                        // $("#formupdateproduct")[0].reset();
                        $('#btnupslider').val('Update Product');
                        $('#btnupslider').attr('disabled',false);
                        $('#modalupdateproduct').modal('hide');
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

            $('#formdel').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_product.dell')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btndel').attr('disabled','disabled');
                    $('#btndel').val('Process');
                },
                success: function(response){
                    if(response.status == 200)
                    {
                        // $("#formupdateproduct")[0].reset();
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#btndel').val('Delete');
                        $('#btndel').attr('disabled',false);
                        $('#modaldel').modal('hide');
                        toastr.success(response.message);
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