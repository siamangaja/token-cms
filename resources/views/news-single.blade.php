@extends('layouts.app')
@section('title', $title)

@section('content')

    <!-- page title -->
    <section class="section section--first section--bg" data-bg="/img/section/section-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h2 class="section__title section__title--white">News</h2>
                    <p class="section__text section__text--white"><span class="breadcrumb"><a href="{{route('frontpage')}}">Home</a> / <a href="{{route('news')}}">News</a> / {{ $data->title }}</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- detail news -->
    <div class="section section--border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="article">
                        <!-- article content -->
                        <div class="article__content">
                            <span class="article__date">{{ $data->created_at }}</span>
                            <h1>{{ $data->title }}</h1>
                            <img src="/storage/images/{{ $data->thumbnail }}" alt="{{ $data->title }}" title="{{ $data->title }}">
                            <p>{!! $data->content !!}</p>
                        </div>
                        <!-- end article content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end detail news -->

@stop

<style type="text/css">
    .breadcrumb {
        font-size: 14px;
    }
    .breadcrumb a{
        color: #ccc;
        font-weight: 500;
    }
</style>