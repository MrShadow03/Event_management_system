<!-- SEARCH BOX -->
{{-- <div class="search_box">
    <div class="input_area">
        <input type="text" placeholder="Search for product">
        <i class="fa-solid fa-x"></i>
    </div>
    <p>Start typing to see products you are looking for.</p>
</div> --}}
<!-- CART BOX -->
{{-- <div class="cart_box">
    <div class="cart_head">
        <h2>Shopping cart</h2>
        <div class="cart_bars">
            <i class="fa-solid fa-x"></i>
            <p>close</p>
        </div>
    </div>
    <p>No products in the cart.</p>
</div> --}}
<!-- Side Nav -->
<div class="main_side_nav" id="mobileMenu">
    <div class="side_nav_box">
        <div class="side_nav">
            <div class="nav_close">
                <div class="bars" onclick="closeSidebars()">
                    <i class="fa-solid fa-bars"></i>
                    <p>Menu</p>
                </div>
            </div>
            {{-- <div class="nav_search">
                <form action="">
                    <input type="text" placeholder="Search for products">
                    <i class="navsearch_icon fa-solid fa-magnifying-glass"></i>
                </form>
            </div> --}}
            {{-- <ul class="tab_wrap">
                <li class="tab_wrap_items">
                    <input type="radio" id="tab_1" name="tab" checked />
                    <label for="tab_1">
                        MENU
                    </label> --}}
                    <div class="tab_wrap_nav">
                        <ul class="tab_wrap_nav_box">
                            <li class="tab_wrap_nav_items"><a class="{{ request()->url() == route('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                            {{-- <li class="tab_wrap_nav_items"><a href="{{ route('event') }}">EVENT MANAGMENT</a></li> --}}
                            <li class="tab_wrap_nav_items"><a class="{{ request()->url() == route('catering') ? 'active' : '' }}" href="{{ route('catering') }}">Catering</a></li>
                            <li class="tab_wrap_nav_items"><a class="{{ request()->url() == route('logistics') ? 'active' : '' }}" href="{{ route('logistics') }}">Logistic Rental</a></li>
                            <li class="tab_wrap_nav_items"><a class="{{ request()->url() == route('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                            <li class="tab_wrap_nav_items"><a class="{{ request()->url() == route('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                {{-- </li> --}}
                {{-- <li class="tab_wrap_items">
                    <input type="radio" id="tab_2" name="tab"/>
                    <label for="tab_2">
                        CATEGORIES
                    </label>
                    <div class="tab_wrap_nav">
                        <ul class="tab_wrap_nav_box">
                            @foreach ($categories_shared as $category)
                            @if ($category->id == 1)
                                @continue(true)
                            @endif
                                <li class="tab_wrap_nav_items"><a class="font-bn" href="{{ route('customer.products', $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</div>