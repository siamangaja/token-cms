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
                    <a href="{{url('admin/faq/add')}}" class="btn btn-success px-6 align-self-center text-nowrap">+ Add New</a>
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
                            <th class="min-w-50px">Title</th>
                            <th class="min-w-100px">Content</th>
                            <th class="min-w-50px">Actions</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        @forelse ($data as $d)
                        <tr>
                            <td>{{ $d->title }}</td>
                            <td><small>{!! Str::limit( strip_tags( $d->content ), 150 ) !!}</small></td>
                            <td>
                                <a href="admin/faq/{{$d->id}}/edit"><span class="btn btn-dark btn-sm"><i class="fa fa-file"></i> Edit</span></a> <a href="admin/faq/{{$d->id}}/delete" onclick="return confirm('Are you sure to delete?')"><span class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Del</span></a>
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