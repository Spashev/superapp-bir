@extends('admin.layouts')
@section('content')
    <div class="page-content">

        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0">Undraw</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/">Icons</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Undraw</li>
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
                <p class="mb-0"><a href="https://undraw.co/">Undraw</a> - Open-source illustrations for any idea you can imagine and create.</p>
            </div>
        </div><!-- / Introduction -->

        <!-- Illustrations -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Illustrations</h3>
            </div>
            <div class="panel-body panel-illustrations pt-0">

                <div class="form-group credit-right my-5 mx-auto" style="max-width: 400px;">
                    <div class="input-group input-group-merged">
                        <input type="search" class="form-control search" placeholder="Search For Illustrations...">
                        <div class="input-group-append">
											<span class="input-group-text bg-white">
												<svg id="lnr-magnifier" width="14" viewBox="0 0 1024 1024"><path class="path1" d="M966.070 981.101l-304.302-331.965c68.573-71.754 106.232-165.549 106.232-265.136 0-102.57-39.942-199-112.47-271.53s-168.96-112.47-271.53-112.47-199 39.942-271.53 112.47-112.47 168.96-112.47 271.53 39.942 199.002 112.47 271.53 168.96 112.47 271.53 112.47c88.362 0 172.152-29.667 240.043-84.248l304.285 331.947c5.050 5.507 11.954 8.301 18.878 8.301 6.179 0 12.378-2.226 17.293-6.728 10.421-9.555 11.126-25.749 1.571-36.171zM51.2 384c0-183.506 149.294-332.8 332.8-332.8s332.8 149.294 332.8 332.8-149.294 332.8-332.8 332.8-332.8-149.294-332.8-332.8z"></path></svg>
											</span>
                        </div>
                    </div>
                </div>

                <div id="undraw-illustrations"><div class="lister-component filled" id="lister-component-1">
                        <div class="dynamic-content" style="position: relative; ">
                            <div class="list-wrapper">
                                <div class="row lister-template-root">
                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_add_to_cart_vkjp.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_add_to_cart_vkjp.svg") }}', 'Add To Cart')">
                                            <i class="fas fa-copy"></i> Add To Cart
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_breakfast_psiw.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_breakfast_psiw.svg") }}', 'Breakfast')">
                                            <i class="fas fa-copy"></i> Breakfast
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_browsing_urt9.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_browsing_urt9.svg") }}', 'Browsing')">
                                            <i class="fas fa-copy"></i> Browsing
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_code_thinking_1jeh.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_code_thinking_1jeh.svg") }}', 'Code Thinking')">
                                            <i class="fas fa-copy"></i> Code Thinking
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_confirm_89ui.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_confirm_89ui.svg") }}', 'Confirm')">
                                            <i class="fas fa-copy"></i> Confirm
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_data_report_bi6l.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_data_report_bi6l.svg") }}', 'Data Report')">
                                            <i class="fas fa-copy"></i> Data Report
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_empty_xct9.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_empty_xct9.svg") }}', 'Empty')">
                                            <i class="fas fa-copy"></i> Empty
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_faq_rjoy.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_faq_rjoy.svg") }}', 'Faq')">
                                            <i class="fas fa-copy"></i> Faq
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_instant_support_elxh.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_instant_support_elxh.svg") }}', 'Instant Support')">
                                            <i class="fas fa-copy"></i> Instant Support
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_loading_frh4.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_loading_frh4.svg") }}', 'Loading')">
                                            <i class="fas fa-copy"></i> Loading
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_mobile_login_ikmv.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_mobile_login_ikmv.svg") }}', 'Mobile Login')">
                                            <i class="fas fa-copy"></i> Mobile Login
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_new_decade_n4qd.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_new_decade_n4qd.svg") }}', 'New Decade')">
                                            <i class="fas fa-copy"></i> New Decade
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_on_the_office_fbfs.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_on_the_office_fbfs.svg") }}', 'On The Office')">
                                            <i class="fas fa-copy"></i> On The Office
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_online_transactions_02ka.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_online_transactions_02ka.svg") }}', 'Online Transactions')">
                                            <i class="fas fa-copy"></i> Online Transactions
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_personal_file_222m.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_personal_file_222m.svg") }}', 'Personal File')">
                                            <i class="fas fa-copy"></i> Personal File
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_predictive_analytics_kf9n.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_predictive_analytics_kf9n.svg") }}', 'Predictive Analytics')">
                                            <i class="fas fa-copy"></i> Predictive Analytics
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_proud_self_1ddv.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_proud_self_1ddv.svg") }}', 'Proud Self')">
                                            <i class="fas fa-copy"></i> Proud Self
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_questions_75e0.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_questions_75e0.svg") }}', 'Questions')">
                                            <i class="fas fa-copy"></i> Questions
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_redesign_feedback_48ti.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_redesign_feedback_48ti.svg") }}', 'Redesign Feedback')">
                                            <i class="fas fa-copy"></i> Redesign Feedback
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_selecting_team_8uux.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_selecting_team_8uux.svg") }}', 'Selecting Team')">
                                            <i class="fas fa-copy"></i> Selecting Team
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_to_the_moon_v1mv.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_to_the_moon_v1mv.svg") }}', 'To The Moon')">
                                            <i class="fas fa-copy"></i> To The Moon
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_unicorn_dp2f.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_unicorn_dp2f.svg") }}', 'Unicorn')">
                                            <i class="fas fa-copy"></i> Unicorn
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_xmas_snowman_k7yf.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_xmas_snowman_k7yf.svg") }}', 'Xmas Snowman')">
                                            <i class="fas fa-copy"></i> Xmas Snowman
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_warning_cyit.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_warning_cyit.svg") }}', 'Warning')">
                                            <i class="fas fa-copy"></i> Warning
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_wind_turbine_x2k4.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_wind_turbine_x2k4.svg") }}', 'Wind Turbine')">
                                            <i class="fas fa-copy"></i> Wind Turbine
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_dark_analytics_7axy.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_dark_analytics_7axy.svg") }}', 'Dark Analytics')">
                                            <i class="fas fa-copy"></i> Dark Analytics
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_logistics_x4dc.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_logistics_x4dc.svg") }}', 'Logistics')">
                                            <i class="fas fa-copy"></i> Logistics
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_fireworks_q5ji.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_fireworks_q5ji.svg") }}', 'Fireworks')">
                                            <i class="fas fa-copy"></i> Fireworks
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_operating_system_4lr6.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_operating_system_4lr6.svg") }}', 'Operating System')">
                                            <i class="fas fa-copy"></i> Operating System
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_going_up_ttm5.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_going_up_ttm5.svg") }}', 'Going Up')">
                                            <i class="fas fa-copy"></i> Going Up
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_to_do_xvvc.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_to_do_xvvc.svg") }}', 'To Do')">
                                            <i class="fas fa-copy"></i> To Do
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_to_do_xvvc (1).svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_to_do_xvvc (1).svg") }}', 'To Do 2')">
                                            <i class="fas fa-copy"></i> To Do 2
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_mobile_life_381t.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_mobile_life_381t.svg") }}', 'Mobile Life')">
                                            <i class="fas fa-copy"></i> Mobile Life
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_conference_uo36.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_conference_uo36.svg") }}', 'Conference')">
                                            <i class="fas fa-copy"></i> Conference
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_buddies_tb1l.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_buddies_tb1l.svg") }}', 'Buddies')">
                                            <i class="fas fa-copy"></i> Buddies
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_Stability_ball_b4ia.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_Stability_ball_b4ia.svg") }}', 'Stability Ball')">
                                            <i class="fas fa-copy"></i> Stability Ball
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_edit_photo_2m6o.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_edit_photo_2m6o.svg") }}', 'Edit Photo')">
                                            <i class="fas fa-copy"></i> Edit Photo
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_preferences_popup_wbfw.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_preferences_popup_wbfw.svg") }}', 'Preferences Popup')">
                                            <i class="fas fa-copy"></i> Preferences Popup
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_data_trends_b0wg.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_data_trends_b0wg.svg") }}', 'Data Trends')">
                                            <i class="fas fa-copy"></i> Data Trends
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <img src="{{ asset('assets/media/svg/undraw/undraw_product_tour_foyt.svg') }}" alt="" class="img-fluid">
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('{{ asset("assets/media/svg/undraw/undraw_product_tour_foyt.svg") }}', 'Product Tour')">
                                            <i class="fas fa-copy"></i> Product Tour
                                        </button>
                                    </div><!-- / .col-md-3.icon-col --></div>
                            </div> <!-- / .list-wrapper -->

                            <div class="table-loading loading-wrapper">
                                <div class="load-wrapp status">
                                    <div class="load-6">
                                        <div class="letter-holder">
                                            <div class="l-1 letter">L</div>
                                            <div class="l-2 letter">o</div>
                                            <div class="l-3 letter">a</div>
                                            <div class="l-4 letter">d</div>
                                            <div class="l-5 letter">i</div>
                                            <div class="l-6 letter">n</div>
                                            <div class="l-7 letter">g</div>
                                            <div class="l-8 letter">.</div>
                                            <div class="l-9 letter">.</div>
                                            <div class="l-10 letter">.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- / .dynamic-content --></div> <!-- .lister-component --></div>

            </div>
        </div><!-- / Illustrations -->

    </div>
@stop
@section('script')
    <script src="{{ asset('assets/js/manager/js-list-manager.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/icon/undraw.js') }}"></script>
@stop
