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

    <!-- team -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <center>
                        {!! $hTeam->content !!}
                    </center>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                @forelse ($team as $t)
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- member -->
                    <div class="team">
                        <div class="team__img">
                            <img src="storage/images/{{$t->image}}" alt="{{$t->name}}" title="{{$t->name}}">
                        </div>
                        <h3 class="team__title">{{$t->name}}</h3>
                        <p class="team__position">{{$t->position}}</p>
                    </div>
                    <!-- end member -->
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- end team -->

    <!-- partners -->
    <div class="partners section--border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- partners slider -->
                    <div class="owl-carousel partners__slider">
                        @forelse ($partners as $p)
                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <a href="{{$p->link}}" target="_blank"><img src="/storage/images/{{$p->image}}" alt="{{$p->title}}" title="{{$p->title}}"></a>
                            </a>
                        </div>
                        <!-- end slider item -->
                        @empty
                        @endforelse
                    </div>
                    <!-- end partners slider -->
                </div>
            </div>
        </div>
    </div>
    <!-- end partners -->

@stop