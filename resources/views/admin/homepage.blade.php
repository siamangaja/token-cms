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
                <form id="" class="form" action="{{route('homepage.headline')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 fv-row">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Headline Text</label>
                        <textarea id="content" name="content" class="ckeditor" rows="10" cols="50">{!! htmlentities($headline->content) !!}</textarea>
                    </div>

                    <div class="col-lg-12 fv-row">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Button Action</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{$headline->title}}" required>
                    </div>

                    <div class="col-lg-12 fv-row">
                        <br><button type="submit" class="btn btn-primary" id="submit">Update</button>
                    </div>
                </form>
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