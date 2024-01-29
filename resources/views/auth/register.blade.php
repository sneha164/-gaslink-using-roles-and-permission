<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <title>GasLink</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initia-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/icon" href="{{ asset('user/images/fire.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('css')
</head>
<body>
    <section class=" register ">
        <div class="container">
            <div class="row ">
                <div class=" form col-lg-6 col-md-6 col-sm-12  mt-4 ">
                    <h1 class=" text-center">Create Account</h1>
                    <p class="text-center">Get started with your free account</p>
                    <p class="bottom">
                        <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="btn btn-block btn-google mx-3"> <i class="fa-brands fa-google"></i>   Login with
                            Google</a>
                        <a href="https://www.facebook.com/login.php" class="btn btn-block btn-facebook mx-3"> <i
                                class="fab fa-facebook-f"></i>   Login with Facebook</a>
                    </p>
                    <p class="divider-text">
                        <span>OR</span>
                    </p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user mx-1"></i> </span>
                            </div>
                            <input id="name" type="text" placeholder="Full Name"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope mx-1"></i> </span>
                            </div>
                            <input id="email" type="email" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone  mx-1"></i> </span>
                            </div>
                            <input name="phone" class="form-control @error('phone') is-invalid @enderror" required
                                placeholder="Phone number" value="{{ old('phone') }}" type="text">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i> </span>
                            </div>
                            <textarea name="address" class="form-control @error('address') is-invalid @enderror" required placeholder="Address">{{ old('address') }}</textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock  mx-1"></i> </span>
                            </div>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock  mx-1"></i> </span>
                            </div>
                            <input class="form-control" name="password_confirmation" placeholder="Repeat password"
                                type="password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                        </div>
                        <p class="text-center">Already have an account? <a href="{{ route('login') }}">Log In</a>
                        </p>
                    </form>
                </div>
                <div class="image col-lg-6 col-md-6 col-sm-12 mt-4 bg-white">
                    <img src="{{ asset('user/images/screen.jpg') }}" width="100%" height="550px">
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-teletype-plugin/0.1.6/jquery.teletype.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="{{ asset('user/js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    @stack('js')
</body>
</html>
