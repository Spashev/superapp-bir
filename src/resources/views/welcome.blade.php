<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Tau Admin Dashboard</title>
    <meta name="description" content="Tau Admin Dashboard">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('assets/media/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
    <!-- Dosis & Poppins Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;523;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/js-list-manager.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/errors.css') }}">

    <!-- Setting website's root url for the api calls. -->
    <script type="text/javascript">
        window.ROOT_URL = "";
        window.DIRECTION = "ltr";
    </script>

</head>

<body>



<div id="app" class="error-page-1" style="background-image: url('{{  asset ("assets/media/errors/error-9/space.png") }}');">

    <div class="illustrations">
        <img src="{{ asset ('assets/media/errors/error-9/cloud-1.png') }}" id="cloud-1" alt="Cloud">
        <img src="{{ asset ('assets/media/errors/error-9/cloud-2.png') }}" id="cloud-2" alt="Cloud">
        <img src="{{ asset ('assets/media/errors/error-9/cloud-3.png') }}" id="cloud-3" alt="Cloud">
        <img src="{{ asset ('assets/media/errors/error-9/cloud-4.png') }}" id="cloud-4" alt="Cloud">
        <div id="spaceship-1">
            <img src="{{ asset ('assets/media/errors/error-9/spaceship-1.png') }}" alt="spaceship">
        </div>
        <div id="spaceship-2">
            <img src="{{ asset ('assets/media/errors/error-9/spaceship-2.png') }}" alt="spaceship">
        </div>
    </div>

    <!-- Error Container -->
    <div class="container">

        <div class="content">
            <h2 class="error-heading text-danger">Lost In Space?</h2>
            <h4 class="error-text">
                The page you are looking for does not exist.
            </h4>

            <a href="#" class="btn btn-info">Back To Home</a>
        </div>

    </div><!-- / Error Container -->

</div>

<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- / Scripts -->
</body>
</html>
