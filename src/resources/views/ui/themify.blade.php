@extends('admin.layouts')
@section('content')
    <div class="page-content">

        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0">Themify</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/">Icons</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Themify</li>
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
                <p class="mb-0"><a href="https://themify.me/themify-icons">Themify</a> - Themify Icons is a complete set of icons for use in web design and apps...</p>
            </div>
        </div><!-- / Introduction -->

        <!-- Arrows & Direction Icons -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Arrows &amp; Direction Icons</h3>
            </div>
            <div class="panel-body panel-icons-ref themify">

                <div class="row">

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-up')">
                            <i class="fas fa-copy"></i> ti-arrow-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-right')">
                            <i class="fas fa-copy"></i> ti-arrow-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-left')">
                            <i class="fas fa-copy"></i> ti-arrow-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-down')">
                            <i class="fas fa-copy"></i> ti-arrow-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrows-vertical"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrows-vertical')">
                            <i class="fas fa-copy"></i> ti-arrows-vertical</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrows-horizontal"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrows-horizontal')">
                            <i class="fas fa-copy"></i> ti-arrows-horizontal</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-up')">
                            <i class="fas fa-copy"></i> ti-angle-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-right')">
                            <i class="fas fa-copy"></i> ti-angle-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-left')">
                            <i class="fas fa-copy"></i> ti-angle-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-down')">
                            <i class="fas fa-copy"></i> ti-angle-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-double-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-double-up')">
                            <i class="fas fa-copy"></i> ti-angle-double-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-double-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-double-right')">
                            <i class="fas fa-copy"></i> ti-angle-double-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-double-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-double-left')">
                            <i class="fas fa-copy"></i> ti-angle-double-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-angle-double-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-angle-double-down')">
                            <i class="fas fa-copy"></i> ti-angle-double-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-move"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-move')">
                            <i class="fas fa-copy"></i> ti-move</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-fullscreen"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-fullscreen')">
                            <i class="fas fa-copy"></i> ti-fullscreen</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-top-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-top-right')">
                            <i class="fas fa-copy"></i> ti-arrow-top-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-top-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-top-left')">
                            <i class="fas fa-copy"></i> ti-arrow-top-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-circle-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-circle-up')">
                            <i class="fas fa-copy"></i> ti-arrow-circle-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-circle-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-circle-right')">
                            <i class="fas fa-copy"></i> ti-arrow-circle-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-circle-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-circle-left')">
                            <i class="fas fa-copy"></i> ti-arrow-circle-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrow-circle-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrow-circle-down')">
                            <i class="fas fa-copy"></i> ti-arrow-circle-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-arrows-corner"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-arrows-corner')">
                            <i class="fas fa-copy"></i> ti-arrows-corner</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-split-v"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-split-v')">
                            <i class="fas fa-copy"></i> ti-split-v</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-split-v-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-split-v-alt')">
                            <i class="fas fa-copy"></i> ti-split-v-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-split-h"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-split-h')">
                            <i class="fas fa-copy"></i> ti-split-h</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hand-point-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hand-point-up')">
                            <i class="fas fa-copy"></i> ti-hand-point-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hand-point-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hand-point-right')">
                            <i class="fas fa-copy"></i> ti-hand-point-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hand-point-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hand-point-left')">
                            <i class="fas fa-copy"></i> ti-hand-point-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hand-point-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hand-point-down')">
                            <i class="fas fa-copy"></i> ti-hand-point-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-back-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-back-right')">
                            <i class="fas fa-copy"></i> ti-back-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-back-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-back-left')">
                            <i class="fas fa-copy"></i> ti-back-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-exchange-vertical"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-exchange-vertical')">
                            <i class="fas fa-copy"></i> ti-exchange-vertical</button>

                    </div><!-- / .col-md-2.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Arrows & Direction Icons -->

        <!-- Web App Icons -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Web App Icons</h3>
            </div>
            <div class="panel-body panel-icons-ref themify">

                <div class="row">

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-wand"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-wand')">
                            <i class="fas fa-copy"></i> ti-wand</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-save"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-save')">
                            <i class="fas fa-copy"></i> ti-save</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-save-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-save-alt')">
                            <i class="fas fa-copy"></i> ti-save-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-direction"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-direction')">
                            <i class="fas fa-copy"></i> ti-direction</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-direction-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-direction-alt')">
                            <i class="fas fa-copy"></i> ti-direction-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-user"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-user')">
                            <i class="fas fa-copy"></i> ti-user</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-link"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-link')">
                            <i class="fas fa-copy"></i> ti-link</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-unlink"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-unlink')">
                            <i class="fas fa-copy"></i> ti-unlink</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-trash"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-trash')">
                            <i class="fas fa-copy"></i> ti-trash</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-target"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-target')">
                            <i class="fas fa-copy"></i> ti-target</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-tag"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-tag')">
                            <i class="fas fa-copy"></i> ti-tag</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-desktop"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-desktop')">
                            <i class="fas fa-copy"></i> ti-desktop</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-tablet"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-tablet')">
                            <i class="fas fa-copy"></i> ti-tablet</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-mobile"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-mobile')">
                            <i class="fas fa-copy"></i> ti-mobile</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-email"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-email')">
                            <i class="fas fa-copy"></i> ti-email</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-star"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-star')">
                            <i class="fas fa-copy"></i> ti-star</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-spray"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-spray')">
                            <i class="fas fa-copy"></i> ti-spray</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-signal"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-signal')">
                            <i class="fas fa-copy"></i> ti-signal</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shopping-cart"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shopping-cart')">
                            <i class="fas fa-copy"></i> ti-shopping-cart</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shopping-cart-full"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shopping-cart-full')">
                            <i class="fas fa-copy"></i> ti-shopping-cart-full</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-settings"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-settings')">
                            <i class="fas fa-copy"></i> ti-settings</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-search"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-search')">
                            <i class="fas fa-copy"></i> ti-search</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-zoom-in"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-zoom-in')">
                            <i class="fas fa-copy"></i> ti-zoom-in</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-zoom-out"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-zoom-out')">
                            <i class="fas fa-copy"></i> ti-zoom-out</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-cut"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-cut')">
                            <i class="fas fa-copy"></i> ti-cut</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-ruler"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-ruler')">
                            <i class="fas fa-copy"></i> ti-ruler</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-ruler-alt-2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-ruler-alt-2')">
                            <i class="fas fa-copy"></i> ti-ruler-alt-2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-ruler-pencil"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-ruler-pencil')">
                            <i class="fas fa-copy"></i> ti-ruler-pencil</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-ruler-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-ruler-alt')">
                            <i class="fas fa-copy"></i> ti-ruler-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bookmark"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bookmark')">
                            <i class="fas fa-copy"></i> ti-bookmark</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bookmark-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bookmark-alt')">
                            <i class="fas fa-copy"></i> ti-bookmark-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-reload"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-reload')">
                            <i class="fas fa-copy"></i> ti-reload</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-plus"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-plus')">
                            <i class="fas fa-copy"></i> ti-plus</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-minus"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-minus')">
                            <i class="fas fa-copy"></i> ti-minus</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-close"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-close')">
                            <i class="fas fa-copy"></i> ti-close</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pin"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pin')">
                            <i class="fas fa-copy"></i> ti-pin</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pencil"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pencil')">
                            <i class="fas fa-copy"></i> ti-pencil</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pencil-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pencil-alt')">
                            <i class="fas fa-copy"></i> ti-pencil-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-paint-roller"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-paint-roller')">
                            <i class="fas fa-copy"></i> ti-paint-roller</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-paint-bucket"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-paint-bucket')">
                            <i class="fas fa-copy"></i> ti-paint-bucket</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-na"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-na')">
                            <i class="fas fa-copy"></i> ti-na</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-medall"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-medall')">
                            <i class="fas fa-copy"></i> ti-medall</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-medall-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-medall-alt')">
                            <i class="fas fa-copy"></i> ti-medall-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-marker"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-marker')">
                            <i class="fas fa-copy"></i> ti-marker</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-marker-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-marker-alt')">
                            <i class="fas fa-copy"></i> ti-marker-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-lock"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-lock')">
                            <i class="fas fa-copy"></i> ti-lock</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-unlock"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-unlock')">
                            <i class="fas fa-copy"></i> ti-unlock</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-location-arrow"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-location-arrow')">
                            <i class="fas fa-copy"></i> ti-location-arrow</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout')">
                            <i class="fas fa-copy"></i> ti-layout</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layers"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layers')">
                            <i class="fas fa-copy"></i> ti-layers</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layers-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layers-alt')">
                            <i class="fas fa-copy"></i> ti-layers-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-key"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-key')">
                            <i class="fas fa-copy"></i> ti-key</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-image"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-image')">
                            <i class="fas fa-copy"></i> ti-image</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-heart"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-heart')">
                            <i class="fas fa-copy"></i> ti-heart</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-heart-broken"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-heart-broken')">
                            <i class="fas fa-copy"></i> ti-heart-broken</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hand-stop"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hand-stop')">
                            <i class="fas fa-copy"></i> ti-hand-stop</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hand-open"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hand-open')">
                            <i class="fas fa-copy"></i> ti-hand-open</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hand-drag"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hand-drag')">
                            <i class="fas fa-copy"></i> ti-hand-drag</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-flag"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-flag')">
                            <i class="fas fa-copy"></i> ti-flag</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-flag-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-flag-alt')">
                            <i class="fas fa-copy"></i> ti-flag-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-flag-alt-2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-flag-alt-2')">
                            <i class="fas fa-copy"></i> ti-flag-alt-2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-eye"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-eye')">
                            <i class="fas fa-copy"></i> ti-eye</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-import"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-import')">
                            <i class="fas fa-copy"></i> ti-import</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-export"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-export')">
                            <i class="fas fa-copy"></i> ti-export</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-cup"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-cup')">
                            <i class="fas fa-copy"></i> ti-cup</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-crown"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-crown')">
                            <i class="fas fa-copy"></i> ti-crown</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-comments"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-comments')">
                            <i class="fas fa-copy"></i> ti-comments</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-comment"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-comment')">
                            <i class="fas fa-copy"></i> ti-comment</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-comment-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-comment-alt')">
                            <i class="fas fa-copy"></i> ti-comment-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-thought"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-thought')">
                            <i class="fas fa-copy"></i> ti-thought</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-clip"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-clip')">
                            <i class="fas fa-copy"></i> ti-clip</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-check"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-check')">
                            <i class="fas fa-copy"></i> ti-check</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-check-box"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-check-box')">
                            <i class="fas fa-copy"></i> ti-check-box</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-camera"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-camera')">
                            <i class="fas fa-copy"></i> ti-camera</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-announcement"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-announcement')">
                            <i class="fas fa-copy"></i> ti-announcement</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-brush"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-brush')">
                            <i class="fas fa-copy"></i> ti-brush</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-brush-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-brush-alt')">
                            <i class="fas fa-copy"></i> ti-brush-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-palette"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-palette')">
                            <i class="fas fa-copy"></i> ti-palette</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-briefcase"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-briefcase')">
                            <i class="fas fa-copy"></i> ti-briefcase</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bolt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bolt')">
                            <i class="fas fa-copy"></i> ti-bolt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bolt-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bolt-alt')">
                            <i class="fas fa-copy"></i> ti-bolt-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-blackboard"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-blackboard')">
                            <i class="fas fa-copy"></i> ti-blackboard</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bag"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bag')">
                            <i class="fas fa-copy"></i> ti-bag</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-world"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-world')">
                            <i class="fas fa-copy"></i> ti-world</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-wheelchair"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-wheelchair')">
                            <i class="fas fa-copy"></i> ti-wheelchair</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-car"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-car')">
                            <i class="fas fa-copy"></i> ti-car</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-truck"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-truck')">
                            <i class="fas fa-copy"></i> ti-truck</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-timer"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-timer')">
                            <i class="fas fa-copy"></i> ti-timer</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-ticket"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-ticket')">
                            <i class="fas fa-copy"></i> ti-ticket</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-thumb-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-thumb-up')">
                            <i class="fas fa-copy"></i> ti-thumb-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-thumb-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-thumb-down')">
                            <i class="fas fa-copy"></i> ti-thumb-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-stats-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-stats-up')">
                            <i class="fas fa-copy"></i> ti-stats-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-stats-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-stats-down')">
                            <i class="fas fa-copy"></i> ti-stats-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shine"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shine')">
                            <i class="fas fa-copy"></i> ti-shine</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shift-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shift-right')">
                            <i class="fas fa-copy"></i> ti-shift-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shift-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shift-left')">
                            <i class="fas fa-copy"></i> ti-shift-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shift-right-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shift-right-alt')">
                            <i class="fas fa-copy"></i> ti-shift-right-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shift-left-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shift-left-alt')">
                            <i class="fas fa-copy"></i> ti-shift-left-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shield"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shield')">
                            <i class="fas fa-copy"></i> ti-shield</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-notepad"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-notepad')">
                            <i class="fas fa-copy"></i> ti-notepad</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-server"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-server')">
                            <i class="fas fa-copy"></i> ti-server</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pulse"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pulse')">
                            <i class="fas fa-copy"></i> ti-pulse</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-printer"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-printer')">
                            <i class="fas fa-copy"></i> ti-printer</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-power-off"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-power-off')">
                            <i class="fas fa-copy"></i> ti-power-off</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-plug"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-plug')">
                            <i class="fas fa-copy"></i> ti-plug</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pie-chart"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pie-chart')">
                            <i class="fas fa-copy"></i> ti-pie-chart</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-panel"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-panel')">
                            <i class="fas fa-copy"></i> ti-panel</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-package"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-package')">
                            <i class="fas fa-copy"></i> ti-package</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-music"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-music')">
                            <i class="fas fa-copy"></i> ti-music</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-music-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-music-alt')">
                            <i class="fas fa-copy"></i> ti-music-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-mouse"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-mouse')">
                            <i class="fas fa-copy"></i> ti-mouse</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-mouse-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-mouse-alt')">
                            <i class="fas fa-copy"></i> ti-mouse-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-money"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-money')">
                            <i class="fas fa-copy"></i> ti-money</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-microphone"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-microphone')">
                            <i class="fas fa-copy"></i> ti-microphone</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-menu"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-menu')">
                            <i class="fas fa-copy"></i> ti-menu</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-menu-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-menu-alt')">
                            <i class="fas fa-copy"></i> ti-menu-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-map"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-map')">
                            <i class="fas fa-copy"></i> ti-map</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-map-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-map-alt')">
                            <i class="fas fa-copy"></i> ti-map-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-location-pin"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-location-pin')">
                            <i class="fas fa-copy"></i> ti-location-pin</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-light-bulb"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-light-bulb')">
                            <i class="fas fa-copy"></i> ti-light-bulb</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-info"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-info')">
                            <i class="fas fa-copy"></i> ti-info</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-infinite"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-infinite')">
                            <i class="fas fa-copy"></i> ti-infinite</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-id-badge"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-id-badge')">
                            <i class="fas fa-copy"></i> ti-id-badge</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-hummer"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-hummer')">
                            <i class="fas fa-copy"></i> ti-hummer</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-home"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-home')">
                            <i class="fas fa-copy"></i> ti-home</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-help"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-help')">
                            <i class="fas fa-copy"></i> ti-help</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-headphone"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-headphone')">
                            <i class="fas fa-copy"></i> ti-headphone</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-harddrives"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-harddrives')">
                            <i class="fas fa-copy"></i> ti-harddrives</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-harddrive"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-harddrive')">
                            <i class="fas fa-copy"></i> ti-harddrive</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-gift"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-gift')">
                            <i class="fas fa-copy"></i> ti-gift</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-game"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-game')">
                            <i class="fas fa-copy"></i> ti-game</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-filter"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-filter')">
                            <i class="fas fa-copy"></i> ti-filter</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-files"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-files')">
                            <i class="fas fa-copy"></i> ti-files</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-file"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-file')">
                            <i class="fas fa-copy"></i> ti-file</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-zip"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-zip')">
                            <i class="fas fa-copy"></i> ti-zip</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-folder"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-folder')">
                            <i class="fas fa-copy"></i> ti-folder</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-envelope"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-envelope')">
                            <i class="fas fa-copy"></i> ti-envelope</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-dashboard"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-dashboard')">
                            <i class="fas fa-copy"></i> ti-dashboard</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-cloud"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-cloud')">
                            <i class="fas fa-copy"></i> ti-cloud</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-cloud-up"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-cloud-up')">
                            <i class="fas fa-copy"></i> ti-cloud-up</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-cloud-down"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-cloud-down')">
                            <i class="fas fa-copy"></i> ti-cloud-down</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-clipboard"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-clipboard')">
                            <i class="fas fa-copy"></i> ti-clipboard</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-calendar"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-calendar')">
                            <i class="fas fa-copy"></i> ti-calendar</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-book"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-book')">
                            <i class="fas fa-copy"></i> ti-book</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bell"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bell')">
                            <i class="fas fa-copy"></i> ti-bell</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-basketball"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-basketball')">
                            <i class="fas fa-copy"></i> ti-basketball</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bar-chart"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bar-chart')">
                            <i class="fas fa-copy"></i> ti-bar-chart</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-bar-chart-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-bar-chart-alt')">
                            <i class="fas fa-copy"></i> ti-bar-chart-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-archive"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-archive')">
                            <i class="fas fa-copy"></i> ti-archive</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-anchor"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-anchor')">
                            <i class="fas fa-copy"></i> ti-anchor</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-alert"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-alert')">
                            <i class="fas fa-copy"></i> ti-alert</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-alarm-clock"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-alarm-clock')">
                            <i class="fas fa-copy"></i> ti-alarm-clock</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-agenda"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-agenda')">
                            <i class="fas fa-copy"></i> ti-agenda</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-write"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-write')">
                            <i class="fas fa-copy"></i> ti-write</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-wallet"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-wallet')">
                            <i class="fas fa-copy"></i> ti-wallet</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-video-clapper"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-video-clapper')">
                            <i class="fas fa-copy"></i> ti-video-clapper</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-video-camera"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-video-camera')">
                            <i class="fas fa-copy"></i> ti-video-camera</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-vector"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-vector')">
                            <i class="fas fa-copy"></i> ti-vector</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-support"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-support')">
                            <i class="fas fa-copy"></i> ti-support</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-stamp"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-stamp')">
                            <i class="fas fa-copy"></i> ti-stamp</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-slice"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-slice')">
                            <i class="fas fa-copy"></i> ti-slice</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-shortcode"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-shortcode')">
                            <i class="fas fa-copy"></i> ti-shortcode</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-receipt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-receipt')">
                            <i class="fas fa-copy"></i> ti-receipt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pin2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pin2')">
                            <i class="fas fa-copy"></i> ti-pin2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pin-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pin-alt')">
                            <i class="fas fa-copy"></i> ti-pin-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pencil-alt2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pencil-alt2')">
                            <i class="fas fa-copy"></i> ti-pencil-alt2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-eraser"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-eraser')">
                            <i class="fas fa-copy"></i> ti-eraser</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-more"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-more')">
                            <i class="fas fa-copy"></i> ti-more</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-more-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-more-alt')">
                            <i class="fas fa-copy"></i> ti-more-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-microphone-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-microphone-alt')">
                            <i class="fas fa-copy"></i> ti-microphone-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-magnet"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-magnet')">
                            <i class="fas fa-copy"></i> ti-magnet</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-line-double"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-line-double')">
                            <i class="fas fa-copy"></i> ti-line-double</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-line-dotted"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-line-dotted')">
                            <i class="fas fa-copy"></i> ti-line-dotted</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-line-dashed"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-line-dashed')">
                            <i class="fas fa-copy"></i> ti-line-dashed</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-ink-pen"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-ink-pen')">
                            <i class="fas fa-copy"></i> ti-ink-pen</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-info-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-info-alt')">
                            <i class="fas fa-copy"></i> ti-info-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-help-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-help-alt')">
                            <i class="fas fa-copy"></i> ti-help-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-headphone-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-headphone-alt')">
                            <i class="fas fa-copy"></i> ti-headphone-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-gallery"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-gallery')">
                            <i class="fas fa-copy"></i> ti-gallery</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-face-smile"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-face-smile')">
                            <i class="fas fa-copy"></i> ti-face-smile</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-face-sad"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-face-sad')">
                            <i class="fas fa-copy"></i> ti-face-sad</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-credit-card"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-credit-card')">
                            <i class="fas fa-copy"></i> ti-credit-card</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-comments-smiley"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-comments-smiley')">
                            <i class="fas fa-copy"></i> ti-comments-smiley</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-time"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-time')">
                            <i class="fas fa-copy"></i> ti-time</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-share"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-share')">
                            <i class="fas fa-copy"></i> ti-share</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-share-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-share-alt')">
                            <i class="fas fa-copy"></i> ti-share-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-rocket"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-rocket')">
                            <i class="fas fa-copy"></i> ti-rocket</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-new-window"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-new-window')">
                            <i class="fas fa-copy"></i> ti-new-window</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-rss"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-rss')">
                            <i class="fas fa-copy"></i> ti-rss</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-rss-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-rss-alt')">
                            <i class="fas fa-copy"></i> ti-rss-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Web App Icons -->

        <!-- Control Icons -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Control Icons</h3>
            </div>
            <div class="panel-body panel-icons-ref themify">

                <div class="row">

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-stop"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-stop')">
                            <i class="fas fa-copy"></i> ti-control-stop</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-shuffle"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-shuffle')">
                            <i class="fas fa-copy"></i> ti-control-shuffle</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-play"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-play')">
                            <i class="fas fa-copy"></i> ti-control-play</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-pause"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-pause')">
                            <i class="fas fa-copy"></i> ti-control-pause</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-forward"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-forward')">
                            <i class="fas fa-copy"></i> ti-control-forward</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-backward"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-backward')">
                            <i class="fas fa-copy"></i> ti-control-backward</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-volume"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-volume')">
                            <i class="fas fa-copy"></i> ti-volume</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-skip-forward"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-skip-forward')">
                            <i class="fas fa-copy"></i> ti-control-skip-forward</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-skip-backward"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-skip-backward')">
                            <i class="fas fa-copy"></i> ti-control-skip-backward</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-record"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-record')">
                            <i class="fas fa-copy"></i> ti-control-record</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-control-eject"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-control-eject')">
                            <i class="fas fa-copy"></i> ti-control-eject</button>

                    </div><!-- / .col-md-2.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Control Icons -->

        <!-- Text Editor -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Text Editor</h3>
            </div>
            <div class="panel-body panel-icons-ref themify">

                <div class="row">

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-paragraph"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-paragraph')">
                            <i class="fas fa-copy"></i> ti-paragraph</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-uppercase"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-uppercase')">
                            <i class="fas fa-copy"></i> ti-uppercase</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-underline"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-underline')">
                            <i class="fas fa-copy"></i> ti-underline</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-text"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-text')">
                            <i class="fas fa-copy"></i> ti-text</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-Italic"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-Italic')">
                            <i class="fas fa-copy"></i> ti-Italic</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-smallcap"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-smallcap')">
                            <i class="fas fa-copy"></i> ti-smallcap</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-list"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-list')">
                            <i class="fas fa-copy"></i> ti-list</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-list-ol"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-list-ol')">
                            <i class="fas fa-copy"></i> ti-list-ol</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-align-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-align-right')">
                            <i class="fas fa-copy"></i> ti-align-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-align-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-align-left')">
                            <i class="fas fa-copy"></i> ti-align-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-align-justify"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-align-justify')">
                            <i class="fas fa-copy"></i> ti-align-justify</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-align-center"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-align-center')">
                            <i class="fas fa-copy"></i> ti-align-center</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-quote-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-quote-right')">
                            <i class="fas fa-copy"></i> ti-quote-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-quote-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-quote-left')">
                            <i class="fas fa-copy"></i> ti-quote-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Text Editor -->

        <!-- Layout Icons -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Layout Icons</h3>
            </div>
            <div class="panel-body panel-icons-ref themify">

                <div class="row">

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-width-full"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-width-full')">
                            <i class="fas fa-copy"></i> ti-layout-width-full</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-width-default"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-width-default')">
                            <i class="fas fa-copy"></i> ti-layout-width-default</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-width-default-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-width-default-alt')">
                            <i class="fas fa-copy"></i> ti-layout-width-default-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-tab"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-tab')">
                            <i class="fas fa-copy"></i> ti-layout-tab</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-tab-window"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-tab-window')">
                            <i class="fas fa-copy"></i> ti-layout-tab-window</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-tab-v"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-tab-v')">
                            <i class="fas fa-copy"></i> ti-layout-tab-v</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-tab-min"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-tab-min')">
                            <i class="fas fa-copy"></i> ti-layout-tab-min</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-slider"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-slider')">
                            <i class="fas fa-copy"></i> ti-layout-slider</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-slider-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-slider-alt')">
                            <i class="fas fa-copy"></i> ti-layout-slider-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-sidebar-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-sidebar-right')">
                            <i class="fas fa-copy"></i> ti-layout-sidebar-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-sidebar-none"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-sidebar-none')">
                            <i class="fas fa-copy"></i> ti-layout-sidebar-none</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-sidebar-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-sidebar-left')">
                            <i class="fas fa-copy"></i> ti-layout-sidebar-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-placeholder"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-placeholder')">
                            <i class="fas fa-copy"></i> ti-layout-placeholder</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-menu"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-menu')">
                            <i class="fas fa-copy"></i> ti-layout-menu</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-menu-v"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-menu-v')">
                            <i class="fas fa-copy"></i> ti-layout-menu-v</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-menu-separated"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-menu-separated')">
                            <i class="fas fa-copy"></i> ti-layout-menu-separated</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-menu-full"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-menu-full')">
                            <i class="fas fa-copy"></i> ti-layout-menu-full</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-right')">
                            <i class="fas fa-copy"></i> ti-layout-media-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-right-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-right-alt')">
                            <i class="fas fa-copy"></i> ti-layout-media-right-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-overlay"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-overlay')">
                            <i class="fas fa-copy"></i> ti-layout-media-overlay</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-overlay-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-overlay-alt')">
                            <i class="fas fa-copy"></i> ti-layout-media-overlay-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-overlay-alt-2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-overlay-alt-2')">
                            <i class="fas fa-copy"></i> ti-layout-media-overlay-alt-2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-left')">
                            <i class="fas fa-copy"></i> ti-layout-media-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-left-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-left-alt')">
                            <i class="fas fa-copy"></i> ti-layout-media-left-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-center"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-center')">
                            <i class="fas fa-copy"></i> ti-layout-media-center</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-media-center-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-media-center-alt')">
                            <i class="fas fa-copy"></i> ti-layout-media-center-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-list-thumb"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-list-thumb')">
                            <i class="fas fa-copy"></i> ti-layout-list-thumb</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-list-thumb-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-list-thumb-alt')">
                            <i class="fas fa-copy"></i> ti-layout-list-thumb-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-list-post"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-list-post')">
                            <i class="fas fa-copy"></i> ti-layout-list-post</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-list-large-image"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-list-large-image')">
                            <i class="fas fa-copy"></i> ti-layout-list-large-image</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-line-solid"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-line-solid')">
                            <i class="fas fa-copy"></i> ti-layout-line-solid</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-grid4"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-grid4')">
                            <i class="fas fa-copy"></i> ti-layout-grid4</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-grid3"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-grid3')">
                            <i class="fas fa-copy"></i> ti-layout-grid3</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-grid2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-grid2')">
                            <i class="fas fa-copy"></i> ti-layout-grid2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-grid2-thumb"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-grid2-thumb')">
                            <i class="fas fa-copy"></i> ti-layout-grid2-thumb</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-cta-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-cta-right')">
                            <i class="fas fa-copy"></i> ti-layout-cta-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-cta-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-cta-left')">
                            <i class="fas fa-copy"></i> ti-layout-cta-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-cta-center"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-cta-center')">
                            <i class="fas fa-copy"></i> ti-layout-cta-center</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-cta-btn-right"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-cta-btn-right')">
                            <i class="fas fa-copy"></i> ti-layout-cta-btn-right</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-cta-btn-left"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-cta-btn-left')">
                            <i class="fas fa-copy"></i> ti-layout-cta-btn-left</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-column4"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-column4')">
                            <i class="fas fa-copy"></i> ti-layout-column4</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-column3"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-column3')">
                            <i class="fas fa-copy"></i> ti-layout-column3</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-column2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-column2')">
                            <i class="fas fa-copy"></i> ti-layout-column2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-accordion-separated"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-accordion-separated')">
                            <i class="fas fa-copy"></i> ti-layout-accordion-separated</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-accordion-merged"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-accordion-merged')">
                            <i class="fas fa-copy"></i> ti-layout-accordion-merged</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-accordion-list"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-accordion-list')">
                            <i class="fas fa-copy"></i> ti-layout-accordion-list</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-widgetized"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-widgetized')">
                            <i class="fas fa-copy"></i> ti-widgetized</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-widget"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-widget')">
                            <i class="fas fa-copy"></i> ti-widget</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-widget-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-widget-alt')">
                            <i class="fas fa-copy"></i> ti-widget-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-view-list"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-view-list')">
                            <i class="fas fa-copy"></i> ti-view-list</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-view-list-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-view-list-alt')">
                            <i class="fas fa-copy"></i> ti-view-list-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-view-grid"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-view-grid')">
                            <i class="fas fa-copy"></i> ti-view-grid</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-upload"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-upload')">
                            <i class="fas fa-copy"></i> ti-upload</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-download"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-download')">
                            <i class="fas fa-copy"></i> ti-download</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-loop"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-loop')">
                            <i class="fas fa-copy"></i> ti-loop</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-sidebar-2"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-sidebar-2')">
                            <i class="fas fa-copy"></i> ti-layout-sidebar-2</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-grid4-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-grid4-alt')">
                            <i class="fas fa-copy"></i> ti-layout-grid4-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-grid3-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-grid3-alt')">
                            <i class="fas fa-copy"></i> ti-layout-grid3-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-grid2-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-grid2-alt')">
                            <i class="fas fa-copy"></i> ti-layout-grid2-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-column4-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-column4-alt')">
                            <i class="fas fa-copy"></i> ti-layout-column4-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-column3-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-column3-alt')">
                            <i class="fas fa-copy"></i> ti-layout-column3-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-layout-column2-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-layout-column2-alt')">
                            <i class="fas fa-copy"></i> ti-layout-column2-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Layout Icons -->

        <!-- Brand Icons -->
        <div class="panel panel-light">
            <div class="panel-header">
                <h3 class="panel-title">Brand Icons</h3>
            </div>
            <div class="panel-body panel-icons-ref themify">

                <div class="row">

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-flickr"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-flickr')">
                            <i class="fas fa-copy"></i> ti-flickr</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-flickr-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-flickr-alt')">
                            <i class="fas fa-copy"></i> ti-flickr-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-instagram"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-instagram')">
                            <i class="fas fa-copy"></i> ti-instagram</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-google"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-google')">
                            <i class="fas fa-copy"></i> ti-google</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-github"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-github')">
                            <i class="fas fa-copy"></i> ti-github</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-facebook"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-facebook')">
                            <i class="fas fa-copy"></i> ti-facebook</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-dropbox"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-dropbox')">
                            <i class="fas fa-copy"></i> ti-dropbox</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-dropbox-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-dropbox-alt')">
                            <i class="fas fa-copy"></i> ti-dropbox-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-dribbble"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-dribbble')">
                            <i class="fas fa-copy"></i> ti-dribbble</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-apple"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-apple')">
                            <i class="fas fa-copy"></i> ti-apple</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-android"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-android')">
                            <i class="fas fa-copy"></i> ti-android</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-yahoo"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-yahoo')">
                            <i class="fas fa-copy"></i> ti-yahoo</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-trello"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-trello')">
                            <i class="fas fa-copy"></i> ti-trello</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-stack-overflow"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-stack-overflow')">
                            <i class="fas fa-copy"></i> ti-stack-overflow</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-soundcloud"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-soundcloud')">
                            <i class="fas fa-copy"></i> ti-soundcloud</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-sharethis"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-sharethis')">
                            <i class="fas fa-copy"></i> ti-sharethis</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-sharethis-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-sharethis-alt')">
                            <i class="fas fa-copy"></i> ti-sharethis-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-reddit"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-reddit')">
                            <i class="fas fa-copy"></i> ti-reddit</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-microsoft"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-microsoft')">
                            <i class="fas fa-copy"></i> ti-microsoft</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-microsoft-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-microsoft-alt')">
                            <i class="fas fa-copy"></i> ti-microsoft-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-linux"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-linux')">
                            <i class="fas fa-copy"></i> ti-linux</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-jsfiddle"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-jsfiddle')">
                            <i class="fas fa-copy"></i> ti-jsfiddle</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-joomla"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-joomla')">
                            <i class="fas fa-copy"></i> ti-joomla</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-html5"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-html5')">
                            <i class="fas fa-copy"></i> ti-html5</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-css3"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-css3')">
                            <i class="fas fa-copy"></i> ti-css3</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-drupal"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-drupal')">
                            <i class="fas fa-copy"></i> ti-drupal</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-wordpress"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-wordpress')">
                            <i class="fas fa-copy"></i> ti-wordpress</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-tumblr"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-tumblr')">
                            <i class="fas fa-copy"></i> ti-tumblr</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-tumblr-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-tumblr-alt')">
                            <i class="fas fa-copy"></i> ti-tumblr-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-skype"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-skype')">
                            <i class="fas fa-copy"></i> ti-skype</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-youtube"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-youtube')">
                            <i class="fas fa-copy"></i> ti-youtube</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-vimeo"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-vimeo')">
                            <i class="fas fa-copy"></i> ti-vimeo</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-vimeo-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-vimeo-alt')">
                            <i class="fas fa-copy"></i> ti-vimeo-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-twitter"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-twitter')">
                            <i class="fas fa-copy"></i> ti-twitter</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-twitter-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-twitter-alt')">
                            <i class="fas fa-copy"></i> ti-twitter-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-linkedin"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-linkedin')">
                            <i class="fas fa-copy"></i> ti-linkedin</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pinterest"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pinterest')">
                            <i class="fas fa-copy"></i> ti-pinterest</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-pinterest-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-pinterest-alt')">
                            <i class="fas fa-copy"></i> ti-pinterest-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-themify-logo"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-themify-logo')">
                            <i class="fas fa-copy"></i> ti-themify-logo</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-themify-favicon"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-themify-favicon')">
                            <i class="fas fa-copy"></i> ti-themify-favicon</button>

                    </div><!-- / .col-md-2.icon-col -->

                    <div class="col-md-2 icon-col">

                        <span class="ti ti-themify-favicon-alt"></span>
                        <button type="button" class="btn btn-has-icon btn-dark-light" onclick="copyAndNotify('ti-themify-favicon-alt')">
                            <i class="fas fa-copy"></i> ti-themify-favicon-alt</button>

                    </div><!-- / .col-md-2.icon-col -->

                </div><!-- / .row -->

            </div>
        </div><!-- / Brand Icons -->

    </div>
@stop
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
@stop

@section('script')
    <script src="{{ asset('assets/js/manager/js-list-manager.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.min.js') }}"></script>
@stop
