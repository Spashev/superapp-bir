<header>
    <div class="row">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 mt-3 p-0 breadcrumbs-chevron">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    @foreach($breadcrumb as $item)
                        <li class="breadcrumb-item"><a href="{{ $item['route'] }}">{{$item['title']}}</a></li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
</header>
