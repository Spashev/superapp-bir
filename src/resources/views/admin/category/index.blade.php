@extends('admin.layouts')
@section('content')
    @if(Session::has('success'))
        <x-messages.success :message="Session::get('success')" />
    @elseif(Session::has('error'))
        <x-messages.error :message="Session::get('error')" />
    @endif
    <div class="panel panel-light">
        <div class="panel-header">
            <h3 class="panel-title">Категория</h3>
        </div>
        <div class="panel-body">
            <div class="flex-table-responsive">
                <div class="flex-table-2 flex-table-separated flex-table-shadowed flex-table-rounded-circle">
                    <button type="button" class="mb-2 btn btn-rounded btn-has-icon btn-icon-split btn-outline-primary"
                            data-toggle="modal" data-target="#add-tag">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span><i class="fas fa-th"></i></span>
                    </button>
                    <div class="tbody">
                        @foreach ($categories as $category)
                            <div class="tr" style="{{ $category->isParent() ? '' : 'margin-left: 40px;'}}">
                                <div class="td justify-content-center w-60"><span class="{{ $category->isParent() ? 'text-lg text-success' : '' }}">{{$loop->iteration}}</span></div>
                                <div class="td">{{$category->name}}</div>
                                <div class="td">{{$category->description}}</div>
                                <div class="td"><i class="{{$category->icon}}" style="font-size: 18px;"></i></div>
                                <div class="td">
                                    @if($category->is_active)
                                        <small>
                                            <span class="badge color-badge color-badge-small badge-success"></span>
                                            Активный
                                        </small>
                                    @else
                                        <small>
                                            <span class="badge color-badge color-badge-small badge-danger"></span>
                                            Не активный
                                        </small>
                                    @endif
                                </div>
                                <div class="td">{{date('d-m-Y', strtotime($category->created_at))}}</div>
                                <x-buttons.three :delete="route('admin.category.destroy', ['category' => $category->id])" :edit="route('admin.category.edit', ['category' => $category->id])" />
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="modals">

        <div class="modal fade" tabindex="-1" role="dialog" id="add-tag">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Создание категорий</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#333333" viewBox="0 0 24 24" width="24"
                                 height="24">
                                <path
                                    d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('admin.category.store')}}" method="post">
                            @csrf
                            <div class="panel-body panel-form bg-white">
                                <div class="form-group">
                                    <label for="">Название категорий *</label>
                                    <div class="input-group input-group-squared">
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                               placeholder="Бургулюк" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Описание категорий</label>
                                    <div class="input-group input-group-squared">
                                        <textarea class="form-control" name="description"
                                                  id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Родитель</label>
                                    <div class="input-group input-group-squared">
                                        <select name="parent" class="form-control">
                                            <option value="">Выбрать</option>
                                            @foreach($parents as $parent)
                                                <option value="{{$parent->id}}">{{ $parent->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Icon *</label>
                                    <div class="input-group input-group-squared">
                                        <input type="text" name="icon" class="form-control" value="{{ old('icon') }}" placeholder="fas fa-theater-masks">
                                    </div>
                                    <small class="form-text text-muted">Copy the icons from the <a href="{{ route('admin.ui.linearicons') }}">icons section</a></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Вкл/Выкл</label>
                                    <div class="input-group input-group-squared">
                                        <input type="checkbox" name="is_active" data-toggle="switch"
                                               data-inverse="true">
                                    </div>
                                </div>
                                <div class="form-group form-group-btns text-center">
                                    <div class="row no-gutters">
                                        <div class="col-md-12">
                                            <button type="submit"
                                                    class="btn btn-block btn-lg shadow-lg btn-squared btn-primary">
                                                Сохранить
                                            </button>
                                            <button type="button"
                                                    class="btn btn-block btn-lg shadow-lg btn-squared btn-danger"
                                                    data-dismiss="modal">Назад
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script>
        $('[data-toggle="switch"]').bootstrapSwitch();
    </script>

    <script src="{{ asset('assets/js/icon/fontawesome-5.js') }}"></script>
@stop
