@extends('admin.layouts')
@section('content')
    <div class="page-content">

        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0">Amcharts Icons</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/">Icons</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Amcharts Icons</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Introduction -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h1 class="panel-title">Introduction</h1>
            </div>
            <div class="panel-body">
                <p class="mb-0"><a href="https://www.amcharts.com/free-animated-svg-weather-icons/">Amcharts Icons</a> - Free animated SVG weather icons by AM Charts.</p>
            </div>
        </div><!-- / Introduction -->

        <!-- Animated -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Animated</h3>
            </div>
            <div class="panel-body panel-illustrations">

                <div class="row">

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/cloudy.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy-day-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/cloudy-day-1.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-day-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy-day-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/cloudy-day-2.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-day-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy-day-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/cloudy-day-3.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-day-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy-night-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/cloudy-night-1.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-night-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy-night-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/cloudy-night-2.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-night-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy-night-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/cloudy-night-3.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-night-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/day.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/day.svg") }}')">
                            <i class="fas fa-copy"></i> day
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/night.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/night.svg") }}')">
                            <i class="fas fa-copy"></i> night
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/rainy-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/rainy-1.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/rainy-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/rainy-2.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/rainy-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/rainy-3.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/rainy-4.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/rainy-4.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-4
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/rainy-5.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/rainy-5.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-5
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/rainy-6.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/rainy-6.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-6
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/rainy-7.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/rainy-7.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-7
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/snowy-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/snowy-1.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/snowy-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/snowy-2.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/snowy-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/snowy-3.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/snowy-4.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/snowy-4.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-4
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/snowy-5.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/snowy-5.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-5
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/snowy-6.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/snowy-6.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-6
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/thunder.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/thunder.svg") }}')">
                            <i class="fas fa-copy"></i> thunder
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/weather.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/weather.svg") }}')">
                            <i class="fas fa-copy"></i> weather
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Animated -->

        <!-- Static -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Static</h3>
            </div>
            <div class="panel-body panel-illustrations">

                <div class="row">

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/cloudy.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/cloudy.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/cloudy-day-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/cloudy-day-1.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-day-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/cloudy-day-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/cloudy-day-2.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-day-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/cloudy-day-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/cloudy-day-3.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-day-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/cloudy-night-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/cloudy-night-1.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-night-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/cloudy-night-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/cloudy-night-2.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-night-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/cloudy-night-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/cloudy-night-3.svg") }}')">
                            <i class="fas fa-copy"></i> cloudy-night-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/day.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/day.svg") }}')">
                            <i class="fas fa-copy"></i> day
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/night.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/night.svg") }}')">
                            <i class="fas fa-copy"></i> night
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/rainy-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/rainy-1.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/rainy-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/rainy-2.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/rainy-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/rainy-3.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/rainy-4.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/rainy-4.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-4
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/rainy-5.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/rainy-5.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-5
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/rainy-6.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/rainy-6.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-6
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/rainy-7.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/rainy-7.svg") }}')">
                            <i class="fas fa-copy"></i> rainy-7
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/snowy-1.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/snowy-1.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-1
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/snowy-2.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/snowy-2.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-2
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/snowy-3.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/snowy-3.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-3
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/snowy-4.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/snowy-4.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-4
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/snowy-5.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/snowy-5.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-5
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/snowy-6.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/snowy-6.svg") }}')">
                            <i class="fas fa-copy"></i> snowy-6
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/thunder.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/thunder.svg") }}')">
                            <i class="fas fa-copy"></i> thunder
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                    <div class="col-md-3 icon-col">

                        <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/static/weather.svg') }}" alt="" class="img-fluid">
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/widgets/amcharts-weather-icons/static/weather.svg") }}')">
                            <i class="fas fa-copy"></i> weather
                        </button>

                    </div><!-- / .col-md-3.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Static -->

    </div>
@stop
@section('script')
    <script src="{{ asset('assets/js/manager/js-list-manager.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.min.js') }}"></script>
    <script>
        function copyAndNotify( text ) {
            copyToClipboard( text ) ;

            exonNotify( "Copied!", `Selected icon : ${text} has been copied to the clipboard!`, {icon: "fas fa-copy", type: "dark"} ) ;
        }
    </script>
@stop
