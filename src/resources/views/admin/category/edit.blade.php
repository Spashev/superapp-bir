@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <header>
            <div class="row">
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Category</a></li>
                            <li class="breadcrumb-item"><a href="#">Update</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>

        <div class="row mt-3">

            <div class="col-md-12">

                <form action="{{route('admin.category.update', $category->id)}}" method="post" class="h-100">
                    @csrf
                    @method('PUT')
                    <div class="panel panel-light">
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Name *</label>
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}" required value="{{old('name')}}">
                                        @error('name')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Description</label>
                                        <input type="text" name="description" class="form-control" value="{{$category->description}}" required value="{{old('description')}}">
                                        @error('description')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Icon *</label>
                                        <div class="input-group input-group-squared">
                                            <input type="text" name="icon" class="form-control" value="{{ $category->icon }}" placeholder="fas fa-theater-masks">
                                        </div>
                                        <small class="form-text text-muted">Copy the icons from the <a href="{{ route('admin.ui.linearicons') }}">icons section</a></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="">Родитель</label>
                                        <div class="input-group input-group-squared">
                                            <select name="parent" class="form-control">
                                                <option value="">Выбрать</option>
                                                @foreach($parents as $parent)
                                                    <option value="{{$parent->id}}" @selected($parent->id === $category->parent)>{{ $parent->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label for="">Is active</label>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-inverse-2 d-block mb-2">
                                                <input type="checkbox" name="is_active" class="custom-control-input" id="{{'custom-checkbox-inverse-2-' . 'status' }}" @checked($category->is_active === 1)>
                                                <label class="custom-control-label" for="{{'custom-checkbox-inverse-2-' . 'status' }}">Check the box if you want Publish</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success px-5">Save</button>
                                <a href="{{route('admin.category.index')}}" class="btn btn-secondary ml-2">Back</a>
                            </div>
                        </div>

                </form>

            </div>

        </div>

    </div>
@stop
