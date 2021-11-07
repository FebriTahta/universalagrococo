@extends('layouts.be_master')

@section('head')
{{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Interaction</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Product Comments</li>
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
                                <th>Product</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Komentar</th>
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

<div id="modalupdateproduct" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">DETAIL KOMENTAR</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <div class="p-4 border rounded">
                    <div class="mb-3">
                        <label for="validationServer01" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control is-invalid" placeholder="-" required>
                    </div>
                    <div class="mb-3">
                        <label for="validationServer01" class="form-label">email</label>
                        <input type="email" id="email" name="email" class="form-control is-invalid" placeholder="-" required>
                    </div>
                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Komentar</label>
                        <textarea id="deskripsi_update" rows="4" name="deskripsi" class="form-control is-invalid" id="validationTextarea" placeholder="-" required></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div id="modaldel" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">HAPUS KOMENTAR</h5>
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
var email = button.data('email')
var deskripsi = button.data('deskripsi')
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #name').val(name);
modal.find('.modal-body #email').val(email);
modal.find('.modal-body #deskripsi_update').val(deskripsi);
})
    // view data table
    $(document).ready(function(){
      var table = $('#example').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('be_produkomen.data') }}",
          columns: [
              {data: 'product', name: 'product'},
              {data: 'nama', name: 'nama'},
              {data: 'email', name: 'email'},
              {data: 'komen', name: 'komen'},
              {
                  data: 'action', 
                  name: 'action', 
                  orderable: true, 
                  searchable: true
              },
          ]
      });
    });

            $('#formdel').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('be_produkomen.dell')}}",
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