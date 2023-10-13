@props(['transparent' => false])
<!-- Nav Menu Logo Here -->
<div id="mainNav_area">
    {{-- @yield('top-logo') --}}
    <nav class="navigation{{ $transparent ? '' : ' nav--white' }}">
        <div class="container">
            <div class="logo_nav">
                <div class="nav_bars">
                    <i class="fa-solid fa-bars"></i>
                    <h2>MENU</h2>
                </div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/website/assets/img/Logo.png') }}" alt="">
                </a>
            </div>
            <ul class="nav_area">
                <li><a class="active" href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('event') }}">Event management</a></li>
                <li><a href="{{ route('catering') }}">Catering</a></li>
                {{-- <li><a href="#">BOOK YOUR VENUE</a></li> --}}
                <li><a href="{{ route('logistics') }}">Logistic rentals</a></li>
                <li><a href="{{ route('workshop') }}">Workshop</a></li>
                {{-- <li><a href="#">FASHOIN & FURNITURE</a></li> --}}
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="social_link">
                <div class="search">
                    <span id="search_bars"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="cart">
                    <span id="cart_btn"><i class="fa-solid fa-cart-shopping"></i></span>
                </div>
                <a href="/admin/login" class="signIn">
                    <span><i class="fa-solid fa-user"></i></span>
                </a>
            </div>
        </div>
    </nav>
</div>