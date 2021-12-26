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

    <!-- services -->
    <section class="section">
        <div class="container">
            <div class="row row--grid">

                @forelse ($data as $d)
                <div class="col-12 col-md-6 col-xl-3">
                    <!-- service -->
                    <div class="service">
                        {!! $d->icon !!}
                        <h3 class="service__title">{{$d->title}}</h3>
                        {!! $d->content !!}
                    </div>
                    <!-- end service -->
                </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- end services -->

    <!-- video -->
    <div class="section section--bg" data-bg="/img/section/section-bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <a class="section__video" href="https://www.youtube.com/watch?v=Pl8OlkkwRpc"><i class="ti-control-play"></i></a>
                        <p class="section__text section__text--white section__text--head">Check out our mining farm setup. To bring you the best we must hire the best.</p>
                    </div>
                    <!-- end section title -->
                </div>
            </div>
        </div>
    </div>
    <!-- end video -->

    <!-- currencies -->
    <section class="section section--border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <p class="section__text">
                        <center>
                            {!! $hCurrencies->content !!}
                        </center>
                    </p>
                </div>
            </div>

            <div class="row">
                @forelse ($Currencies as $c)
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="currenc">
                        <i class="{{$c->icon}}"></i>
                        <span class="currenc__name">{{$c->name}}</span>
                        <span class="currenc__hash">{{$c->price}}</span>
                    </div>
                </div>
                @empty
                @endforelse

                <div class="col-12">
                    <a href="{{route('user.register')}}" class="btn btn--center btn--section btn--shadow">get started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end currencies -->

@stop