<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maxton | Bootstrap 5 Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!--authentication-->

    <div class="section-authentication-cover">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row g-0">
                    <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">
                        <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
                            <div class="card-body">
                                <img src="{{ asset('backend/assets/images/auth/login1.png') }}" class="img-fluid auth-img-cover-login" width="650" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center border-top border-4 border-primary border-gradient-1">
                        <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
                            <div class="card-body p-sm-5">
                                <img src="{{ asset('backend/assets/images/logo1.png') }}" class="mb-4" width="145" alt="">
                                <h4 class="fw-bold">Get Started Now</h4>
                                <p class="mb-0">Enter your credentials to login your account</p>

                                <div class="row g-3 my-4">
                                    <div class="col-12 col-lg-6">
                                        <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                                            <img src="{{ asset('backend/assets/images/apps/05.png') }}" width="20" class="me-2" alt="">Google
                                        </button>
                                    </div>
                                    <div class="col col-lg-6">
                                        <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                                            <img src="{{ asset('backend/assets/images/apps/17.png') }}" width="20" class="me-2" alt="">Facebook
                                        </button>
                                    </div>
                                </div>

                                <div class="separator section-padding">
                                    <div class="line"></div>
                                    <p class="mb-0 fw-bold">OR</p>
                                    <div class="line"></div>
                                </div>

                                <div class="form-body mt-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">{{ __('Email') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="jhon@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">{{ __('Password') }}</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" style="text-decoration:none" href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-grd-primary">{{ __('Login') }}</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-start">
                                                <p class="mb-0">Don't have an account yet? <a href="{{route('register')}}">Sign up here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </form>
        </div>
    </div>

    <!--authentication-->

    <!--plugins-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>

</body>

</html>
