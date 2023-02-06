@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <header>
            <div class="row">
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Product</a></li>
                            <li class="breadcrumb-item"><a href="#">Create</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>

        <div class="row mt-3">

            <div class="col-md-12">

                <form action="{{route('admin.product.store')}}" method="post" class="h-100"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="panel panel-light">
                        <div class="panel-header">
                            <h1 class="panel-title">Create new product</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Name *</label>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Enter name here..." value="{{old('name')}}" required>
                                        @error('name')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Address *</label>
                                        <input type="text" name="address" class="form-control"
                                               placeholder="Birguluk, Ogem 3" value="{{old('address')}}" required>
                                        @error('address')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Price per night *</label>
                                        <input type="text" name="price_per_night" class="form-control"
                                               placeholder="15000" value="{{old('price_per_night')}}" required>
                                        @error('price_per_night')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Price per week</label>
                                        <input type="text" name="price_per_week" class="form-control"
                                               value="{{old('price_per_week')}}" placeholder="15000">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Price per month</label>
                                        <input type="text" name="price_per_month" class="form-control"
                                               value="{{old('price_per_month')}}" placeholder="15000">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Number of rooms *</label>
                                        <input type="text" name="rooms_qty" class="form-control" placeholder="8"
                                               value="{{old('rooms_qty')}}" required>
                                        @error('rooms_qty')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Swimming pool</label>
                                        <div>
                                            <div
                                                class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="swimming_pool" class="custom-control-input"
                                                       id="{{'custom-checkbox-inverse-2-' . 'swimming_pool' }}">
                                                <label class="custom-control-label"
                                                       for="{{'custom-checkbox-inverse-2-' . 'swimming_pool' }}">Check
                                                    the box if there is a Swimming pool</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Trestle bed</label>
                                        <div>
                                            <div
                                                class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="trestle_bed" class="custom-control-input"
                                                       id="{{'custom-checkbox-inverse-2-' . 'trestle_bed' }}">
                                                <label class="custom-control-label"
                                                       for="{{'custom-checkbox-inverse-2-' . 'trestle_bed' }}">Check the
                                                    box if there is a Trestle bed</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Is active</label>
                                        <div>
                                            <div
                                                class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="status" class="custom-control-input"
                                                       id="{{'custom-checkbox-inverse-2-' . 'status' }}">
                                                <label class="custom-control-label"
                                                       for="{{'custom-checkbox-inverse-2-' . 'status' }}">Check the box
                                                    if you want Publish</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Sauna</label>
                                        <div>
                                            <div
                                                class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="sauna" class="custom-control-input"
                                                       id="{{'custom-checkbox-inverse-2-' . 'sauna' }}">
                                                <label class="custom-control-label"
                                                       for="{{'custom-checkbox-inverse-2-' . 'sauna' }}">Check the box
                                                    if there is a Sauna</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="exampleFormControlSelect2">Categories</label>
                                        <select multiple="" name="categories[]" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('categories')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="formFileMultiple" class="form-label">Multiple files input
                                            example</label>
                                        <input class="form-control" name="images[]" type="file" id="formFileMultiple"
                                               multiple required/>
                                    </div>
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            @if(str_contains($error, 'images'))
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    {{$error}}
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-success px-5">Save</button>
                            <a href="{{route('admin.product.index')}}" class="btn btn-secondary ml-2">Back</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

