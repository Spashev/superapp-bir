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

                <form action="{{route('admin.amenity.update', $amenity->id)}}" method="post">
                    @csrf
                    <div class="panel-body panel-form bg-white">
                        <div class="form-group">
                            <label for="">Name *</label>
                            <div class="input-group input-group-squared">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Tau" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Icon *</label>
                            <div class="input-group input-group-squared">
                                <input type="text" name="icon" class="form-control" value="{{ old('icon') }}" placeholder="fas fa-theater-masks" required>
                            </div>
                            <small class="form-text text-muted">Copy the icons from the <a href="{{ route('admin.ui.linearicons') }}">icons section</a></small>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-squared">
                                <input type="checkbox" name="is_active" data-toggle="switch" data-inverse="true">
                            </div>
                        </div>
                        <div class="form-group form-group-btns text-center">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-lg shadow-lg btn-squared btn-primary">Create</button>
                                    <button type="button"class="btn btn-block btn-lg shadow-lg btn-squared btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
@stop
