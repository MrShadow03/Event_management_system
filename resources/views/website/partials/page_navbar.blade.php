<!-- SEARCH BOX -->
<div class="search_box">
    <div class="input_area">
        <input type="text" placeholder="Search for product">
        <i class="fa-solid fa-x"></i>
    </div>
    <p>Start typing to see products you are looking for.</p>
</div>
<!-- CART BOX -->
<div class="cart_box">
    <div class="cart_head">
        <h2>Shopping cart</h2>
        <div class="cart_bars">
            <i class="fa-solid fa-x"></i>
            <p>close</p>
        </div>
    </div>
    <p>No products in the cart.</p>
</div>
<!-- Side Nav -->
<div class="main_side_nav">
    <div class="side_nav_box">
        <div class="side_nav">
            <div class="nav_close">
                <div class="bars">
                    <i class="fa-solid fa-xmark"></i>
                    <p>Close</p>
                </div>
            </div>
            <div class="nav_search">
                <form action="">
                    <input type="text" placeholder="Search for products">
                    <i class="navsearch_icon fa-solid fa-magnifying-glass"></i>
                </form>
            </div>
            <ul class="tab_wrap">
                <li class="tab_wrap_items">
                    <input type="radio" id="tab_1" name="tab" checked />
                    <label for="tab_1">
                        MENU
                    </label>
                    <div class="tab_wrap_nav">
                        <ul class="tab_wrap_nav_box">
                            <li class="tab_wrap_nav_items"><a href="#">HOME</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">EVENT MANAGMENT</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">CATERING</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">BOOK YOUR VENUE</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">LOGISTIC RENTAL</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">WORKSHOP</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">FASHION & FURNITURE</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">ABOUT</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">CONTACT</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">WISHLIST</a></li>
                        </ul>
                    </div>
                </li>
                <li class="tab_wrap_items">
                    <input type="radio" id="tab_2" name="tab"/>
                    <label for="tab_2">
                        CATEGORIES
                    </label>
                    <div class="tab_wrap_nav">
                        <ul class="tab_wrap_nav_box">
                            <li class="tab_wrap_nav_items"><a href="#">ARTIFICIAL TREE</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">CENTERPIECES</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">CHAIR</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">CHAIR RIBBON</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">CHANDELIER</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">CLOTH</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">FLOWER VASE</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">FOUNTAIN</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">HANGING</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">HEAD TABLE</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">LIGHTING</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">METAL</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">PLATFORM</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">SHOWPIECE</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">SOFA</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">TABLE & TOOLS</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">TABLE RUNNER</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">TABLE TOP</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">UMBRELLA</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">WALKWAY</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">WOOD DESIGN</a></li>
                            <li class="tab_wrap_nav_items"><a href="#">EXTRA</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- HEADER -->
<header class="header">
    <!-- Nav Menu Logo Here -->
    <div id="mainNav_area">
        <div class="logo_top">
            <img src="{{ asset('assets/website/assets/img/Logo.png') }}" alt="">
        </div>
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
                <div class="signIn">
                    <span><i class="fa-solid fa-user"></i></span>
                </div>
            </div>
        </nav>
    </div>
</header>