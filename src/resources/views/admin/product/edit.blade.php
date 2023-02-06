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
                            <li class="breadcrumb-item"><a href="#">Update</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>

        <div class="row mt-3">

            <div class="col-md-12">

                <form action="{{route('admin.product.update', $product->id)}}" method="post" class="h-100" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="panel panel-light">
                        <div class="panel-header">
                            <h1 class="panel-title">Edit product - {{$product->name}}</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Name *</label>
                                        <input type="text" name="name" class="form-control" value="{{$product->name}}" required value="{{old('name')}}">
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
                                        <input type="text" name="address" class="form-control" value="{{$product->address}}" required value="{{old('address')}}">
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
                                        <input type="text" name="price_per_night" class="form-control" value="{{$product->price_per_night}}" required value="{{old('price_per_night')}}">
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
                                        <input type="text" name="price_per_week" class="form-control" value="{{$product->price_per_week}}" value="{{old('price_per_week')}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Price per month</label>
                                        <input type="text" name="price_per_month" class="form-control" value="{{$product->price_per_month}}" value="{{old('price_per_month')}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Number of rooms *</label>
                                        <input type="text" name="rooms_qty" class="form-control" value="{{$product->rooms_qty}}" value="{{old('rooms_qty')}}" required>
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
                                            <div class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="swimming_pool" class="custom-control-input" id="{{'custom-checkbox-inverse-2-' . 'swimming_pool' }}" @checked($product->swimming_pool === 1)>
                                                <label class="custom-control-label" for="{{'custom-checkbox-inverse-2-' . 'swimming_pool' }}">Check the box if there is a Swimming pool</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Trestle bed</label>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="trestle_bed" class="custom-control-input" id="{{'custom-checkbox-inverse-2-' . 'trestle_bed' }}" @checked($product->trestle_bed === 1)>
                                                <label class="custom-control-label" for="{{'custom-checkbox-inverse-2-' . 'trestle_bed' }}">Check the box if there is a Trestle bed</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Is active</label>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="status" class="custom-control-input" id="{{'custom-checkbox-inverse-2-' . 'status' }}" @checked($product->status === 1)>
                                                <label class="custom-control-label" for="{{'custom-checkbox-inverse-2-' . 'status' }}">Check the box if you want Publish</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Sauna</label>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="sauna" class="custom-control-input" id="{{'custom-checkbox-inverse-2-' . 'sauna' }}" @checked($product->swimming_pool === 1)>
                                                <label class="custom-control-label" for="{{'custom-checkbox-inverse-2-' . 'sauna' }}">Check the box if there is a Sauna</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="exampleFormControlSelect2">Categories</label>
                                        <select multiple="" name="categories[]" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @selected(in_array($category->id, $product->categories->pluck('id')->toArray(), true))>{{ $category->name }}</option>
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
                                        <label for="formFileMultiple"class="form-label">Multiple files input example</label>
                                        <input class="form-control" name="images[]"  type="file" id="formFileMultiple" multiple/>
                                    </div>
                                </div>

                                @can('activate-product')
                                <div class="col-md-6">
                                    <label for="">Activate product</label>
                                    <div class="material-switch my-3">
                                        <input id="someSwitchOptionDefault" name="is_active" type="checkbox" @checked($product->is_active === 1)>
                                        <label for="someSwitchOptionDefault" class="bg-default"></label>
                                    </div>
                                </div>
                                @endcan
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
@stop
