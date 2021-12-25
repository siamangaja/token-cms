@extends('layouts.app')
@section('title', $title)

@section('content')

    <!-- page title -->
    <section class="section section--first section--bg" data-bg="img/section/section-bg.jpg">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h2 class="section__title section__title--white">{{$title}}</h2>
                </div>
                <!-- end section title -->
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- faq -->
    <section class="section section--border-bottom">
        <div class="container">
            <div class="row">
                @forelse ($data as $d)
                <div class="col-12 col-md-6">
                    <div class="faq">
                        <h3 class="faq__title">{{$d->title}}</h3>
                        {!! $d->content !!}
                        <br>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
            
            <center>{{ $data->links() }}</center>

        </div>
    </section>
    <!-- end faq -->

<style>
    .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
        display: none !important;
    }
</style>

@stop