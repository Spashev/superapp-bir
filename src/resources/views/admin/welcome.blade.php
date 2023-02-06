@extends('admin.layouts')
@section('content')
    <div class="row mt-n24">

    <div class="col-xl-4 col-lg-6 col-md-6 mt-24">
        <div class="widget widget-weather widget-weather-simple">

            <div class="widget-icon-bg">
                <img src="{{ asset('assets/media/widgets/amcharts-weather-icons/cloudy-day-1.svg') }}" width="80">
            </div>

            <div class="widget-content">
                <h6 class="widget-degree">
                    29<small>&deg;c</small>
                </h6>
                <div class="widget-label">
                    <h6>Shymkent</h6>
                    <small>Kazakhstan</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6 col-md-6 mt-24">
        <div class="widget widget-chart-8">
            <div class="title">
                <h5>Total clients</h5>
                <span>
                    Total : {{$clientsCount ?: 0}}
                </span>
            </div>
            <div class="widget-chart">
                <div id="area-1" style="height: 100px"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6 col-md-6 mt-24">
        <div class="widget widget-chart-8">
            <div class="title">
                <h5>Total products</h5>
                <span>
                    Total : {{$productsCount ?: 0}}
                </span>
            </div>
            <div class="widget-chart">
                <div id="bar-chart-1" style="height: 170px; margin: -20px 0px -50px;"></div>
            </div>
        </div>
    </div>

    </div>
    <div class="row">

    <div class="col-md-8">

        <!-- Basic Column Chart -->
        <div class="panel panel-light">
            <div class="panel-header border-0">
                <h1 class="panel-title">Basic Column Chart</h1>
            </div>
            <div class="panel-body py-0">

                <div id="basic-column" style="height: 320px; "></div>

            </div>
        </div><!-- / Basic Column Chart -->

    </div>

    <div class="col-md-4">

        <!-- Traffic Report -->
        <div class="panel panel-light">
            <div class="panel-header border-0">
                <h1 class="panel-title">Traffic Report</h1>
            </div>
            <div class="panel-body card widget-vertical shadow-none py-0">

                <div class="chart mt-2 mb-5">
                    <div id="am-donut-1" class="donut"></div>
                </div>
                <div class="content pb-0">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet praesentium labore
                        quam similique itaque.
                    </p>
                </div>

            </div>
        </div><!-- / Traffic Report -->

    </div>

</div>
@stop

@section('welcome')
    <script src="{{ asset('assets/js/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('assets/js/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/manager/js-list-manager.js') }}"></script>
    <script src="{{ asset('assets/js/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@stop
