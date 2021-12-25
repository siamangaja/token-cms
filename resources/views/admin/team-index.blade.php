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
                <form id="" class="form" action="{{route('team.headline')}}" method="POST" enctype="multipart/form-data">
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
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{$title}} List</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">

        <!--begin::Card body-->
        <div class="card-body pt-0">

            <div class="notice d-flex p-6">
                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <div class="mb-3 mb-md-0 fw-bold">
                    <div class="fs-6 text-gray-700">
                    </div>
                    </div>
                    <a href="{{url('admin/team/add')}}" class="btn btn-success px-6 align-self-center text-nowrap">+ Add New</a>
                </div>
            </div>

            <br>

            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                    <!--begin::Head-->
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-50px">Image</th>
                            <th class="min-w-50px">Name</th>
                            <th class="min-w-50px">Position</th>
                            <th class="min-w-50px">Actions</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        @forelse ($data as $d)
                        <tr>
                            <td><img src="storage/images/{{ $d->image }}" width="90"></td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->position }}</td>
                            <td>
                                <a href="admin/team/{{$d->id}}/edit"><span class="btn btn-dark btn-sm"><i class="fa fa-file"></i> Edit</span></a> <a href="admin/team/{{$d->id}}/delete" onclick="return confirm('Are you sure to delete?')"><span class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Del</span></a>
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

    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->

</div>
<!--end::Container-->
</div>
<!--end::Post-->
@stop

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>