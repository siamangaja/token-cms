@extends('layouts.app')
@section('title', $title)

@section('content')

    <!-- home -->
    <section class="home home--circle">
        <!-- particles -->
        <div id="particles-js" class="home__particles"></div>
        <!-- end particles -->

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-5 offset-xl-0">
                    <div class="home__content">
                        <p class="home__text">{!! $hHomepage->content !!}</p>
                        <a href="{{route('user.register')}}" class="btn btn--shadow">{{$hHomepage->title}}</a>
                    </div>
                </div>

                <div class="col-xl-5 offset-xl-1">
                    <div class="home__content home__content--desk">
                        <div class="servers">
                            <div class="servers__title">Server Status</div>
                            @forelse ($Serverstatus as $srv)
                                @if ($srv->status == 0)
                                    <div class="servers__item servers__item--red" title="Offline">
                                        {{$srv->title}}
                                    </div>
                                @elseif ($srv->status == 1)
                                    <div class="servers__item servers__item--green" title="Online">
                                        {{$srv->title}}
                                    </div>
                                @elseif ($srv->status == 2)
                                    <div class="servers__item servers__item--yellow" title="Unstable">
                                        {{$srv->title}}
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#services" data-scroll class="home__btn">
            <i class="ti-angle-double-down"></i>
        </a>
    </section>
    <!-- end home -->

    <!-- services -->
    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <center>
                        {!! $hService->content !!}
                    </center>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                 @forelse ($Services as $s)
                <div class="col-12 col-md-6 col-xl-3">
                    <!-- service -->
                    <div class="service">
                        {!! $s->icon !!}
                        <h3 class="service__title">{{$s->title}}</h3>
                        {!! $s->content !!}
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
    <div class="section section--bg" data-bg="img/section/section-bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <a class="section__video" href="https://www.youtube.com/watch?v=Pl8OlkkwRpc"><i class="ti-control-play"></i></a>
                        <h2 class="section__title section__title--white">Why Choose Us?</h2>
                        <p class="section__text section__text--white">Check out our mining farm setup. To bring you the best we must hire the best.</p>
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

    <!-- pricing -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <center>
                        {!! $hPrice->content !!}
                    </center>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-12 offset-xl-0">
                    <div class="price-wrap">
                        
                        @forelse ($Prices as $p)
                        <!-- price -->
                        <div class="price">
                            <h3 class="price__title">{{$p->title}}</h3>
                            <p>{!! $p->content !!}</p>
                            <span class="price__value">{{$p->price}}</span>
                            <p class="price__text">{{$p->notes}}</p>
                            <a href="{{$p->button}}"><button class="btn btn--border btn--center" type="button">Start Now</button></a>
                        </div>
                        <!-- end price -->
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing -->

    <!-- partners -->
    <section class="partners section--border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- partners slider -->
                    <div class="owl-carousel partners__slider">
                        @forelse ($Partners as $p)
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
    </section>
    <!-- end partners -->

@stop

<style>
    h1 {
        font-size: 52px;
        margin-bottom: 15px;
    }
</style>