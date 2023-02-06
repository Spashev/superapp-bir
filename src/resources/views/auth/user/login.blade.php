<!DOCTYPE html>
<html class="no-js" lang="en"><head>
    <title>Admin Login</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{ asset('assets/media/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets//css/vendor.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!-- Dosis & Poppins Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;523;600;700;800&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <style type="text/css"></style></head>

<body>

<div id="app" class="login-page login-page-instagram">

    <div class="wrapper">

        <!-- Login Panel -->
        <div class="panel">

            <div class="col-form">

                <div class="panel-body panel-form">

                    <h1 class="form-title mb-5">Login</h1>
                    <form action="{{ route('user.signin') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            @error('password')
                            <div class="alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group form-group-btns text-center mb-0">
                            @if(Session::has('message'))
                                <div class="alert alert-danger-light" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                                </div>
                            </div>
                        </div>

                        <div class="separator dashed my-3">
                            <span class="bar"></span>
                            <span>You can also try</span>
                        </div>

                        <div class="form-group form-group-btns">
                            <button type="button" class="btn-block btn btn-has-icon btn-icon-split btn-facebook">
                                <span class="icon"><i class="fab fa-facebook"></i></span>
                                <span>Login with Facebook</span>
                            </button>
                        </div>

                        <div class="form-group form-group-btns text-center">
                            <a href="#" class="text-muted">Forgot your password?</a>
                        </div>
                    </form>
                </div>

                <div class="text-center">
                    <h6 class="my-4">Get the app</h6>
                    <a href="#" type="button" class="m-1 btn btn-img">
                        <img src="{{ asset('assets/media/svg/badges/badges-app-store.svg') }}" alt="">
                    </a>
                    <a href="#" type="button" class="m-1 btn btn-img">
                        <img src="{{ asset('assets/media/svg/badges/badges-google-play.svg') }}" alt="">
                    </a>
                </div>

            </div><!-- .col-form -->


            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="nav text-lg-left text-center">
                                <li class="nav-item"><a href="#" class="nav-link">ABOUT US</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">HELP</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">PRESS</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">API</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">JOBS</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">PRIVACY</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">TERMS</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <p class="copyright my-2 text-lg-right text-center">
                                © Copyright <script>document.write( new Date().getFullYear() );</script>, All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </footer>

        </div><!-- / Login Panel -->


    </div>

</div>

<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

</body></html>
