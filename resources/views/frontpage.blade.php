<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cryptocoins-colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>{{ opsi('website') }} - {{ opsi('slogan') }}</title>
</head>
<body>
    <!-- header -->
    <header class="header">
        <!-- logo -->
        <div class="header__logo">
            <a href="{{url('/')}}">
                <img src="img/logo.svg" alt="">
            </a>
        </div>
        <!-- end logo -->

        <!-- navigation -->
        <ul class="header__nav">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('news')}}">News</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('price')}}">Price</a></li>
            <li><a href="{{route('faq')}}">FAQ</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
        <!-- end navigation -->

        <a href="{{route('login')}}" class="btn btn--header">sign in</a>

        <!-- mob button -->
        <button class="header__menu" type="button">
            <i class="ti-menu"></i>
            <i class="ti-close"></i>
        </button>
        <!-- end mob button -->
    </header>
    <!-- end header -->

    <!-- home -->
    <section class="home home--circle">
        <!-- particles -->
        <div id="particles-js" class="home__particles"></div>
        <!-- end particles -->

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-5 offset-xl-0">
                    <div class="home__content">
                        <h1 class="home__title">Start Bitcoin mining today!</h1>
                        <p class="home__text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                        <a href="{{route('user.register')}}" class="btn btn--shadow">get started</a>
                    </div>
                </div>

                <div class="col-xl-5 offset-xl-1">
                    <div class="home__content home__content--desk">
                        <div class="servers">
                            <div class="servers__title">Server status</div>
                            <div class="servers__item servers__item--green" title="Online">
                                Europe - Amsterdam
                            </div>
                            <div class="servers__item servers__item--green" title="Online">
                                China - Hong Kong
                            </div>
                            <div class="servers__item servers__item--yellow" title="Unstable">
                                India - Chennai
                            </div>
                            <div class="servers__item servers__item--green" title="Online">
                                USA - San Jose
                            </div>
                            <div class="servers__item servers__item--green" title="Online">
                                Japan - Tokyo
                            </div>
                            <div class="servers__item servers__item--red" title="Offlane">
                                Brazil - Sao Paulo
                            </div>
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
                    <h2 class="section__title">Smart Mine Template</h2>
                    <p class="section__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <!-- service -->
                    <div class="service">
                        <i class="ti-bolt"></i>
                        <h3 class="service__title">Instant Connection</h3>
                        <p class="service__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered <b>alteration in some form</b>, by injected.</p>
                    </div>
                    <!-- end service -->
                </div>

                <div class="col-12 col-md-6 col-xl-3">
                    <!-- service -->
                    <div class="service">
                        <i class="ti-wallet"></i>
                        <h3 class="service__title">Instant Conclusion</h3>
                        <p class="service__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.</p>
                    </div>
                    <!-- end service -->
                </div>

                <div class="col-12 col-md-6 col-xl-3">
                    <!-- service -->
                    <div class="service">
                        <i class="ti-stats-up"></i>
                        <h3 class="service__title">Detailed Statistics</h3>
                        <p class="service__text">There are many variations of passages of Lorem Ipsum available, but the <a href="#">majority</a> have suffered alteration in some form, by injected.</p>
                    </div>
                    <!-- end service -->
                </div>

                <div class="col-12 col-md-6 col-xl-3">
                    <!-- service -->
                    <div class="service">
                        <i class="ti-harddrives"></i>
                        <h3 class="service__title">Power Distribution</h3>
                        <p class="service__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.</p>
                    </div>
                    <!-- end service -->
                </div>
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
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h2 class="section__title">Supported currencies</h2>
                    <p class="section__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc BTC currenc__icon"></i>
                        <span class="currenc__name">Bitcoin</span>
                        <span class="currenc__hash">43.1 PH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc ETC-alt currenc__icon"></i>
                        <span class="currenc__name">Ethereum Classic</span>
                        <span class="currenc__hash">20.0 GH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc ETH currenc__icon"></i>
                        <span class="currenc__name">Ethereum</span>
                        <span class="currenc__hash">120.1 GH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc START currenc__icon"></i>
                        <span class="currenc__name">Startcoin</span>
                        <span class="currenc__hash">28.6 kH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc LTC currenc__icon"></i>
                        <span class="currenc__name">Litecoin</span>
                        <span class="currenc__hash">2.7 GH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc XMR currenc__icon"></i>
                        <span class="currenc__name">Monero</span>
                        <span class="currenc__hash">44.6 MH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc VTC currenc__icon"></i>
                        <span class="currenc__name">Vertcoin</span>
                        <span class="currenc__hash">1.6 MH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc IFC currenc__icon"></i>
                        <span class="currenc__name">Infinitecoin</span>
                        <span class="currenc__hash">184.1 kH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc SLS currenc__icon"></i>
                        <span class="currenc__name">Salus</span>
                        <span class="currenc__hash">6.2 MH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc XPM currenc__icon"></i>
                        <span class="currenc__name">PrimeCoin</span>
                        <span class="currenc__hash">12.1 MH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc DASH currenc__icon"></i>
                        <span class="currenc__name">Dash</span>
                        <span class="currenc__hash">198.8 kH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <!-- currenc -->
                    <div class="currenc">
                        <i class="cc SDC currenc__icon"></i>
                        <span class="currenc__name">Shadow</span>
                        <span class="currenc__hash">13.5 MH/s</span>
                    </div>
                    <!-- end currenc -->
                </div>

                <div class="col-12">
                    <a href="{{route('user.register')}}" class="btn btn--center btn--section btn--shadow">get started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end currencies -->

    <!-- calculator -->
    <section class="section section--blue">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title">How Much Will I Earn?</h2>
                </div>
                <!-- end section title -->

                <!-- form -->
                <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <form action="#" class="calculate">
                        <div class="row">
                            <div class="col-12 col-sm-7 col-md-5 col-xl-5">
                                <input type="text" class="form__input" placeholder="Hashrate">
                            </div>

                            <div class="col-12 col-sm-5 col-md-3 col-xl-3">
                                <div class="form__select-wrap">
                                    <select class="form__select">
                                        <option value="ths">TH/s</option>
                                        <option value="phs">PH/s</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 col-xl-4">
                                <button class="btn btn--center" type="button">Calculate</button>
                            </div>

                            <div class="col-12">
                                <p class="calculate__text">0.000 000 00 BTC ($0) / 0.000 000 00 BCH ($0)<br>(will change based on mining difficulty and Bitcoin price)</p>
                                <span class="calculate__info">Estimated 24 hour revenue<a href="#"><i class="ti-info"></i></a></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end form -->
            </div>
        </div>
    </section>
    <!-- end calculator -->

    <!-- pricing -->
    <section class="section section--border-bottom">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h2 class="section__title">Pricing</h2>
                    <p class="section__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-12 offset-xl-0">
                    <div class="price-wrap">
                        <!-- price -->
                        <div class="price">
                            <h3 class="price__title">Small</h3>
                            <ul class="price__list">
                                <li><b>Minimal Hashedrate:</b> 1 MH/s</li>
                                <li><b>Service pay:</b> 0.005$ / 1 MH/s / 24h</li>
                                <li><b>Equipment:</b> HashCoins SCRYPT</li>
                                <li>Automatic charging in BTC</li>
                                <li><b>1 year</b></li>
                            </ul>
                            <span class="price__value">$2.50</span>
                            <p class="price__text">for 1 MH/s</p>
                            <button class="btn btn--border btn--center" type="button">Buy now</button>
                        </div>
                        <!-- end price -->

                        <!-- price -->
                        <div class="price">
                            <h3 class="price__title">Medium</h3>
                            <ul class="price__list">
                                <li><b>Minimal Hashedrate:</b> 10 GH/s</li>
                                <li><b>Service pay:</b> 0.0035$ / 10 GH/s / 24h</li>
                                <li><b>Equipment:</b> HashCoins SHA-256</li>
                                <li>Automatic charging in BTC</li>
                                <li><b>1 year</b></li>
                            </ul>
                            <span class="price__value">$5.20</span>
                            <p class="price__text">for 10 GH/s</p>
                            <button class="btn btn--border btn--center" type="button">Buy now</button>
                        </div>
                        <!-- end price -->

                        <!-- price -->
                        <div class="price price--best">
                            <h3 class="price__title">Large</h3>
                            <ul class="price__list">
                                <li><b>Minimal Hashedrate:</b> 100 KH/s</li>
                                <li><b>Service pay:</b> No</li>
                                <li><b>Equipment:</b> GPU Rigs</li>
                                <li>Automatic charging in ETH</li>
                                <li><b>1 year</b></li>
                            </ul>
                            <span class="price__value">$7.70</span>
                            <p class="price__text">for 100 KH/s</p>
                            <button class="btn btn--center" type="button">Buy now</button>
                        </div>
                        <!-- end price -->

                        <!-- price -->
                        <div class="price">
                            <h3 class="price__title">Pro</h3>
                            <ul class="price__list">
                                <li><b>Minimal Hashedrate:</b> 1 MH/s</li>
                                <li><b>Service pay:</b> No</li>
                                <li><b>Equipment:</b> Multi-Factor</li>
                                <li>Automatic charging in DASH</li>
                                <li><b>1 year</b></li>
                            </ul>
                            <span class="price__value">$9.90</span>
                            <p class="price__text">for 1 MH/s</p>
                            <button class="btn btn--border btn--center" type="button">Buy now</button>
                        </div>
                        <!-- end price -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing -->

    <!-- get started -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <!-- review -->
                    <div class="review">
                        <blockquote class="review__blockquote">I love the simple, minimal design, lots of white, not an overwhelming amount of features. Compared to some other alternatives I have tried, it was easy to sign up, bug-free, and easy to use so far.</blockquote>
                        <span class="review__autor">
                            John Doe
                            <span>Entrepreneur</span>
                        </span>
                    </div>
                    <!-- end review -->
                </div>

                <div class="col-12 col-lg-6">
                    <!-- get started -->
                    <div class="get-started">
                        <h3 class="get-started__title">Create Account</h3>
                        <p class="get-started__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                        <a href="{{route('user.register')}}" class="btn">get started</a>
                    </div>
                    <!-- end get started -->
                </div>
            </div>
        </div>
    </section>
    <!-- end get started -->

    <!-- partners -->
    <div class="partners section--border-top section--border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- partners slider -->
                    <div class="owl-carousel partners__slider">
                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <img src="img/partners/activeden-light-background.png" alt="">
                            </a>
                        </div>
                        <!-- end slider item -->

                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <img src="img/partners/audiojungle-light-background.png" alt="">
                            </a>
                        </div>
                        <!-- end slider item -->

                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <img src="img/partners/codecanyon-light-background.png" alt="">
                            </a>
                        </div>
                        <!-- end slider item -->

                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <img src="img/partners/photodune-light-background.png" alt="">
                            </a>
                        </div>
                        <!-- end slider item -->

                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <img src="img/partners/themeforest-light-background.png" alt="">
                            </a>
                        </div>
                        <!-- end slider item -->

                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <img src="img/partners/videohive-light-background.png" alt="">
                            </a>
                        </div>
                        <!-- end slider item -->

                        <!-- slider item -->
                        <div class="item">
                            <a href="#">
                                <img src="img/partners/3docean-light-background.png" alt="">
                            </a>
                        </div>
                        <!-- end slider item -->
                    </div>
                    <!-- end partners slider -->
                </div>
            </div>
        </div>
    </div>
    <!-- end partners -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="footer__logo">
                        <a href="{{url('/')}}">
                            <img src="img/logo.svg" alt="">
                        </a>
                    </div>
                    <p class="footer__tagline">Crypto mining platform, <br>Cloud mining HTML Template.</p>
                    <ul class="footer__social">
                        <li><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#ebebeb"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.3158 14.4213C15.3056 15.2359 16.0359 15.6905 16.5862 15.9608C17.1515 16.2381 17.3414 16.4159 17.3392 16.6639C17.3349 17.0435 16.8882 17.2109 16.4702 17.2175C15.7606 17.2286 15.34 17.0302 15.0073 16.8732L14.9798 16.8602L14.7171 18.0995C15.0553 18.2566 15.6815 18.3937 16.331 18.3997C17.8554 18.3997 18.8528 17.6411 18.8582 16.4649C18.8618 15.5719 18.128 15.1835 17.5409 14.8728C17.1466 14.6641 16.8184 14.4904 16.824 14.2223C16.8289 14.02 17.0204 13.8041 17.4401 13.7492C17.6477 13.7215 18.2212 13.7003 18.8712 14.0021L19.1263 12.803C18.7768 12.6747 18.3274 12.5518 17.768 12.5518C16.3332 12.5518 15.3239 13.3207 15.3158 14.4213ZM21.578 12.6551C21.2997 12.6551 21.065 12.8188 20.9604 13.07L18.7827 18.3115H20.306L20.6092 17.467L22.4707 17.467L22.6466 18.3115H23.9892L22.8176 12.6551H21.578ZM22.2307 16.3071L21.7911 14.1831L21.0267 16.3071H22.2307ZM13.4688 12.6551L12.2681 18.3115H13.7197L14.9199 12.6551H13.4688ZM9.81044 16.5051L11.3214 12.6551H12.8458L10.4939 18.3115H8.95977L7.80216 13.7976C7.73204 13.5197 7.67108 13.4175 7.45747 13.3006C7.10846 13.1092 6.53236 12.9303 6.0253 12.8193L6.05982 12.6551H8.52985C8.84433 12.6551 9.12753 12.8661 9.19928 13.2315L9.81044 16.5051Z" fill="url(#paint0_linear)"/><defs><linearGradient id="paint0_linear" x1="6.05661" y1="14.3504" x2="11.1343" y2="7.19927" gradientUnits="userSpaceOnUse"><stop stop-color="#222357"/><stop offset="1" stop-color="#254AA5"/></linearGradient></defs></svg></li>
                        <li><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#ebebeb"/><path d="M23.9868 15.0723C23.9868 18.1491 21.4973 20.6434 18.4263 20.6434C15.3552 20.6434 12.8657 18.1491 12.8657 15.0723C12.8657 11.9955 15.3552 9.50122 18.4263 9.50122C21.4973 9.50122 23.9868 11.9955 23.9868 15.0723V15.0723Z" fill="#F79F1A"/><path d="M17.127 15.0723C17.127 18.1491 14.6375 20.6434 11.5664 20.6434C8.49544 20.6434 6.00589 18.1491 6.00589 15.0723C6.00589 11.9955 8.49544 9.50122 11.5664 9.50122C14.6375 9.50122 17.127 11.9955 17.127 15.0723V15.0723Z" fill="#EA001B"/><path d="M14.9964 10.6866C13.6989 11.7065 12.8661 13.2914 12.8661 15.0717C12.8661 16.8521 13.6989 18.4381 14.9964 19.458C16.2938 18.4381 17.1266 16.8521 17.1266 15.0717C17.1266 13.2914 16.2938 11.7065 14.9964 10.6866V10.6866Z" fill="#FF5F01"/></svg></li>
                        <li><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#ebebeb"/><path d="M12.633 22.5771L12.8945 20.9161L12.312 20.9026H9.53049L11.4635 8.64608C11.4695 8.60908 11.489 8.57458 11.5175 8.55008C11.546 8.52558 11.5825 8.51208 11.6205 8.51208H16.3105C17.8675 8.51208 18.942 8.83608 19.503 9.47558C19.766 9.77558 19.9335 10.0891 20.0145 10.4341C20.0995 10.7961 20.101 11.2286 20.018 11.7561L20.012 11.7946V12.1326L20.275 12.2816C20.4965 12.3991 20.6725 12.5336 20.8075 12.6876C21.0325 12.9441 21.178 13.2701 21.2395 13.6566C21.303 14.0541 21.282 14.5271 21.178 15.0626C21.058 15.6786 20.864 16.2151 20.602 16.6541C20.361 17.0586 20.054 17.3941 19.6895 17.6541C19.3415 17.9011 18.928 18.0886 18.4605 18.2086C18.0075 18.3266 17.491 18.3861 16.9245 18.3861H16.5595C16.2985 18.3861 16.045 18.4801 15.846 18.6486C15.6465 18.8206 15.5145 19.0556 15.474 19.3126L15.4465 19.4621L14.9845 22.3896L14.9635 22.4971C14.958 22.5311 14.9485 22.5481 14.9345 22.5596C14.922 22.5701 14.904 22.5771 14.8865 22.5771H12.633V22.5771Z" fill="#253B80"/><path d="M20.524 11.8335V11.8335V11.8335C20.51 11.923 20.494 12.0145 20.476 12.1085C19.8575 15.284 17.7415 16.381 15.039 16.381H13.663C13.3325 16.381 13.054 16.621 13.0025 16.947V16.947V16.947L12.298 21.415L12.0985 22.6815C12.065 22.8955 12.23 23.0885 12.446 23.0885H14.8865C15.1755 23.0885 15.421 22.8785 15.4665 22.5935L15.4905 22.4695L15.95 19.5535L15.9795 19.3935C16.0245 19.1075 16.2705 18.8975 16.5595 18.8975H16.9245C19.289 18.8975 21.14 17.9375 21.681 15.1595C21.907 13.999 21.79 13.03 21.192 12.3485C21.011 12.143 20.7865 11.9725 20.524 11.8335V11.8335Z" fill="#179BD7"/><path d="M19.877 11.5755C19.7825 11.548 19.685 11.523 19.585 11.5005C19.4845 11.4785 19.3815 11.459 19.2755 11.442C18.9045 11.382 18.498 11.3535 18.0625 11.3535H14.3865C14.296 11.3535 14.21 11.374 14.133 11.411C13.9635 11.4925 13.8375 11.653 13.807 11.8495L13.025 16.8025L13.0025 16.947C13.054 16.621 13.3325 16.381 13.663 16.381H15.039C17.7415 16.381 19.8575 15.2835 20.476 12.1085C20.4945 12.0145 20.51 11.923 20.524 11.8335C20.3675 11.7505 20.198 11.6795 20.0155 11.619C19.9705 11.604 19.924 11.5895 19.877 11.5755V11.5755Z" fill="#222D65"/><path d="M14.133 11.4115C14.2105 11.3745 14.296 11.354 14.3865 11.354H18.0625C18.498 11.354 18.9045 11.3825 19.2755 11.4425C19.3815 11.4595 19.4845 11.479 19.585 11.501C19.685 11.5235 19.7825 11.5485 19.877 11.576C19.924 11.59 19.9705 11.6045 20.016 11.619C20.1985 11.6795 20.368 11.751 20.5245 11.8335C20.7085 10.66 20.523 9.861 19.8885 9.1375C19.189 8.341 17.9265 8 16.311 8H11.621C11.291 8 11.0095 8.24 10.9585 8.5665L9.00499 20.949C8.96649 21.194 9.15549 21.415 9.40249 21.415H12.298L13.025 16.8025L13.807 11.8495C13.8375 11.653 13.9635 11.4925 14.133 11.4115Z" fill="#253B80"/></svg></li>
                        <li><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#ebebeb"/><path fill-rule="evenodd" clip-rule="evenodd" d="M21.2398 12.6664C21.5338 10.7012 20.0375 9.64469 17.9915 8.93992L18.6552 6.27777L17.0348 5.87392L16.3886 8.46592C15.9626 8.35977 15.5251 8.25961 15.0903 8.16038L15.7411 5.55131L14.1215 5.14746L13.4574 7.80869C13.1048 7.72838 12.7586 7.649 12.4226 7.56546L12.4245 7.55715L10.1897 6.99915L9.75862 8.72992C9.75862 8.72992 10.9609 9.00546 10.9355 9.02254C11.5918 9.18638 11.7105 9.62069 11.6906 9.965L10.9346 12.9978C10.9798 13.0093 11.0385 13.0259 11.1031 13.0518L11.0482 13.0381C11.0106 13.0286 10.9716 13.0189 10.9318 13.0093L9.87216 17.2578C9.79185 17.4572 9.58831 17.7562 9.12954 17.6427C9.14569 17.6662 7.95169 17.3487 7.95169 17.3487L7.14723 19.2036L9.256 19.7293C9.4914 19.7883 9.72398 19.8489 9.95413 19.909L9.95442 19.909L9.95464 19.9091C10.1079 19.9491 10.26 19.9887 10.4112 20.0275L9.74062 22.7201L11.3592 23.1239L12.0234 20.4599C12.4655 20.5799 12.8948 20.6907 13.3148 20.795L12.6529 23.4465L14.2734 23.8504L14.944 21.1628C17.7072 21.6858 19.7851 21.4748 20.6597 18.9756C21.3645 16.9633 20.6246 15.8025 19.1708 15.0456C20.2295 14.8015 21.0271 14.105 21.2398 12.6664ZM17.5374 17.8583C17.078 19.7045 14.1881 18.9412 12.8659 18.592C12.7469 18.5606 12.6407 18.5325 12.55 18.51L13.4398 14.9428C13.5503 14.9703 13.6852 15.0006 13.838 15.0349C15.2055 15.3418 18.0082 15.9706 17.5374 17.8583ZM14.1127 13.3794C15.2151 13.6736 17.6198 14.3154 18.0386 12.6374C18.4663 10.9211 16.1292 10.4037 14.9878 10.151C14.8595 10.1226 14.7462 10.0975 14.6537 10.0745L13.8469 13.3098C13.9231 13.3288 14.0126 13.3527 14.1127 13.3794Z" fill="#F7931A"/></svg></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <h6 class="footer__title">Helpful</h6>
                    <ul class="footer__list">
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="article.html">Forex</a></li>
                        <li><a href="article.html">Synthetic indices</a></li>
                        <li><a href="article.html">Commodities</a></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <h6 class="footer__title">Company</h6>
                    <ul class="footer__list">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('news')}}">News</a></li>
                        <li><a href="{{route('price')}}">Price</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <h6 class="footer__title">Contact</h6>
                    <ul class="footer__list footer__list--contacts">
                        <li><a href="tel:{{ opsi('phone') }}">{{ opsi('phone') }}</a></li>
                        <li><a href="mailto:{{ opsi('email') }}">{{ opsi('email') }}</a></li>
                    </ul>
                    <ul class="footer__social">
                        <li><a href="#" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#3B5998"/><path d="M16.5634 23.8197V15.6589H18.8161L19.1147 12.8466H16.5634L16.5672 11.4391C16.5672 10.7056 16.6369 10.3126 17.6904 10.3126H19.0987V7.5H16.8457C14.1394 7.5 13.1869 8.86425 13.1869 11.1585V12.8469H11.4999V15.6592H13.1869V23.8197H16.5634Z" fill="white"/></svg></a></li>
                        <li><a href="#" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#55ACEE"/><path d="M14.5508 12.1922L14.5822 12.7112L14.0576 12.6477C12.148 12.404 10.4798 11.5778 9.06334 10.1902L8.37085 9.50169L8.19248 10.0101C7.81477 11.1435 8.05609 12.3405 8.843 13.1455C9.26269 13.5904 9.16826 13.654 8.4443 13.3891C8.19248 13.3044 7.97215 13.2408 7.95116 13.2726C7.87772 13.3468 8.12953 14.3107 8.32888 14.692C8.60168 15.2217 9.15777 15.7407 9.76631 16.0479L10.2804 16.2915L9.67188 16.3021C9.08432 16.3021 9.06334 16.3127 9.12629 16.5351C9.33613 17.2236 10.165 17.9545 11.0883 18.2723L11.7388 18.4947L11.1723 18.8337C10.3329 19.321 9.34663 19.5964 8.36036 19.6175C7.88821 19.6281 7.5 19.6705 7.5 19.7023C7.5 19.8082 8.78005 20.4014 9.52499 20.6344C11.7598 21.3229 14.4144 21.0264 16.4079 19.8506C17.8243 19.0138 19.2408 17.3507 19.9018 15.7407C20.2585 14.8827 20.6152 13.315 20.6152 12.5629C20.6152 12.0757 20.6467 12.0121 21.2343 11.4295C21.5805 11.0906 21.9058 10.7198 21.9687 10.6139C22.0737 10.4126 22.0632 10.4126 21.5281 10.5927C20.6362 10.9105 20.5103 10.8681 20.951 10.3915C21.2762 10.0525 21.6645 9.43813 21.6645 9.25806C21.6645 9.22628 21.5071 9.27924 21.3287 9.37458C21.1398 9.4805 20.7202 9.63939 20.4054 9.73472L19.8388 9.91479L19.3247 9.56524C19.0414 9.37458 18.6427 9.16273 18.4329 9.09917C17.8978 8.95087 17.0794 8.97206 16.5967 9.14154C15.2852 9.6182 14.4563 10.8469 14.5508 12.1922Z" fill="white"/></svg></a></li>
                        <li><a href="#" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#4C6C91"/><path d="M15.7848 19.9226C15.7848 19.9226 16.0736 19.8911 16.2215 19.7351C16.3568 19.5922 16.3521 19.3226 16.3521 19.3226C16.3521 19.3226 16.3341 18.0636 16.9297 17.8777C17.5166 17.6949 18.2702 19.0952 19.07 19.6337C19.6741 20.0408 20.1327 19.9517 20.1327 19.9517L22.2699 19.9226C22.2699 19.9226 23.3874 19.855 22.8576 18.9923C22.8137 18.9216 22.5485 18.354 21.269 17.1879C19.9284 15.9673 20.1084 16.1647 21.7221 14.053C22.705 12.7672 23.0978 11.9821 22.975 11.6464C22.8584 11.3253 22.1353 11.4106 22.1353 11.4106L19.7297 11.4252C19.7297 11.4252 19.5513 11.4014 19.419 11.4789C19.2899 11.555 19.2061 11.7324 19.2061 11.7324C19.2061 11.7324 18.8258 12.7272 18.3179 13.5737C17.2466 15.3589 16.8185 15.4534 16.6433 15.3428C16.2355 15.0839 16.3373 14.3042 16.3373 13.7504C16.3373 12.0197 16.6049 11.2984 15.8169 11.1118C15.5555 11.0495 15.363 11.0088 14.6939 11.0019C13.8354 10.9935 13.1092 11.005 12.6976 11.2024C12.4237 11.3338 12.2124 11.6272 12.3415 11.6441C12.5004 11.6648 12.8604 11.7394 13.0513 11.9944C13.2978 12.3239 13.2892 13.0629 13.2892 13.0629C13.2892 13.0629 13.4308 15.1 12.9582 15.3528C12.6342 15.5264 12.1897 15.1723 11.2342 13.5522C10.7451 12.7226 10.3757 11.8054 10.3757 11.8054C10.3757 11.8054 10.3045 11.6341 10.177 11.5419C10.0228 11.4306 9.80759 11.396 9.80759 11.396L7.52173 11.4106C7.52173 11.4106 7.17818 11.4198 7.05219 11.5665C6.94029 11.6963 7.04358 11.966 7.04358 11.966C7.04358 11.966 8.8333 16.0764 10.8601 18.1481C12.7187 20.047 14.8285 19.9226 14.8285 19.9226H15.7848Z" fill="white"/></svg></a></li>
                        <li><a href="#" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#0077B5"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10.8242 9.26419C10.8242 10.2449 10.086 11.0296 8.90074 11.0296H8.87902C7.73779 11.0296 7 10.2449 7 9.26419C7 8.26275 7.76026 7.5 8.92315 7.5C10.086 7.5 10.8022 8.26275 10.8242 9.26419ZM10.6003 12.4236V22.6372H7.201V12.4236H10.6003ZM22.8595 22.6372L22.8596 16.7811C22.8596 13.6439 21.1826 12.1838 18.9457 12.1838C17.1409 12.1838 16.3328 13.1752 15.8817 13.8706V12.4239H12.4819C12.5267 13.3823 12.4819 22.6375 12.4819 22.6375H15.8817V16.9334C15.8817 16.6282 15.9037 16.3237 15.9936 16.1051C16.2393 15.4953 16.7987 14.8639 17.7378 14.8639C18.9684 14.8639 19.4603 15.8005 19.4603 17.173V22.6372H22.8595Z" fill="white"/></svg></a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><defs><linearGradient id="tlogo-a" x1="50%" x2="50%" y1="0%" y2="99.258%"><stop offset="0%" stop-color="#2AABEE"/><stop offset="100%" stop-color="#229ED9"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><circle cx="64" cy="64" r="64" fill="url(#tlogo-a)" fill-rule="nonzero"/><path fill="#FFF" fill-rule="nonzero" d="M28.9700376,63.3244248 C47.6273373,55.1957357 60.0684594,49.8368063 66.2934036,47.2476366 C84.0668845,39.855031 87.7600616,38.5708563 90.1672227,38.528 C90.6966555,38.5191258 91.8804274,38.6503351 92.6472251,39.2725385 C93.294694,39.7979149 93.4728387,40.5076237 93.5580865,41.0057381 C93.6433345,41.5038525 93.7494885,42.63857 93.6651041,43.5252052 C92.7019529,53.6451182 88.5344133,78.2034783 86.4142057,89.5379542 C85.5170662,94.3339958 83.750571,95.9420841 82.0403991,96.0994568 C78.3237996,96.4414641 75.5015827,93.6432685 71.9018743,91.2836143 C66.2690414,87.5912212 63.0868492,85.2926952 57.6192095,81.6896017 C51.3004058,77.5256038 55.3966232,75.2369981 58.9976911,71.4967761 C59.9401076,70.5179421 76.3155302,55.6232293 76.6324771,54.2720454 C76.6721165,54.1030573 76.7089039,53.4731496 76.3346867,53.1405352 C75.9604695,52.8079208 75.4081573,52.921662 75.0095933,53.0121213 C74.444641,53.1403447 65.4461175,59.0880351 48.0140228,70.8551922 C45.4598218,72.6091037 43.1463059,73.4636682 41.0734751,73.4188859 C38.7883453,73.3695169 34.3926725,72.1268388 31.1249416,71.0646282 C27.1169366,69.7617838 23.931454,69.0729605 24.208838,66.8603276 C24.3533167,65.7078514 25.9403832,64.5292172 28.9700376,63.3244248 Z"/></g></svg></a></li>
                        <li><a href="https://www.instagram.com/volkov_des1gn/" target="_blank"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 16C1 7.71573 7.71573 1 16 1C24.2843 1 31 7.71573 31 16C31 24.2843 24.2843 31 16 31C7.71573 31 1 24.2843 1 16Z" fill="white" stroke="black" stroke-width="1.4"/><mask x="1" y="1" width="30" height="30"><path fill-rule="evenodd" clip-rule="evenodd" d="M1 16C1 7.71573 7.71573 1 16 1C24.2843 1 31 7.71573 31 16C31 24.2843 24.2843 31 16 31C7.71573 31 1 24.2843 1 16Z" fill="white"/></mask><g><path fill-rule="evenodd" clip-rule="evenodd" d="M16.0007 8C13.8281 8 13.5554 8.0095 12.702 8.04833C11.8504 8.08733 11.269 8.22217 10.7604 8.42C10.2342 8.62434 9.78785 8.89768 9.34318 9.34251C8.89818 9.78719 8.62484 10.2335 8.41984 10.7595C8.2215 11.2684 8.0865 11.8499 8.04817 12.7012C8.01 13.5546 8 13.8274 8 16.0001C8 18.1728 8.00967 18.4446 8.04833 19.298C8.0875 20.1496 8.22234 20.731 8.42 21.2396C8.62451 21.7658 8.89784 22.2121 9.34268 22.6568C9.78719 23.1018 10.2335 23.3758 10.7594 23.5802C11.2684 23.778 11.8499 23.9128 12.7014 23.9518C13.5547 23.9907 13.8272 24.0002 15.9997 24.0002C18.1726 24.0002 18.4444 23.9907 19.2978 23.9518C20.1495 23.9128 20.7315 23.778 21.2405 23.5802C21.7665 23.3758 22.2121 23.1018 22.6567 22.6568C23.1017 22.2121 23.375 21.7658 23.58 21.2398C23.7767 20.731 23.9117 20.1495 23.9517 19.2981C23.99 18.4448 24 18.1728 24 16.0001C24 13.8274 23.99 13.5547 23.9517 12.7014C23.9117 11.8497 23.7767 11.2684 23.58 10.7597C23.375 10.2335 23.1017 9.78719 22.6567 9.34251C22.2116 8.89751 21.7666 8.62417 21.24 8.42C20.73 8.22217 20.1483 8.08733 19.2966 8.04833C18.4433 8.0095 18.1716 8 15.9983 8H16.0007ZM15.734 9.44156H15.7341L16.0007 9.44164C18.1368 9.44164 18.3899 9.4493 19.2334 9.48764C20.0135 9.5233 20.4368 9.65364 20.7188 9.76314C21.0921 9.90814 21.3583 10.0815 21.6381 10.3615C21.9181 10.6415 22.0915 10.9082 22.2368 11.2815C22.3463 11.5632 22.4768 11.9865 22.5123 12.7665C22.5506 13.6098 22.559 13.8632 22.559 15.9982C22.559 18.1332 22.5506 18.3866 22.5123 19.2299C22.4766 20.0099 22.3463 20.4333 22.2368 20.7149C22.0918 21.0883 21.9181 21.3541 21.6381 21.6339C21.3581 21.9139 21.0923 22.0873 20.7188 22.2323C20.4371 22.3423 20.0135 22.4723 19.2334 22.5079C18.3901 22.5463 18.1368 22.5546 16.0007 22.5546C13.8646 22.5546 13.6114 22.5463 12.768 22.5079C11.988 22.4719 11.5647 22.3416 11.2825 22.2321C10.9092 22.0871 10.6425 21.9138 10.3625 21.6338C10.0825 21.3538 9.90918 21.0878 9.76385 20.7143C9.65435 20.4326 9.52385 20.0092 9.48835 19.2292C9.45001 18.3859 9.44234 18.1326 9.44234 15.9962C9.44234 13.8598 9.45001 13.6078 9.48835 12.7645C9.52401 11.9845 9.65435 11.5612 9.76385 11.2792C9.90885 10.9058 10.0825 10.6391 10.3625 10.3591C10.6425 10.0791 10.9092 9.90581 11.2825 9.76047C11.5645 9.65047 11.988 9.52047 12.768 9.48464C13.5061 9.4513 13.7921 9.4413 15.2831 9.43964V9.44164C15.4224 9.44142 15.5723 9.44149 15.734 9.44156ZM19.3111 11.7297C19.3111 11.1995 19.7411 10.77 20.2711 10.77V10.7697C20.8011 10.7697 21.2311 11.1997 21.2311 11.7297C21.2311 12.2597 20.8011 12.6897 20.2711 12.6897C19.7411 12.6897 19.3111 12.2597 19.3111 11.7297ZM16.0006 11.8916C13.7318 11.8917 11.8924 13.7312 11.8924 16C11.8924 18.2689 13.7319 20.1076 16.0007 20.1076C18.2696 20.1076 20.1085 18.2689 20.1085 16C20.1085 13.7312 18.2694 11.8916 16.0006 11.8916ZM18.6674 16.0001C18.6674 14.5272 17.4734 13.3334 16.0007 13.3334C14.5279 13.3334 13.3341 14.5272 13.3341 16.0001C13.3341 17.4728 14.5279 18.6668 16.0007 18.6668C17.4734 18.6668 18.6674 17.4728 18.6674 16.0001Z" fill="black"/></g></svg></a></li>
                    </ul>
                </div>

                <div class="col-12">
                    <div class="footer__copyright">
                        <small>Copyright &copy; 2021 {{ opsi('website') }}. All Rights Reserved.</small>
                        <ul>
                            <li><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/particles-app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>