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

    <!-- Setting website's root url for the api calls. -->
    <script type="text/javascript">

        window.ROOT_URL = "";
        window.DIRECTION = "ltr";

    </script>

    @yield('style')
</head>

<body>

<!-- Wrapper Arround The Page -->
<div class="page-wrapper sidebar-open navbar-fixed " id="app">

    <!-- Sidebar -->
    @include('admin.sidebar.nav')
    <!-- / Sidebar -->

    <main class="main-content">

        <div class="sidebar-backdrop"></div>

        <!-- Header Nav -->
        <div class="navigation-wrapper">

            <!-- Search -->
            @include('admin.sidebar.search')
            <!-- / Search -->

        </div>
        <!-- / Header Nav -->

        <div class="page-container">

            <!-- Main Page Content -->
            <div class="page-content">

                @yield('content')

            </div>
            <!-- Main Page Content -->

            <!-- Footer -->
            <div class="copyright row">
                <div class="col-md-6 text-left">
                    &copy; Copyright <script>document.write( new Date().getFullYear() );</script> TAU Dashboard.

                </div>
                <div class="col-md-6 text-right">
                    Crafted By <a href="#">Spashev N</a>.
                </div>
            </div>
            <!-- / Footer -->

        </div>

    </main>

</div>

<script src="{{ asset('assets/js/vendor.js') }}"></script>

@yield('welcome')

<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>

<script>
    $( ".notification" ).click(function() {
        var notification = $(this).closest('li').data('notification');
        $.ajax({
            url: '/api/notification/' + notification,
            type: 'GET',
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8'
        });
    });
</script>

@yield('script')
</body>
</html>
