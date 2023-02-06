@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0">Fontawesome 5</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/">Icons</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fontawesome 5</li>
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
                <p class="mb-0"><a href="https://fontawesome.com/">Fontawesome</a> - Get vector icons and social logos on your website with Font Awesome, the web's most popular icon set and toolkit.</p>
            </div>
        </div><!-- / Introduction -->

        <!-- Solid -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Solid</h3>
            </div>
            <div class="panel-body panel-icons-ref pt-0">

                <div class="form-group credit-right my-5 mx-auto" style="max-width: 400px;">
                    <div class="input-group input-group-merged">
                        <input type="search" class="form-control search-fontawesome-solid" placeholder="Search For Icons...">
                        <div class="input-group-append">
											<span class="input-group-text bg-white">
												<svg id="lnr-magnifier" width="14" viewBox="0 0 1024 1024"><path class="path1" d="M966.070 981.101l-304.302-331.965c68.573-71.754 106.232-165.549 106.232-265.136 0-102.57-39.942-199-112.47-271.53s-168.96-112.47-271.53-112.47-199 39.942-271.53 112.47-112.47 168.96-112.47 271.53 39.942 199.002 112.47 271.53 168.96 112.47 271.53 112.47c88.362 0 172.152-29.667 240.043-84.248l304.285 331.947c5.050 5.507 11.954 8.301 18.878 8.301 6.179 0 12.378-2.226 17.293-6.728 10.421-9.555 11.126-25.749 1.571-36.171zM51.2 384c0-183.506 149.294-332.8 332.8-332.8s332.8 149.294 332.8 332.8-149.294 332.8-332.8 332.8-332.8-149.294-332.8-332.8z"></path></svg>
											</span>
                        </div>
                    </div>
                </div>

                <div id="fontawesome-solid"><div class="lister-component filled" id="lister-component-1">
                        <div class="dynamic-content" style="position: relative; ">
                            <div class="list-wrapper">
                                <div class="row lister-template-root">
                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-bicycle"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-bicycle')">
                                            <i class="fas fa-copy"></i> bicycle
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-church"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-church')">
                                            <i class="fas fa-copy"></i> church
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-book-reader"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-book-reader')">
                                            <i class="fas fa-copy"></i> book-reader
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-laptop-house"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-laptop-house')">
                                            <i class="fas fa-copy"></i> laptop-house
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-arrow-circle-up"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-arrow-circle-up')">
                                            <i class="fas fa-copy"></i> arrow-circle-up
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-hanukiah"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-hanukiah')">
                                            <i class="fas fa-copy"></i> hanukiah
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-moon"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-moon')">
                                            <i class="fas fa-copy"></i> moon
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-restroom"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-restroom')">
                                            <i class="fas fa-copy"></i> restroom
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-grin-tongue-wink"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-grin-tongue-wink')">
                                            <i class="fas fa-copy"></i> grin-tongue-wink
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-folder-minus"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-folder-minus')">
                                            <i class="fas fa-copy"></i> folder-minus
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-arrow-circle-down"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-arrow-circle-down')">
                                            <i class="fas fa-copy"></i> arrow-circle-down
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-map-signs"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-map-signs')">
                                            <i class="fas fa-copy"></i> map-signs
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-infinity"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-infinity')">
                                            <i class="fas fa-copy"></i> infinity
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-play"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-play')">
                                            <i class="fas fa-copy"></i> play
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-inbox"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-inbox')">
                                            <i class="fas fa-copy"></i> inbox
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-poop"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-poop')">
                                            <i class="fas fa-copy"></i> poop
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-cocktail"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-cocktail')">
                                            <i class="fas fa-copy"></i> cocktail
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-money-check-alt"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-money-check-alt')">
                                            <i class="fas fa-copy"></i> money-check-alt
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-luggage-cart"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-luggage-cart')">
                                            <i class="fas fa-copy"></i> luggage-cart
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-pepper-hot"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-pepper-hot')">
                                            <i class="fas fa-copy"></i> pepper-hot
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-list"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-list')">
                                            <i class="fas fa-copy"></i> list
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-rss"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-rss')">
                                            <i class="fas fa-copy"></i> rss
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-hippo"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-hippo')">
                                            <i class="fas fa-copy"></i> hippo
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-venus"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-venus')">
                                            <i class="fas fa-copy"></i> venus
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-history"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-history')">
                                            <i class="fas fa-copy"></i> history
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-random"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-random')">
                                            <i class="fas fa-copy"></i> random
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-columns"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-columns')">
                                            <i class="fas fa-copy"></i> columns
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-weight-hanging"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-weight-hanging')">
                                            <i class="fas fa-copy"></i> weight-hanging
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-archway"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-archway')">
                                            <i class="fas fa-copy"></i> archway
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-exclamation-triangle')">
                                            <i class="fas fa-copy"></i> exclamation-triangle
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-grip-horizontal"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-grip-horizontal')">
                                            <i class="fas fa-copy"></i> grip-horizontal
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-meh-rolling-eyes"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-meh-rolling-eyes')">
                                            <i class="fas fa-copy"></i> meh-rolling-eyes
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-feather"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-feather')">
                                            <i class="fas fa-copy"></i> feather
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-theater-masks"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-theater-masks')">
                                            <i class="fas fa-copy"></i> theater-masks
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-phone-volume"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-phone-volume')">
                                            <i class="fas fa-copy"></i> phone-volume
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-step-forward"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-step-forward')">
                                            <i class="fas fa-copy"></i> step-forward
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-mail-bulk"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-mail-bulk')">
                                            <i class="fas fa-copy"></i> mail-bulk
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-star-half-alt"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-star-half-alt')">
                                            <i class="fas fa-copy"></i> star-half-alt
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-pencil-alt"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-pencil-alt')">
                                            <i class="fas fa-copy"></i> pencil-alt
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-unlink"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-unlink')">
                                            <i class="fas fa-copy"></i> unlink
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-tags"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-tags')">
                                            <i class="fas fa-copy"></i> tags
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-grip-lines-vertical"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-grip-lines-vertical')">
                                            <i class="fas fa-copy"></i> grip-lines-vertical
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-comment-dots"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-comment-dots')">
                                            <i class="fas fa-copy"></i> comment-dots
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-holly-berry"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-holly-berry')">
                                            <i class="fas fa-copy"></i> holly-berry
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-volume-mute"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-volume-mute')">
                                            <i class="fas fa-copy"></i> volume-mute
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-people-arrows"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-people-arrows')">
                                            <i class="fas fa-copy"></i> people-arrows
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-sort-numeric-down-alt"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-sort-numeric-down-alt')">
                                            <i class="fas fa-copy"></i> sort-numeric-down-alt
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fas fa-map"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fas fa-map')">
                                            <i class="fas fa-copy"></i> map
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

                        </div> <!-- / .dynamic-content --><div class="pagination-wrapper">
                            <div class="load-more">
                                <button type="button" class="btn btn-block btn-lg btn-light btn-ellipsis-loader mt-4 load-more-btn" data-page="2">
                                    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                                </button>
                            </div></div> <!-- / .pagination-wrapper --></div> <!-- .lister-component --></div>

            </div>
        </div><!-- / Solid -->

        <!-- Regular -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Regular</h3>
            </div>
            <div class="panel-body panel-icons-ref pt-0">

                <div class="form-group credit-right my-5 mx-auto" style="max-width: 400px;">
                    <div class="input-group input-group-merged">
                        <input type="search" class="form-control search-fontawesome-regular" placeholder="Search For Icons...">
                        <div class="input-group-append">
											<span class="input-group-text bg-white">
												<svg id="lnr-magnifier" width="14" viewBox="0 0 1024 1024"><path class="path1" d="M966.070 981.101l-304.302-331.965c68.573-71.754 106.232-165.549 106.232-265.136 0-102.57-39.942-199-112.47-271.53s-168.96-112.47-271.53-112.47-199 39.942-271.53 112.47-112.47 168.96-112.47 271.53 39.942 199.002 112.47 271.53 168.96 112.47 271.53 112.47c88.362 0 172.152-29.667 240.043-84.248l304.285 331.947c5.050 5.507 11.954 8.301 18.878 8.301 6.179 0 12.378-2.226 17.293-6.728 10.421-9.555 11.126-25.749 1.571-36.171zM51.2 384c0-183.506 149.294-332.8 332.8-332.8s332.8 149.294 332.8 332.8-149.294 332.8-332.8 332.8-332.8-149.294-332.8-332.8z"></path></svg>
											</span>
                        </div>
                    </div>
                </div>

                <div id="fontawesome-regular"><div class="lister-component filled" id="lister-component-2">
                        <div class="dynamic-content" style="position: relative; ">
                            <div class="list-wrapper">
                                <div class="row lister-template-root">
                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-moon"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-moon')">
                                            <i class="fas fa-copy"></i> moon
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-grin-tongue-wink"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-grin-tongue-wink')">
                                            <i class="fas fa-copy"></i> grin-tongue-wink
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-meh-rolling-eyes"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-meh-rolling-eyes')">
                                            <i class="fas fa-copy"></i> meh-rolling-eyes
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-comment-dots"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-comment-dots')">
                                            <i class="fas fa-copy"></i> comment-dots
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-map"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-map')">
                                            <i class="fas fa-copy"></i> map
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-hand-rock"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-hand-rock')">
                                            <i class="fas fa-copy"></i> hand-rock
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-frown"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-frown')">
                                            <i class="fas fa-copy"></i> frown
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-play-circle"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-play-circle')">
                                            <i class="fas fa-copy"></i> play-circle
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-thumbs-down"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-thumbs-down')">
                                            <i class="fas fa-copy"></i> thumbs-down
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-question-circle"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-question-circle')">
                                            <i class="fas fa-copy"></i> question-circle
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-star-half"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-star-half')">
                                            <i class="fas fa-copy"></i> star-half
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-grin-hearts"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-grin-hearts')">
                                            <i class="fas fa-copy"></i> grin-hearts
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-file-excel"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-file-excel')">
                                            <i class="fas fa-copy"></i> file-excel
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-registered"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-registered')">
                                            <i class="fas fa-copy"></i> registered
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-newspaper"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-newspaper')">
                                            <i class="fas fa-copy"></i> newspaper
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-caret-square-up"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-caret-square-up')">
                                            <i class="fas fa-copy"></i> caret-square-up
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-sticky-note"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-sticky-note')">
                                            <i class="fas fa-copy"></i> sticky-note
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-pause-circle"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-pause-circle')">
                                            <i class="fas fa-copy"></i> pause-circle
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-laugh"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-laugh')">
                                            <i class="fas fa-copy"></i> laugh
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-bell"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-bell')">
                                            <i class="fas fa-copy"></i> bell
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-id-card"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-id-card')">
                                            <i class="fas fa-copy"></i> id-card
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-square"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-square')">
                                            <i class="fas fa-copy"></i> square
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-check-circle"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-check-circle')">
                                            <i class="fas fa-copy"></i> check-circle
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-grin-tongue-squint"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-grin-tongue-squint')">
                                            <i class="fas fa-copy"></i> grin-tongue-squint
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-sad-tear"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-sad-tear')">
                                            <i class="fas fa-copy"></i> sad-tear
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-grin-wink"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-grin-wink')">
                                            <i class="fas fa-copy"></i> grin-wink
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-credit-card"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-credit-card')">
                                            <i class="fas fa-copy"></i> credit-card
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-file-video"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-file-video')">
                                            <i class="fas fa-copy"></i> file-video
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-save"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-save')">
                                            <i class="fas fa-copy"></i> save
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-envelope"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-envelope')">
                                            <i class="fas fa-copy"></i> envelope
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-hospital"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-hospital')">
                                            <i class="fas fa-copy"></i> hospital
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-meh"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-meh')">
                                            <i class="fas fa-copy"></i> meh
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-calendar-check"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-calendar-check')">
                                            <i class="fas fa-copy"></i> calendar-check
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-hand-scissors"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-hand-scissors')">
                                            <i class="fas fa-copy"></i> hand-scissors
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-flushed"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-flushed')">
                                            <i class="fas fa-copy"></i> flushed
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-minus-square"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-minus-square')">
                                            <i class="fas fa-copy"></i> minus-square
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-font-awesome-logo-full"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-font-awesome-logo-full')">
                                            <i class="fas fa-copy"></i> font-awesome-logo-full
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-thumbs-up"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-thumbs-up')">
                                            <i class="fas fa-copy"></i> thumbs-up
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-plus-square"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-plus-square')">
                                            <i class="fas fa-copy"></i> plus-square
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-hdd"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-hdd')">
                                            <i class="fas fa-copy"></i> hdd
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-tired"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-tired')">
                                            <i class="fas fa-copy"></i> tired
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-kiss-beam"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-kiss-beam')">
                                            <i class="fas fa-copy"></i> kiss-beam
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-grin-stars"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-grin-stars')">
                                            <i class="fas fa-copy"></i> grin-stars
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-images"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-images')">
                                            <i class="fas fa-copy"></i> images
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-lemon"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-lemon')">
                                            <i class="fas fa-copy"></i> lemon
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-folder"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-folder')">
                                            <i class="fas fa-copy"></i> folder
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-grin-squint"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-grin-squint')">
                                            <i class="fas fa-copy"></i> grin-squint
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="far fa-grin-squint-tears"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('far fa-grin-squint-tears')">
                                            <i class="fas fa-copy"></i> grin-squint-tears
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

                        </div> <!-- / .dynamic-content --><div class="pagination-wrapper">
                            <div class="load-more">
                                <button type="button" class="btn btn-block btn-lg btn-light btn-ellipsis-loader mt-4 load-more-btn" data-page="2">
                                    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                                </button>
                            </div></div> <!-- / .pagination-wrapper --></div> <!-- .lister-component --></div>

            </div>
        </div><!-- / Regular -->

        <!-- Brands -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Brands</h3>
            </div>
            <div class="panel-body panel-icons-ref pt-0">

                <div class="form-group credit-right my-5 mx-auto" style="max-width: 400px;">
                    <div class="input-group input-group-merged">
                        <input type="search" class="form-control search-fontawesome-brand" placeholder="Search For Icons...">
                        <div class="input-group-append">
											<span class="input-group-text bg-white">
												<svg id="lnr-magnifier" width="14" viewBox="0 0 1024 1024"><path class="path1" d="M966.070 981.101l-304.302-331.965c68.573-71.754 106.232-165.549 106.232-265.136 0-102.57-39.942-199-112.47-271.53s-168.96-112.47-271.53-112.47-199 39.942-271.53 112.47-112.47 168.96-112.47 271.53 39.942 199.002 112.47 271.53 168.96 112.47 271.53 112.47c88.362 0 172.152-29.667 240.043-84.248l304.285 331.947c5.050 5.507 11.954 8.301 18.878 8.301 6.179 0 12.378-2.226 17.293-6.728 10.421-9.555 11.126-25.749 1.571-36.171zM51.2 384c0-183.506 149.294-332.8 332.8-332.8s332.8 149.294 332.8 332.8-149.294 332.8-332.8 332.8-332.8-149.294-332.8-332.8z"></path></svg>
											</span>
                        </div>
                    </div>
                </div>

                <div id="fontawesome-brand"><div class="lister-component filled" id="lister-component-3">
                        <div class="dynamic-content" style="position: relative; ">
                            <div class="list-wrapper">
                                <div class="row lister-template-root">
                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-ethereum"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-ethereum')">
                                            <i class="fas fa-copy"></i> ethereum
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-dailymotion"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-dailymotion')">
                                            <i class="fas fa-copy"></i> dailymotion
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-opencart"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-opencart')">
                                            <i class="fas fa-copy"></i> opencart
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-twitter-square"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-twitter-square')">
                                            <i class="fas fa-copy"></i> twitter-square
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-uikit"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-uikit')">
                                            <i class="fas fa-copy"></i> uikit
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-cloudsmith"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-cloudsmith')">
                                            <i class="fas fa-copy"></i> cloudsmith
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-google-plus"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-google-plus')">
                                            <i class="fas fa-copy"></i> google-plus
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-fantasy-flight-games"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-fantasy-flight-games')">
                                            <i class="fas fa-copy"></i> fantasy-flight-games
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-rocketchat"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-rocketchat')">
                                            <i class="fas fa-copy"></i> rocketchat
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-firstdraft"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-firstdraft')">
                                            <i class="fas fa-copy"></i> firstdraft
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-fonticons"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-fonticons')">
                                            <i class="fas fa-copy"></i> fonticons
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-drupal"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-drupal')">
                                            <i class="fas fa-copy"></i> drupal
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-nutritionix"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-nutritionix')">
                                            <i class="fas fa-copy"></i> nutritionix
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-creative-commons-remix"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-creative-commons-remix')">
                                            <i class="fas fa-copy"></i> creative-commons-remix
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-renren"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-renren')">
                                            <i class="fas fa-copy"></i> renren
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-imdb"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-imdb')">
                                            <i class="fas fa-copy"></i> imdb
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-amazon"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-amazon')">
                                            <i class="fas fa-copy"></i> amazon
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-python"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-python')">
                                            <i class="fas fa-copy"></i> python
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-uniregistry"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-uniregistry')">
                                            <i class="fas fa-copy"></i> uniregistry
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-linux"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-linux')">
                                            <i class="fas fa-copy"></i> linux
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-wpbeginner"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-wpbeginner')">
                                            <i class="fas fa-copy"></i> wpbeginner
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-grav"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-grav')">
                                            <i class="fas fa-copy"></i> grav
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-alipay"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-alipay')">
                                            <i class="fas fa-copy"></i> alipay
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-linode"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-linode')">
                                            <i class="fas fa-copy"></i> linode
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-btc"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-btc')">
                                            <i class="fas fa-copy"></i> btc
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-erlang"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-erlang')">
                                            <i class="fas fa-copy"></i> erlang
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-glide"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-glide')">
                                            <i class="fas fa-copy"></i> glide
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-markdown"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-markdown')">
                                            <i class="fas fa-copy"></i> markdown
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-ember"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-ember')">
                                            <i class="fas fa-copy"></i> ember
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-deezer"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-deezer')">
                                            <i class="fas fa-copy"></i> deezer
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-creative-commons"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-creative-commons')">
                                            <i class="fas fa-copy"></i> creative-commons
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-themeisle"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-themeisle')">
                                            <i class="fas fa-copy"></i> themeisle
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-wolf-pack-battalion"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-wolf-pack-battalion')">
                                            <i class="fas fa-copy"></i> wolf-pack-battalion
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-cc-amazon-pay"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-cc-amazon-pay')">
                                            <i class="fas fa-copy"></i> cc-amazon-pay
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-creative-commons-nc-jp"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-creative-commons-nc-jp')">
                                            <i class="fas fa-copy"></i> creative-commons-nc-jp
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-odnoklassniki-square"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-odnoklassniki-square')">
                                            <i class="fas fa-copy"></i> odnoklassniki-square
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-fulcrum"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-fulcrum')">
                                            <i class="fas fa-copy"></i> fulcrum
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-strava"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-strava')">
                                            <i class="fas fa-copy"></i> strava
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-steam-square"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-steam-square')">
                                            <i class="fas fa-copy"></i> steam-square
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-salesforce"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-salesforce')">
                                            <i class="fas fa-copy"></i> salesforce
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-usps"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-usps')">
                                            <i class="fas fa-copy"></i> usps
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-hubspot"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-hubspot')">
                                            <i class="fas fa-copy"></i> hubspot
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-product-hunt"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-product-hunt')">
                                            <i class="fas fa-copy"></i> product-hunt
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-shopify"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-shopify')">
                                            <i class="fas fa-copy"></i> shopify
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-page4"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-page4')">
                                            <i class="fas fa-copy"></i> page4
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-steam"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-steam')">
                                            <i class="fas fa-copy"></i> steam
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-telegram-plane"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-telegram-plane')">
                                            <i class="fas fa-copy"></i> telegram-plane
                                        </button>
                                    </div><!-- / .col-md-3.icon-col -->

                                    <div class="col-md-3 icon-col">
                                        <i class="fab fa-quinscape"></i>
                                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('fab fa-quinscape')">
                                            <i class="fas fa-copy"></i> quinscape
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

                        </div> <!-- / .dynamic-content --><div class="pagination-wrapper">
                            <div class="load-more">
                                <button type="button" class="btn btn-block btn-lg btn-light btn-ellipsis-loader mt-4 load-more-btn" data-page="2">
                                    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                                </button>
                            </div></div> <!-- / .pagination-wrapper --></div> <!-- .lister-component --></div>

            </div>
        </div><!-- / Brands -->

    </div>
@stop

@section('script')
    <script src="{{ asset('assets/js/manager/js-list-manager.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/icon/fontawesome-5.js') }}"></script>
@stop
