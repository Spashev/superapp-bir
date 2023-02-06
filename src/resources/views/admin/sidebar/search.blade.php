<nav class="navbar navbar-top navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler navbar-toggler-css navbar-menu-toggler collapsed sidebar-toggler">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
        <button class="navbar-toggler navbar-toggler-css-reverse navbar-menu-toggler collapsed"
                type="button" data-toggle="collapse" data-target="#navbar-top-collapsible"
                aria-controls="navbar-top-collapsible" aria-expanded="false" aria-label="Toggle navigation">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-top-collapsible">
            <ul class="navbar-nav navbar-menu-secondary">
                <li class="nav-item dropdown" id="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-toolbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav navbar-menu-primary">
            <li class="nav-item">
                <a href="#navbar-search" class="nav-link" role="button" class="btn-search mr-0"
                   data-toggle="class" data-class="navbar-search-active">
                    <svg fill="#000000" width="18" height="18" id="lnr-magnifier" viewBox="0 0 1024 1024">
                        <path class="path1"
                              d="M966.070 981.101l-304.302-331.965c68.573-71.754 106.232-165.549 106.232-265.136 0-102.57-39.942-199-112.47-271.53s-168.96-112.47-271.53-112.47-199 39.942-271.53 112.47-112.47 168.96-112.47 271.53 39.942 199.002 112.47 271.53 168.96 112.47 271.53 112.47c88.362 0 172.152-29.667 240.043-84.248l304.285 331.947c5.050 5.507 11.954 8.301 18.878 8.301 6.179 0 12.378-2.226 17.293-6.728 10.421-9.555 11.126-25.749 1.571-36.171zM51.2 384c0-183.506 149.294-332.8 332.8-332.8s332.8 149.294 332.8 332.8-149.294 332.8-332.8 332.8-332.8-149.294-332.8-332.8z"></path>
                    </svg>
                </a>
                </a>
            </li>
            <li class="nav-item dropdown notifications-nav-item" id="notification">
                <a href="#" class="nav-link dropdown-toggle dropdown-nocaret position-relative"
                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg fill="#555555" width="22" height="22" id="lnr-alarm" viewBox="0 0 1024 1024">
                        <path class="path1"
                              d="M860.171 773.15c-58.576-44-92.171-111.194-92.171-184.35v-153.6c0-128.661-86.733-237.442-204.798-270.954l-0.002-36.246c0-42.347-34.451-76.8-76.8-76.8-42.347 0-76.8 34.453-76.8 76.8v36.245c-118.067 33.512-204.8 142.294-204.8 270.955v153.6c0 73.157-33.595 140.349-92.171 184.35-8.808 6.616-12.395 18.125-8.907 28.573 3.486 10.448 13.267 17.496 24.283 17.496h232.982c-1.709 8.384-2.587 16.955-2.587 25.581 0 70.579 57.421 128 128 128s128-57.421 128-128c0-8.626-0.878-17.197-2.584-25.581h232.981c11.016 0 20.795-7.046 24.283-17.496s-0.101-21.957-8.909-28.573zM460.8 128c0-14.115 11.485-25.6 25.6-25.6s25.6 11.485 25.6 25.6v26.774c-8.435-0.763-16.97-1.176-25.6-1.176s-17.166 0.413-25.6 1.176v-26.774zM563.2 844.8c0 42.347-34.453 76.8-76.8 76.8s-76.8-34.453-76.8-76.8c0-8.76 1.515-17.411 4.394-25.581h144.813c2.878 8.168 4.394 16.821 4.394 25.581zM191.571 768.019c13.075-15.826 24.437-33.051 33.744-51.27 20.362-39.858 30.685-82.906 30.685-127.949v-153.6c0-127.043 103.357-230.4 230.4-230.4s230.4 103.357 230.4 230.4v153.6c0 45.043 10.323 88.091 30.685 127.949 9.307 18.219 20.669 35.445 33.744 51.27h-589.658z"></path>
                    </svg>
                    @if(isset($messages) && count($messages) > 0)
                    <span class="position-absolute"
                          style="top: 1.3rem; right: 1rem; color: #0074D9;">{{count($messages)}}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-sm dropdown-menu-start">

                    <div class="notifications-box">
                        @isset($messages)

                        <small class="d-block mt-3" style="margin-left: 30px; font-weight: 500; color: #999;">Today</small>

                        <ul class="list-group list-group-notifications-2">
                                @foreach($messages as $message)
                                    <li class="list-group-item notification" data-notification="{{$message->id}}">
                                        <div class="user-avatar">
                                            <span class="avatar avatar-1 rounded-circle"><x-initials :name="$message->full_name" /></span>
                                            <span class="badge badge-secondary color-badge badge-size-1"></span>
                                        </div>
                                        <div class="item-info">
                                            <p><a href="#">{{ $message->full_name }}</a> {{ $message->body }}</p>
                                        </div>
                                        <div class="timestamp">{{ $message->created_at->diffForHumans() }}
                                            <hello-vue />
                                        </div>
                                    </li>
                                @endforeach
                        </ul>

                        <ul class="list-group list-group-notifications-2">
                            <li class="list-group-item mt-3 list-group-loader">
                                <a href="#" class="btn btn-ellipsis-loader">
                                    <div class="lds-ellipsis">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        @endisset

                    </div>

                </div>
            </li>
            <li class="nav-item nav-user-dropdown dropdown">
                <a href="#" class="nav-link dropdown-toggle dropdown-nocaret" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth('manager')->user()->full_name }}
                    <img src="{{ asset('assets/media/avatars/user-placeholder.png') }}"
                         class="avatar avatar-1 rounded-circle" alt="Avatar image">
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-sm dropdown-menu-start">
                    <div class="dropdown-header pt-0">
                        <small class="text-overflow m-0">Welcome</small>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users"></i>
                        <span>Profile</span>
                    </a>
                    <a href="{{ route('admin.logout') }}" class="dropdown-item">
                        <i class="fas fa-power-off"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="form-group navbar-search" id="navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bind-to-edit-indicator" placeholder="Search And Hit Enter..."
               aria-label="Search" aria-describedby="navbar-search-addon">
        <div class="input-group-append">
            <button class="btn input-close-btn" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#333333" viewBox="0 0 24 24" width="24"
                     height="24">
                    <path
                        d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                </svg>
            </button>
        </div>
        <div class="live-search-results">
            <div class="loading-indicator"></div>
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ asset('assets/media/misc/1.jpg') }}" class="img">
                        <span class="title">Michael Myers</span>
                        <span class="subtitle">Hey sweety, Im coming home...</span>
                    </a>
                </li>
                <li class="show-all-link">
                    <a href="#">
                        <span class="title text-center">
                            Show All
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
