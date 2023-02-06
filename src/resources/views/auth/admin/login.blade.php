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

<div id="app" class="login-page login-page-3">

    <div class="container">

        <!-- Login Panel -->
        <div class="panel shadow-lg">
            <div class="row no-gutters">

                <div class="col-md-8">

                    <div class="panel-body panel-image" style="background-image: url('{{asset("assets/media/auth/6047404.svg")}}');">

                    </div>

                </div>

                <div class="col-md-4">
                    <form action="{{ route('admin.signin') }}" method="post">
                        @csrf
                        <div class="panel-body panel-form bg-white">

                            <h1 class="form-title">Login</h1>

                            <div class="form-group">
                                <label for="">Email</label>
                                <div class="input-group input-group-squared">
                                    <input type="text" name="email" class="form-control" placeholder="Enter email here..." value="{{ old('email') }}" required>
                                </div>
                                @error('email')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <div class="input-group input-group-squared">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password here..." required>
                                </div>
                                @error('password')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <a href="#">Forgot your password?</a>
                            </div>

                            @if(Session::has('message'))
                                <div class="alert alert-danger-light" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            <div class="form-group form-group-btns text-center">
                                <div class="row no-gutters">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-lg shadow-lg btn-squared btn-primary">Sign In</button>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group text-center">
                                Dont have an acount? <a href="{{ route('admin.signup') }}" class="text-danger font-weight-600">Register Now</a>
                            </div>

                        </div>
                    </form>
                </div>

            </div><!-- .row -->
        </div><!-- / Login Panel -->

    </div><!-- .container -->

</div>

<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

</body></html>
