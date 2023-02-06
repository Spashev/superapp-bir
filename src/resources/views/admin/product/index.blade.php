@extends('admin.layouts')
@section('content')
    @if(Session::has('success'))
        <x-messages.success :message="Session::get('success')" />
    @elseif(Session::has('error'))
        <x-messages.error :message="Session::get('error')" />
    @endif
    <div class="panel panel-light">
        <div class="panel-header">
            <h3 class="panel-title">Products</h3>
            {{ $products->links() }}
        </div>
        <div class="panel-body">
            <div class="flex-table-responsive">
                <div class="flex-table-2 flex-table-separated flex-table-shadowed flex-table-rounded-circle">
                    <a href="{{ route('admin.product.create') }}" class="mb-2 btn btn-rounded btn-has-icon btn-icon-split btn-outline-primary">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span>NEW</span>
                    </a>
                    <div class="tbody">
                        @foreach ($products as $product)
                            <div class="tr">
                                <div class="td justify-content-center w-60">{{$loop->iteration}}</div>
                                <div class="td">{{$product->name}}</div>
                                <div class="td">{{$product->description}}</div>
                                <div class="td">
                                    @if(count($product->images) > 0)
                                        <img src="{{ asset('storage/' . $product->images->first()->thumbnail_path) }}" alt="Card image cap" width="40px">
                                    @else
                                        <p>
                                            <span class="badge color-badge color-badge-small badge-danger"></span> No photo
                                        </p>
                                    @endif
                                </div>
                                <div class="td">
                                    @if($product->is_active)
                                        <small>
                                            <span class="badge color-badge color-badge-small badge-success"></span> Published
                                        </small>
                                    @else
                                        <small>
                                            <span class="badge color-badge color-badge-small badge-danger"></span> Waiting
                                        </small>
                                    @endif
                                </div>
                                <div class="td">
                                    @if($product->status)
                                        <small>
                                            <span class="badge color-badge color-badge-small badge-success"></span> Active
                                        </small>
                                    @else
                                        <small>
                                            <span class="badge color-badge color-badge-small badge-danger"></span> Not active
                                        </small>
                                    @endif
                                </div>
                                <div class="td">{{date('d-m-Y', strtotime($product->created_at))}}</div>
                                <x-buttons.three :delete="route('admin.product.destroy', $product->id)" :edit="route('admin.product.edit', $product->id)" />
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/switcher/switch.css') }}">
@stop

@section('script')
    <script src="{{ asset('assets/js/manager/js-list-manager.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/switcher/switch.js') }}"></script>
    <script>$('[data-toggle="switch"]').bootstrapSwitch() ;</script>
    <script src="{{ asset('assets/js/icon/fontawesome-5.js') }}"></script>
@stop
