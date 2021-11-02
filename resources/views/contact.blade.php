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

    <section class="section section--border-bottom">
        <div class="container">
            <div class="row row--grid">

                <div class="col-12 col-lg-7 col-xl-8">

                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session('success') }}</strong>
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ session('error') }}</strong>
                    </div>
                    @endif
                
                    <form class="form form--contacts form--contacts-page" action="{{route('submit.contact')}}" method="POST">

                        @csrf

                        <input type="text" class="form__input" id="name" name="name" placeholder="Name" required>

                        <input type="text" class="form__input" id="email" name="email" placeholder="Email" required>

                        <textarea class="form__textarea" id="message" name="message" placeholder="Message"></textarea>

                        <input type="submit" class="btn" type="button" value="Submit">
                    </form>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <h2 class="section__title section__title--sidebar">{{$title}}</h2>
                    <p class="section__text section__text--sidebar">{!!$content!!}</p>
                    <ul class="contacts__list">
                        <li><a href="tel:{{opsi('phone')}}">{{opsi('phone')}}</a></li>
                        <li><a href="mailto:{{opsi('email')}}">{{opsi('email')}}</a></li>
                    </ul>
                    <ul class="contacts__social">
                        @if (opsi('facebook'))
                        <li><a href="{{opsi('facebook')}}" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#3B5998"/><path d="M16.5634 23.8197V15.6589H18.8161L19.1147 12.8466H16.5634L16.5672 11.4391C16.5672 10.7056 16.6369 10.3126 17.6904 10.3126H19.0987V7.5H16.8457C14.1394 7.5 13.1869 8.86425 13.1869 11.1585V12.8469H11.4999V15.6592H13.1869V23.8197H16.5634Z" fill="white"/></svg></a></li>
                        @endif
                        @if (opsi('twitter'))
                        <li><a href="{{opsi('twitter')}}" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#55ACEE"/><path d="M14.5508 12.1922L14.5822 12.7112L14.0576 12.6477C12.148 12.404 10.4798 11.5778 9.06334 10.1902L8.37085 9.50169L8.19248 10.0101C7.81477 11.1435 8.05609 12.3405 8.843 13.1455C9.26269 13.5904 9.16826 13.654 8.4443 13.3891C8.19248 13.3044 7.97215 13.2408 7.95116 13.2726C7.87772 13.3468 8.12953 14.3107 8.32888 14.692C8.60168 15.2217 9.15777 15.7407 9.76631 16.0479L10.2804 16.2915L9.67188 16.3021C9.08432 16.3021 9.06334 16.3127 9.12629 16.5351C9.33613 17.2236 10.165 17.9545 11.0883 18.2723L11.7388 18.4947L11.1723 18.8337C10.3329 19.321 9.34663 19.5964 8.36036 19.6175C7.88821 19.6281 7.5 19.6705 7.5 19.7023C7.5 19.8082 8.78005 20.4014 9.52499 20.6344C11.7598 21.3229 14.4144 21.0264 16.4079 19.8506C17.8243 19.0138 19.2408 17.3507 19.9018 15.7407C20.2585 14.8827 20.6152 13.315 20.6152 12.5629C20.6152 12.0757 20.6467 12.0121 21.2343 11.4295C21.5805 11.0906 21.9058 10.7198 21.9687 10.6139C22.0737 10.4126 22.0632 10.4126 21.5281 10.5927C20.6362 10.9105 20.5103 10.8681 20.951 10.3915C21.2762 10.0525 21.6645 9.43813 21.6645 9.25806C21.6645 9.22628 21.5071 9.27924 21.3287 9.37458C21.1398 9.4805 20.7202 9.63939 20.4054 9.73472L19.8388 9.91479L19.3247 9.56524C19.0414 9.37458 18.6427 9.16273 18.4329 9.09917C17.8978 8.95087 17.0794 8.97206 16.5967 9.14154C15.2852 9.6182 14.4563 10.8469 14.5508 12.1922Z" fill="white"/></svg></a></li>
                        @endif
                        @if (opsi('telegram'))
                        <li>
                        <a href="{{opsi('telegram')}}"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><defs><linearGradient id="tlogo-a" x1="50%" x2="50%" y1="0%" y2="99.258%"><stop offset="0%" stop-color="#2AABEE"/><stop offset="100%" stop-color="#229ED9"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><circle cx="64" cy="64" r="64" fill="url(#tlogo-a)" fill-rule="nonzero"/><path fill="#FFF" fill-rule="nonzero" d="M28.9700376,63.3244248 C47.6273373,55.1957357 60.0684594,49.8368063 66.2934036,47.2476366 C84.0668845,39.855031 87.7600616,38.5708563 90.1672227,38.528 C90.6966555,38.5191258 91.8804274,38.6503351 92.6472251,39.2725385 C93.294694,39.7979149 93.4728387,40.5076237 93.5580865,41.0057381 C93.6433345,41.5038525 93.7494885,42.63857 93.6651041,43.5252052 C92.7019529,53.6451182 88.5344133,78.2034783 86.4142057,89.5379542 C85.5170662,94.3339958 83.750571,95.9420841 82.0403991,96.0994568 C78.3237996,96.4414641 75.5015827,93.6432685 71.9018743,91.2836143 C66.2690414,87.5912212 63.0868492,85.2926952 57.6192095,81.6896017 C51.3004058,77.5256038 55.3966232,75.2369981 58.9976911,71.4967761 C59.9401076,70.5179421 76.3155302,55.6232293 76.6324771,54.2720454 C76.6721165,54.1030573 76.7089039,53.4731496 76.3346867,53.1405352 C75.9604695,52.8079208 75.4081573,52.921662 75.0095933,53.0121213 C74.444641,53.1403447 65.4461175,59.0880351 48.0140228,70.8551922 C45.4598218,72.6091037 43.1463059,73.4636682 41.0734751,73.4188859 C38.7883453,73.3695169 34.3926725,72.1268388 31.1249416,71.0646282 C27.1169366,69.7617838 23.931454,69.0729605 24.208838,66.8603276 C24.3533167,65.7078514 25.9403832,64.5292172 28.9700376,63.3244248 Z"/></g></svg></a></li>
                        @endif
                        @if (opsi('instagram'))
                        <li><a href="{{opsi('instagram')}}" target="_blank"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 16C1 7.71573 7.71573 1 16 1C24.2843 1 31 7.71573 31 16C31 24.2843 24.2843 31 16 31C7.71573 31 1 24.2843 1 16Z" fill="white" stroke="black" stroke-width="1.4"/><mask x="1" y="1" width="30" height="30"><path fill-rule="evenodd" clip-rule="evenodd" d="M1 16C1 7.71573 7.71573 1 16 1C24.2843 1 31 7.71573 31 16C31 24.2843 24.2843 31 16 31C7.71573 31 1 24.2843 1 16Z" fill="white"/></mask><g><path fill-rule="evenodd" clip-rule="evenodd" d="M16.0007 8C13.8281 8 13.5554 8.0095 12.702 8.04833C11.8504 8.08733 11.269 8.22217 10.7604 8.42C10.2342 8.62434 9.78785 8.89768 9.34318 9.34251C8.89818 9.78719 8.62484 10.2335 8.41984 10.7595C8.2215 11.2684 8.0865 11.8499 8.04817 12.7012C8.01 13.5546 8 13.8274 8 16.0001C8 18.1728 8.00967 18.4446 8.04833 19.298C8.0875 20.1496 8.22234 20.731 8.42 21.2396C8.62451 21.7658 8.89784 22.2121 9.34268 22.6568C9.78719 23.1018 10.2335 23.3758 10.7594 23.5802C11.2684 23.778 11.8499 23.9128 12.7014 23.9518C13.5547 23.9907 13.8272 24.0002 15.9997 24.0002C18.1726 24.0002 18.4444 23.9907 19.2978 23.9518C20.1495 23.9128 20.7315 23.778 21.2405 23.5802C21.7665 23.3758 22.2121 23.1018 22.6567 22.6568C23.1017 22.2121 23.375 21.7658 23.58 21.2398C23.7767 20.731 23.9117 20.1495 23.9517 19.2981C23.99 18.4448 24 18.1728 24 16.0001C24 13.8274 23.99 13.5547 23.9517 12.7014C23.9117 11.8497 23.7767 11.2684 23.58 10.7597C23.375 10.2335 23.1017 9.78719 22.6567 9.34251C22.2116 8.89751 21.7666 8.62417 21.24 8.42C20.73 8.22217 20.1483 8.08733 19.2966 8.04833C18.4433 8.0095 18.1716 8 15.9983 8H16.0007ZM15.734 9.44156H15.7341L16.0007 9.44164C18.1368 9.44164 18.3899 9.4493 19.2334 9.48764C20.0135 9.5233 20.4368 9.65364 20.7188 9.76314C21.0921 9.90814 21.3583 10.0815 21.6381 10.3615C21.9181 10.6415 22.0915 10.9082 22.2368 11.2815C22.3463 11.5632 22.4768 11.9865 22.5123 12.7665C22.5506 13.6098 22.559 13.8632 22.559 15.9982C22.559 18.1332 22.5506 18.3866 22.5123 19.2299C22.4766 20.0099 22.3463 20.4333 22.2368 20.7149C22.0918 21.0883 21.9181 21.3541 21.6381 21.6339C21.3581 21.9139 21.0923 22.0873 20.7188 22.2323C20.4371 22.3423 20.0135 22.4723 19.2334 22.5079C18.3901 22.5463 18.1368 22.5546 16.0007 22.5546C13.8646 22.5546 13.6114 22.5463 12.768 22.5079C11.988 22.4719 11.5647 22.3416 11.2825 22.2321C10.9092 22.0871 10.6425 21.9138 10.3625 21.6338C10.0825 21.3538 9.90918 21.0878 9.76385 20.7143C9.65435 20.4326 9.52385 20.0092 9.48835 19.2292C9.45001 18.3859 9.44234 18.1326 9.44234 15.9962C9.44234 13.8598 9.45001 13.6078 9.48835 12.7645C9.52401 11.9845 9.65435 11.5612 9.76385 11.2792C9.90885 10.9058 10.0825 10.6391 10.3625 10.3591C10.6425 10.0791 10.9092 9.90581 11.2825 9.76047C11.5645 9.65047 11.988 9.52047 12.768 9.48464C13.5061 9.4513 13.7921 9.4413 15.2831 9.43964V9.44164C15.4224 9.44142 15.5723 9.44149 15.734 9.44156ZM19.3111 11.7297C19.3111 11.1995 19.7411 10.77 20.2711 10.77V10.7697C20.8011 10.7697 21.2311 11.1997 21.2311 11.7297C21.2311 12.2597 20.8011 12.6897 20.2711 12.6897C19.7411 12.6897 19.3111 12.2597 19.3111 11.7297ZM16.0006 11.8916C13.7318 11.8917 11.8924 13.7312 11.8924 16C11.8924 18.2689 13.7319 20.1076 16.0007 20.1076C18.2696 20.1076 20.1085 18.2689 20.1085 16C20.1085 13.7312 18.2694 11.8916 16.0006 11.8916ZM18.6674 16.0001C18.6674 14.5272 17.4734 13.3334 16.0007 13.3334C14.5279 13.3334 13.3341 14.5272 13.3341 16.0001C13.3341 17.4728 14.5279 18.6668 16.0007 18.6668C17.4734 18.6668 18.6674 17.4728 18.6674 16.0001Z" fill="black"/></g></svg></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

@stop

<style>
.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}
</style>