@extends('layouts.main')
@section('title', $title)

@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">
<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">

    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">

        <!--begin::Card body-->
        <div class="card-body pt-0">
            
            <br>
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <br>

            <div class="row">
                <div class="col-lg-10">
                    <h3 class="fw-bolder m-0">{{$title}}</h3>
                </div>
                <div class="col-lg-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target='#AddServer' class="btn btn-success px-6 align-self-center text-nowrap">+ Add New</a>
                </div>
            </div>

            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                    <!--begin::Head-->
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-50px">Title</th>
                            <th class="min-w-50px">Status</th>
                            <th class="min-w-50px">Last Update</th>
                            <th class="min-w-50px">Actions</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        @forelse ($data as $d)
                        <tr>
                            <td>{{ $d->title }}</td>
                            <td>
                                @php if ($d->status == 0) {
                                    $status = '<span class="badge badge-light-danger fw-bolder px-4 py-3">Offline</span>';
                                } else if ($d->status == 1) {
                                    $status = '<span class="badge badge-light-success fw-bolder px-4 py-3">Online</span>';
                                } else {
                                    $status = '<span class="badge badge-light-warning fw-bolder px-4 py-3">Unstable</span>';
                                }
                                @endphp
                                {!! $status !!}
                            </td>
                            <td>{{ $d->updated_at }}</td>
                            <td>
                                <a href="#" id="ServerEdit" data-bs-toggle="modal" data-bs-target='#practice_modal' data-id="{{ $d->id }}"><span class="btn btn-dark btn-sm"><i class="fa fa-file"></i> Edit</span></a>
                                <a href="admin/server-status/{{$d->id}}/delete" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <div class="fs-6 text-gray-700 pe-7" style="font-style: italic;">No Data...</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <!--end::Body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->

            <div class="d-flex justify-content-start">
                {{ $data->links() }}
            </div>

        </div>
        <!--end::Card body-->


    <!--begin::Modal-->
    <div class="modal fade" id="practice_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-body py-10 px-lg-17">
                <form class="form" method="POST" action="{{route('server.update')}}">
                @csrf
                <div class="m-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">Edit Server Status</h2>
                </div>
                <input type="text" class="form-control" id="id" name="id" value="{{$d->id}}" readonly style="display:none;">

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{$d->title}}">

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="0" {{($d->status =='0') ? 'selected' : ''}}> Offline </option>
                    <option value="1" {{($d->status =='1') ? 'selected' : ''}}> Online </option>
                    <option value="2" {{($d->status =='2') ? 'selected' : ''}}> Unstable </option>
                </select>

                <br><button type="submit" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="AddServer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-body py-10 px-lg-17">
                <form class="form" method="POST" action="{{route('server.add')}}">
                @csrf
                <div class="m-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">Add Server Status</h2>
                </div>

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="" required="">

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="0"> Offline </option>
                    <option value="1"> Online </option>
                    <option value="2"> Unstable </option>
                </select>

                <br><button type="submit2" id="addButton" class="btn btn-success addButton">Submit</button>

                </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->

</div>
<!--end::Container-->
</div>
<!--end::Post-->
@stop

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
$(document).ready(function () {
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('body').on('click', '#submit', function (event) {
    event.preventDefault()
    var id = $("#id").val();
    var title = $("#title").val();
    var status = $("#status").val();
    $.ajax({
      url: 'admin/server-status',
      type: "POST",
      data: {
        id: id,
        title: title,
        status: status,
      },
      dataType: 'json',
      success: function (data) {
          $('#practice_modal').modal('hide');
          window.location.reload(true);
      }
  });
});

$('body').on('click', '#ServerEdit', function (event) {
    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('admin/server-status/' + id + '/edit', function (data) {
         $('#submit').val("Edit category");
         $('#practice_modal').modal('show');
         $('#id').val(data.data.id);
         $('#title').val(data.data.title);
         $('#status').val(data.data.status);
     })
});

$('body').on('click', '#submit2', function (event) {
    event.preventDefault()
    var title = $("#title").val();
    var status = $("#status").val();
    $.ajax({
      url: 'admin/server-status/add',
      type: "POST",
      data: {
        title: title,
        status: status,
      },
      dataType: 'json',
      success: function (data) {
          $('#AddServer').modal('hide');
          window.location.reload(true);
      }
  });
});

}); 
</script>