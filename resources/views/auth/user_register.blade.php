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
    <title>Register</title>
</head>
<body>
    <!-- sign form -->
    <div class="sign">
        <!-- particles -->
        <div id="particles-js" class="sign__particles"></div>
        <!-- end particles -->

        <div class="sign__content">

            <!-- form -->
            <form action="{{ route('user.register.submit') }}" method="post" class="sign__form">

                {{ csrf_field() }}

                <a href="{{url('/')}}"><img class="sign__logo" src="img/logo.svg" alt=""></a>

                @if($errors->has('name'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
                @endif

                @if($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
                @endif

                @if($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
                @endif

                <input type="text" class="form__input" id="name" name="name" placeholder="Name" required>

                <input type="text" class="form__input" id="email" name="email" placeholder="Email" required>

                <input type="password" class="form__input" id="password" name="password" placeholder="Password" required>

                <input type="password" class="form__input" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required>

                <input type="submit" class="btn" type="button" value="Sign up">

                <div class="form__group">
                    <input id="terms" name="terms" type="checkbox" checked="terms">
                    <label for="terms">I agree to the <a href="{{url('privacy-policy')}}">Privacy Policy</a></label>
                </div>

            </form>
            <!-- end form -->

            <div class="sign__box">
                <p>Already have an account? <a href="{{route('login')}}">Sign in</a></p>
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