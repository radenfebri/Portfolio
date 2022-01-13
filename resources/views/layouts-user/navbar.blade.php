  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('front') }}/img/logo.png" alt="">
            <span>FlexStart</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ $menu == 'home' ? 'active' : '' }} " href="/">Home</a></li>
                {{-- <li><a class="nav-link scrollto" href="#about">About</a></li> --}}
                <li><a class="nav-link scrollto {{ $menu == 'store' ? 'active' : '' }} " href="{{ route('store.index') }}">Store</a></li>
                <li><a class="nav-link scrollto {{ $menu == 'cart' ? 'active' : '' }} " href="{{ route('cartview.index') }}">Cart</a></li>
                {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
                {{-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> --}}
                {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
                {{-- <li><a href="blog.html">Blog</a></li> --}}
                {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
                {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                <li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="dropdown"><a class="{{ $menu == 'akun' ? 'active' : '' }}" href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="{{ $submenu == 'myorder' ? 'active' : '' }}" href="{{ route('myorder.index') }}">My Orders</a></li>
                            @if (Auth::user()->hasRole('Super Admin'))

                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

                                @if (Auth::user()->username)
                                    <li><a class="{{ $submenu == 'myprofile' ? 'active' : '' }}" href="/{{ Auth::user()->username }}">My Profile</a></li>
                                @else

                                @endif

                            @elseif (Auth::user()->hasRole('Admin'))

                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

                                @if (Auth::user()->username)
                                    <li><a class="{{ $submenu == 'myprofile' ? 'active' : '' }}" href="/{{ Auth::user()->username }}">My Profile</a></li>
                                @else

                                @endif

                            @elseif (Auth::user()->hasRole('User'))

                                @if (AUth::user()->username)
                                    <li><a class="{{ $submenu == 'myprofile' ? 'active' : '' }}" href="/{{ Auth::user()->username }}">My Profile</a></li>
                                @else

                                @endif

                                <li><a class="{{ $submenu == 'setting-profile' ? 'active' : '' }}" href="{{ route('userprofile.index') }}">Setting Profile</a></li>

                            @endif
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </li>
            @endguest

        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
<!-- .navbar -->

</div>
</header>
<!-- End Header -->
