<!-- Nav Menu Logo Here -->
<div id="mainNav_area">
    @yield('top-logo')
    <nav class="navigation">
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
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('event') }}">EVENT MANAGEMENT</a></li>
            <li><a href="{{ route('catering') }}">CATERING</a></li>
            <li><a href="#">BOOK YOUR VENUE</a></li>
            <li><a href="{{ route('logistics') }}">LOGISTIC RENTAL</a></li>
            <li><a href="{{ route('workshop') }}">WORKSHOP</a></li>
            <li><a href="#">FASHOIN & FURNITURE</a></li>
            <li><a href="{{ route('about') }}">ABOUT</a></li>
            <li><a href="{{ route('contact') }}">CONTACT</a></li>
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
    </nav>
</div>