@props(['transparent' => false])
<!-- Nav Menu Logo Here -->
<div id="mainNav_area">
    {{-- @yield('top-logo') --}}
    <nav class="navigation{{ $transparent ? '' : ' nav--white' }}">
        <div class="container">
            <div class="nav_bars">
                <div class="hamburger_icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="logo_nav">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/website/assets/img/logo.png') }}" alt="">
                </a>
            </div>
            <ul class="nav_area">
                <li><a class="{{ request()->url() == route('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="{{ request()->url() == route('event') ? 'active' : '' }}" href="{{ route('event') }}">Event management</a></li>
                {{-- <li><a class="{{ request()->url() == route('event') ? 'active' : '' }}" href="{{ route('event') }}">Designs</a></li> --}}
                <li><a class="{{ request()->url() == route('catering') ? 'active' : '' }}" href="{{ route('catering') }}">Catering</a></li>
                <li><a class="{{ request()->url() == route('logistics') ? 'active' : '' }}" href="{{ route('logistics') }}">Logistic rentals</a></li>
                <li><a class="{{ request()->url() == route('workshop') ? 'active' : '' }}" href="{{ route('workshop') }}">Workshop</a></li>
                <li><a class="{{ request()->url() == route('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li><a class="{{ request()->url() == route('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="social_link">
                @guest('customer')
                <a href="{{ route('customer.login') }}" class="signIn">
                    <span><i class="fa-solid fa-user"></i></span>
                </a>
                @endguest
                @auth('customer')
                <a href="{{ route('customer.dashboard') }}" class="user_dp">
                    <img src="{{ asset('storage').'/'.Auth::guard('customer')->user()->image }}" alt="user image">
                </a>
                @endauth

            </div>
        </div>
    </nav>
</div>