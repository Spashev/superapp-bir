<!DOCTYPE html>
<html class="no-js" lang="en"><head>
    <title>Admin Signup</title>
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

<div id="app" class="login-page register-1">

    <!-- Login Panel -->
    <div class="panel">
        <div class="row no-gutters">

            <div class="col-md-6 col-form">

                <div class="panel-body panel-form">

                    <h1 class="form-title">Register</h1>

                    <form action="{{ route('user.signup') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFName">First Name</label>
                                <div class="input-group input-group-merged">
                                    <input type="text" name="first_name" class="form-control" id="inputFName" placeholder="First Name" value="{{ old('first_name') }}" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    @error('first_name')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLName">Second name</label>
                                <div class="input-group input-group-merged">
                                    <input type="text" name="second_name" class="form-control" id="inputLName" placeholder="Second name" value="{{ old('second_name') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    @error('second_name')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <div class="input-group input-group-merged">
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ old('email') }}" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputNumber">Phone Number</label>
                                <div class="input-group input-group-merged">
                                    <input type="text" name="phone" class="form-control" id="inputNumber" placeholder="Phone Number" value="{{ old('phone') }}" data-inputmask="'alias': '999-99-9999'" class="form-control" inputmode="text">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </div>
                                    @error('phone')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Password</label>
                                <div class="input-group input-group-merged">
                                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-lock-open"></i>
                                        </span>
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCPassword">Confirm Password</label>
                                <div class="input-group input-group-merged">
                                    <input type="password" name="password_confirmation" class="form-control" id="inputCPassword" placeholder="Confirm Password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox custom-checkbox-2">
                                <input type="checkbox" name="term" class="custom-control-input" id="remember-me" required>
                                <label class="custom-control-label pt-1" for="remember-me">I agree with the <a href="#" class="font-weight-600">terms of services</a></label>
                            </div>
                        </div>

                        <div class="form-group form-group-btns text-center mb-0">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block btn-lg btn-primary">Register</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-block btn-lg btn-outline-secondary">Back</button>
                                </div>
                            </div>
                        </div>

                        <div class="separator dashed my-5 text-muted">
                            <span class="bar"></span>
                            <span>You can also try</span>
                        </div>

                        <div class="form-group form-group-btns">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <button type="button" class="btn-block btn btn-has-icon btn-icon-split btn-outline-google">
                                    <span class="icon"><i class="fab fa-google"></i></span>
                                    <span>Sign up with Google</span>
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn-block btn btn-has-icon btn-icon-split btn-outline-facebook">
                                    <span class="icon"><i class="fab fa-facebook"></i></span>
                                    <span>Sign up with Facebook</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

            </div>

            <div class="col-md-6">

                <div class="panel-body panel-image" style="background-image: url('{{asset("assets/media/backgrounds/debashis-biswas-dyPFnxxUhYk-unsplash-h600.jpg") }}');">

                </div>

            </div>

        </div><!-- .row -->
    </div><!-- / Login Panel -->

</div>
<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/inputmask/inputmask.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script>
    $("[data-inputmask]").inputmask() ;
</script>
</body></html>
