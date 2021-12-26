@extends('layouts.main')
@section('title', $title)

@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">

<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{$title}}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">

        <!--begin::Card body-->
        <div class="card-body pt-0">

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

            <div class="row">
                <form id="" class="form" action="{{route('currencies.headline')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 fv-row">
                        <textarea id="content" name="content" class="ckeditor" rows="10" cols="50">{!! htmlentities($headline->content) !!}</textarea>
                    </div>
                    <div class="col-lg-12 fv-row">
                        <br><button type="submit" class="btn btn-primary" id="submit">Save</button>
                    </div>
                </form>
            </div>

        </div>
        <!--end::Card body-->

    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->


<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">

    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">

        <!--begin::Card body-->
        <div class="card-body pt-0">
            <br><br>
            <div class="row">
                <div class="col-lg-10">
                    <h3 class="fw-bolder m-0">{{$title}} List</h3>
                </div>
                <div class="col-lg-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target='#AddData' class="btn btn-success px-6 align-self-center text-nowrap">+ Add New</a>
                </div>
            </div>

            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                    <!--begin::Head-->
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-50px">Icon</th>
                            <th class="min-w-50px">Name</th>
                            <th class="min-w-50px">Price</th>
                            <th class="min-w-50px">Last Update</th>
                            <th class="min-w-50px">Actions</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        @forelse ($data as $d)
                        <tr>
                            <td>{{ $d->icon }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->price }}</td>
                            <td>{{ $d->updated_at }}</td>
                            <td>
                                <a href="#" id="EditData" data-bs-toggle="modal" data-bs-target='#practice_modal' data-id="{{ $d->id }}"><span class="btn btn-dark btn-sm"><i class="fa fa-file"></i> Edit</span></a>
                                <a href="admin/currencies/{{$d->id}}/delete" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
                <form class="form" method="POST" action="{{route('currencies.update')}}">
                @csrf
                <div class="m-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">Edit Data</h2>
                </div>
                <input type="text" class="form-control" id="id" name="id" value="{{$d->id}}" readonly style="display:none;">

                <label class="col-lg-12 col-form-label required fw-bold fs-12">Icon</label>
                <small><i>(https://allienworks.github.io/cryptocoins/icons-demo)</i></small>
                <input type="text" class="form-control" id="icon" name="icon" placeholder="" value="{{$d->icon}}" required>

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$d->name}}" required>

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="" value="{{$d->price}}" required>

                <br><button type="submit1" class="btn btn-success">Save</button>

                </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="AddData" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-body py-10 px-lg-17">
                <form class="form" method="POST" action="{{route('currencies.add')}}">
                @csrf
                <div class="m-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">Add Data</h2>
                </div>

                <label class="col-lg-12 col-form-label required fw-bold fs-12">Icon</label>
                <small><i>(https://allienworks.github.io/cryptocoins/icons-demo)</i></small>
                <input type="text" class="form-control" id="icon" name="icon" placeholder="" required>

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" required>

                <label class="col-lg-4 col-form-label required fw-bold fs-6">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="" required>

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

$('body').on('click', '#submit1', function (event) {
    event.preventDefault()
    var id = $("#id").val();
    var icon = $("#icon").val();
    var name = $("#name").val();
    var price = $("#price").val();
    $.ajax({
      url: 'admin/currencies',
      type: "POST",
      data: {
        id: id,
        icon: icon,
        name: name,
        price: price,
      },
      dataType: 'json',
      success: function (data) {
          $('#practice_modal').modal('hide');
          window.location.reload(true);
      }
  });
});

$('body').on('click', '#EditData', function (event) {
    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('admin/currencies/' + id + '/edit', function (data) {
         $('#practice_modal').modal('show');
         $('#id').val(data.data.id);
         $('#icon').val(data.data.icon);
         $('#name').val(data.data.name);
         $('#price').val(data.data.price);
     })
});

$('body').on('click', '#submit2', function (event) {
    event.preventDefault()
    var icon = $("#icon").val();
    var name = $("#name").val();
    var price = $("#price").val();
    $.ajax({
      url: 'admin/currencies/add',
      type: "POST",
      data: {
        icon: icon,
        name: name,
        price: price,
      },
      dataType: 'json',
      success: function (data) {
          $('#AddData').modal('hide');
          window.location.reload(true);
      }
  });
});

}); 
</script>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>