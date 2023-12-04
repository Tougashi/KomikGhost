	<!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                @if(auth()->check())
                <a href="/beranda">
                @else
                <a href="/Beranda">
                @endif
                <img src="{{  asset('assets/images/logo/logo3.png') }}" class="logo-icon" alt="komikgo" width="">
                </a>
                </div>
                <div>
                    @if(auth()->check())
                    <a href="/beranda">
                    @else
                    <a href="/Beranda">
                    @endif
                    <h4 class="logo-text">KOMIK GHOST</h4>
                    </a>   
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu"> 
            <hr>
            <li>
                <a href="{{ Auth::check() ? route('beranda') : '/Beranda' }}" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                    <div class="menu-title">Beranda</div>
                </a>
            </li>
            <hr>
            <li>
                <a href="{{ Auth::check() ? route('terbaru') : '/Terbaru' }}" class="">
                    <div class="parent-icon"><i class='bx bx-time-five'></i></div>
                    <div class="menu-title">Terbaru</div>
                </a>
            </li>
            <hr>
            <li>
                <a href="{{ Auth::check() ? route('dc') : '/Dc' }}" class="">
                    <div class="parent-icon"><i class='bx bx-mask'></i></div>
                    <div class="menu-title">DC</div>
                </a>
            </li>
            <hr>
            <li>
                <a href="{{ Auth::check() ? route('marvel') : '/Marvel' }}" class="">
                    <div class="parent-icon"><i class='bx bx-atom'></i></div>
                    <div class="menu-title">Marvel</div>
                </a>
            </li>
            <hr>
            {{-- @if(auth()->check())
            <li>
                <a href="/bookmark" class="">
                    <div class="parent-icon"><i class='bx bx-bookmark-plus'></i></div>
                    <div class="menu-title">Bookmark</div>
                </a>
            </li>
            <hr>
            @endif --}}
            <li>
                <a href="{{ Auth::check() ? route('contact') : '/Contact' }}" class="">
                    <div class="parent-icon"><i class='bx bx-mail-send'></i></div>
                    <div class="menu-title">Hubungi Kami</div>
                </a>
            </li>   
            <hr>
            <li>
                <a href="{{ Auth::check() ? route('faq') : '/Faq' }}" class="">
                    <div class="parent-icon"><i class='bx bx-help-circle'></i></div>
                    <div class="menu-title">FAQ</div>
                </a>
            </li>
            <hr>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                    <form action="{{ auth()->check() ? route('search') : 'Search' }}" method="GET">
                        <div class="position-relative search-bar-box">
                            <input type="text" class="form-control search-control" placeholder="Cari Disini..." name="search">
                            <span class="position-absolute top-50 translate-middle-y">
                                <button class="btn btn-sm"><i class='bx bx-search'></i></button>
                            </span>
                            @if (auth()->check())
                                <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                            @endif
                        </div>
                    </form>                    
                    </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#"><i class='bx bx-search'></i>
                            </a>
                        </li>   

                        <li class="nav-item dropdown dropdown-large">  
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                </a>
                                <div class="header-notifications-list">
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                </a>
                                <div class="header-message-list">
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @guest
                        <a href="/login" class="btn btn-dark px-4">Login</a>
                        @endguest
                        @if (auth()->check())
                        <img src="{{ asset('assets/images/logo/logo2.png') }}" class="logo-icon" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ auth()->user()->username }}</p>
                            <p class="designattion mb-0"></p>
                        </div>
                        @else
                        <div class="user-info ps-3">
                            {{-- <p class="user-name mb-0"> untuk menggunakan fitur bookmark</p> --}}
                        </div>
                        @endif
                    </a>
                             @auth
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/profile"><i class="bx bx-user"></i><span>Profil</span></a></li>
                        @endauth
                        @if(auth()->check() && auth()->user()->role_id === 1)
                        <li><div class="dropdown-divider mb-0"></div></li>
                        <li><a class="dropdown-item" href="/users-list"><i class="bx bx-group"></i><span>Pengguna</span></a></li>
                        <li><a class="dropdown-item" href="/category-upload"><i class="bx bx-list-ul"></i><span>Kategori</span></a></li>
                        <li><a class="dropdown-item" href="/komik-list"><i class="bx bx-book"></i><span>Komik</span></a></li>
                        <li><a class="dropdown-item" href="/chapter-list"><i class="bx bx-archive"></i><span>Chapter</span></a></li>
                        <li><a class="dropdown-item" href="/image-upload"><i class="bx bx-photo-album"></i><span>Image</span></a></li>
                        @endif
                        @auth
                        <li><div class="dropdown-divider mb-0"></div></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                            <i class='bx bx-log-out-circle text-danger'></i><span class="text-danger">Keluar</span>
                        </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->