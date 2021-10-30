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
    <link rel="shortcut icon" href="storage/images/favicon.ico" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Login</title>
</head>
<body>
    <!-- sign form -->
    <div class="sign">
        <!-- particles -->
        <div id="particles-js" class="sign__particles"></div>
        <!-- end particles -->

        <div class="sign__content">

            <!-- form -->
            <form action="{{ route('user.login.submit') }}" method="post" class="sign__form">

                {{ csrf_field() }}

                <a href="{{url('/')}}"><img class="sign__logo" src="img/logo.svg" alt=""></a>

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('success') }}</strong>
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ session('error') }}</strong>
                </div>
                @endif

                <input type="text" class="form__input" id="email" name="email" placeholder="Email" required>

                <input type="password" class="form__input" id="password" name="password" placeholder="Password" required>

                <input type="submit" class="btn" type="button" value="Sign in">

            </form>
            <!-- end form -->

            <div class="sign__box">
                <p>Don't have an account? <a href="{{ route('user.register') }}">Register</a></p>
            </div>
        </div>
    </div>
    <!-- end sign form -->

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