{{--    <div class="page-content">--}}
{{--        <header>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <nav aria-label="breadcrumb">--}}
{{--                        <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">--}}
{{--                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>--}}
{{--                            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Product</a></li>--}}
{{--                            <li class="breadcrumb-item"><a href="#">Create</a></li>--}}
{{--                        </ol>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </header>--}}

{{--            <div class="tabs-slider mt-24">--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <h4 class="mt-3 step-title">Create new product</h4>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="steps steps-1">--}}
{{--                            <ul class="nav nav-tabs nav-fill nav-tabs-slider nav-number-left" id="nav-tabs-slider" role="tablist">--}}
{{--                                <li class="nav-item nav-item-active">--}}
{{--                                    <a class="nav-link text-uppercase active" data-heading="Drizzle" id="custom-animation-2-tab-1" href="#tabs-slider-content" data-slide="0">--}}
{{--                                        1. Category--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link text-uppercase" data-heading="Lightning" id="custom-animation-2-tab-2" href="#tabs-slider-content" data-slide="1">--}}
{{--                                        2. Tag--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link text-uppercase" data-heading="Rain" id="custom-animation-2-tab-3" href="#tabs-slider-content" data-slide="2">--}}
{{--                                        3. House info--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link text-uppercase" data-heading="Snow" id="custom-animation-2-tab-4" href="#tabs-slider-content" data-slide="3">--}}
{{--                                        4. Additional info--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link text-uppercase" data-heading="Snow" id="custom-animation-2-tab-5" href="#tabs-slider-content" data-slide="4">--}}
{{--                                        5. Amenity--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link text-uppercase" data-heading="Snow" id="custom-animation-2-tab-6" href="#tabs-slider-content" data-slide="5">--}}
{{--                                        6. Images--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-floor bg-primary" data-full-height="true" data-position="top" style="left: 0px; width: calc(100% - 0px); height: 49px; top: 0px;"></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Slider Animation -->--}}
{{--                <div class="panel">--}}
{{--                    <div class="panel-body">--}}
{{--                        <div class="row">--}}

{{--                            <form action="{{route('admin.product.store')}}" enctype="multipart/form-data" class="col-md-12 my-2" method="POST">--}}

{{--                                <div id="tabs-slider-content" class="carousel slide">--}}
{{--                                    <div class="carousel-inner">--}}
{{--                                        <div class="carousel-item active">--}}
{{--                                            <div class="panel panel-light" id="selectables-custom-icon">--}}
{{--                                                <div class="field-row">--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        @foreach($categories as $category)--}}
{{--                                                            <div class="col-md-6">--}}

{{--                                                                <div class="card card-selectable-3 mb-4">--}}
{{--                                                                    <input type="checkbox" name="categories[]" name="selectable-card-3" id="card-selectable-{{$category->id}}">--}}
{{--                                                                    <label for="card-selectable-{{$category->id}}" class="card-body">--}}
{{--                                                                        <div class="col col-input">--}}
{{--                                                                            <i class="fas fa-check-circle"></i>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col col-title">--}}
{{--                                                                            <h5>{{ $category->name }}</h5>--}}
{{--                                                                            <p class="card-text">Select just fit no more than 4</p>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="col col-info">--}}
{{--                                                                            <a href="#"><i class="fas fa-ellipsis-h"></i></a>--}}
{{--                                                                        </div>--}}
{{--                                                                    </label>--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}
{{--                                                        @endforeach--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col-md-8 offset-md-3 text-right">--}}
{{--                                                        <button type="button" class="btn btn-primary px-5" data-slide="1">Next</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="carousel-item">--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Text</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="text" class="form-control" placeholder="Name">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Email</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="email" class="form-control" placeholder="Email">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Password</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="password" class="form-control" placeholder="Password" value="1234567">--}}
{{--                                                        <small class="form-text text-muted">--}}
{{--                                                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.--}}
{{--                                                        </small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Date</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="date" class="form-control input-datepicker" value="2019-12-09">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col-md-6 offset-md-3 text-right">--}}
{{--                                                        <button type="button" class="btn btn-secondary ml-2" data-slide="0">Back</button>--}}
{{--                                                        <button type="button" class="btn btn-primary px-5" data-slide="2">Next</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="carousel-item">--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Text</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="text" class="form-control" placeholder="Name">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Email</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="email" class="form-control" placeholder="Email">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Password</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="password" class="form-control" placeholder="Password" value="1234567">--}}
{{--                                                        <small class="form-text text-muted">--}}
{{--                                                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.--}}
{{--                                                        </small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Date</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="date" class="form-control input-datepicker" value="2019-12-09">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col-md-6 offset-md-3 text-right">--}}
{{--                                                        <button type="button" class="btn btn-secondary ml-2" data-slide="0">Back</button>--}}
{{--                                                        <button type="button" class="btn btn-primary px-5" data-slide="2">Next</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="carousel-item">--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Text</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="text" class="form-control" placeholder="Name">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Email</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="email" class="form-control" placeholder="Email">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Password</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="password" class="form-control" placeholder="Password" value="1234567">--}}
{{--                                                        <small class="form-text text-muted">--}}
{{--                                                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.--}}
{{--                                                        </small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Date</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="date" class="form-control input-datepicker" value="2019-12-09">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col-md-6 offset-md-3 text-right">--}}
{{--                                                        <button type="button" class="btn btn-secondary ml-2" data-slide="0">Back</button>--}}
{{--                                                        <button type="button" class="btn btn-primary px-5" data-slide="2">Next</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="carousel-item">--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Text</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="text" class="form-control" placeholder="Name">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Email</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="email" class="form-control" placeholder="Email">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Password</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="password" class="form-control" placeholder="Password" value="1234567">--}}
{{--                                                        <small class="form-text text-muted">--}}
{{--                                                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.--}}
{{--                                                        </small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Date</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="date" class="form-control input-datepicker" value="2019-12-09">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col-md-6 offset-md-3 text-right">--}}
{{--                                                        <button type="button" class="btn btn-secondary ml-2" data-slide="1">Back</button>--}}
{{--                                                        <button type="button" class="btn btn-primary px-5" data-slide="3">Next</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <div class="carousel-item">--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Text</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="text" class="form-control" placeholder="Name">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Email</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="email" class="form-control" placeholder="Email">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Password</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="password" class="form-control" placeholder="Password" value="1234567">--}}
{{--                                                        <small class="form-text text-muted">--}}
{{--                                                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.--}}
{{--                                                        </small>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <label class="col-md-3 pt-2">Date</label>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <input type="date" class="form-control input-datepicker" value="2019-12-09">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="field-row">--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col-md-6 offset-md-3 text-right">--}}
{{--                                                        <button type="button" class="btn btn-secondary ml-2" data-slide="2">Back</button>--}}
{{--                                                        <button type="button" class="btn btn-primary px-5">Save</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </form>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

@stop

@section('script')
    <script src="{{ asset('assets/js/wizards/wizard-5.js') }}"></script>
@stop
