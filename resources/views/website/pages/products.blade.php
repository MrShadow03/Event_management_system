@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
<style>
    .wrapper {
    position: relative;
    width: 100%;
    padding-bottom: 1rem;
    }
    input[type="range"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none !important;
    width: 100%;
    outline: none;
    position: absolute;
    top: 6px;
    background-color: transparent;
    pointer-events: none;
    }
    @-moz-document url-prefix() {
        input[type="range"] {
            top: -7px !important;
        }
    }
    .slider-track {
    width: 100%;
    height: 5px;
    position: absolute;
    margin: auto;
    top: 0;
    border-radius: 5px;
    }
    input[type="range"]{
        border: none;
    }
    input[type="range"]::-webkit-slider-runnable-track {
    -webkit-appearance: none;
    height: 5px;
    }
    input[type="range"]::-moz-range-track {
    -moz-appearance: none;
    height: 5px;
    }
    input[type="range"]::-ms-track {
    appearance: none;
    height: 5px;
    }
    input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    height: .7em;
    width: .7em;
    background-color: #fff;
    outline: 3px solid #3264fe;
    cursor: pointer;
    margin-top: -9px;
    pointer-events: auto;
    border-radius: 50%;
    }
    input[type="range"]::-moz-range-thumb {
    -webkit-appearance: none;
    height: .7em;
    width: .7em;
    cursor: pointer;
    border-radius: 0px;
    background-color: #fff;
    outline: 3px solid #3264fe;
    pointer-events: auto;
    border-radius: 50%;
    }
    input[type="range"]::-ms-thumb {
    appearance: none;
    height: .7em;
    width: .7em;
    cursor: pointer;
    border-radius: 50%;
    background-color: #fff;
    outline: 3px solid #3264fe;
    pointer-events: auto;
    }
    input[type="range"]:active::-webkit-slider-thumb {
    background-color: #ffffff;
    border: 1px solid #3264fe;
    }
    .values {
    background-color: #3264fe;
    width: 32%;
    position: relative;
    margin: auto;
    padding: 10px 0;
    border-radius: 5px;
    text-align: center;
    font-weight: 500;
    font-size: 25px;
    color: #ffffff;
    }
    .values:before {
    content: "";
    position: absolute;
    height: 0;
    width: 0;
    border-top: 15px solid #3264fe;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    margin: auto;
    bottom: -14px;
    left: 0;
    right: 0;
    }

    .pagination {
        display: block;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .pagination ul {
        margin: 0;
        padding: 0;
        list-style: none;
        text-align: center;
    }

    .pagination li {
        display: inline;
        margin: 0;
        padding: 0;
    }

    .pagination li a, 
    .pagination li span {
        display: inline-block;
        padding: 10px 15px;
        margin: 0 2px;
        border-radius: 3px;
        text-decoration: none;
        color: #333;
        background-color: #fff;
        border: 1px solid #ddd;
        font-size: 12px;
    }

    .pagination li.active span {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pagination li.active span:hover {
        background-color: #007bff;
        border-color: #007bff;
    }

    .pagination li.disabled span,
    .pagination li.disabled a {
        color: #999;
        background-color: #fff;
        border-color: #ddd;
        cursor: not-allowed;
    }

    .pagination li a:hover,
    .pagination li span:hover {
        background-color: #eee;
    }
</style>
@endsection

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Products - Maaevent.com - Explore a Wide Range of Event Solutions in Bangladesh">
    <meta name="description" content="Discover a diverse range of event solutions in Bangladesh with Maaevent.com's Products Page. Explore products and services for all types of events, from weddings to corporate gatherings and more.">
    <meta name="keywords" content="Maaevent.com, products, event solutions, all events, wedding products, corporate events, Bangladesh events">

    <!-- Open Graph (og:) Tags -->
    <meta property="og:title" content="Products - Maaevent.com - Explore a Wide Range of Event Solutions in Bangladesh">
    <meta property="og:description" content="Explore a diverse selection of event solutions in Bangladesh with Maaevent.com's Products Page. Whether it's a wedding, corporate gathering, or any other event, find the products and services you need.">
    <meta property="og:image" content="
    @isset (($products[0]->image))
        {{ asset('storage').'/'.$products[0]->image }}
    @else
    {{ asset('assets/website/assets/img/logo.png') }}
    @endisset
    ">
    <meta property="og:url" content="[Insert your Products page URL here]">

    <title>{{ $products[0]->category->name ?? ''}} Products - Maaevent.com - Explore a Wide Range of Event Solutions in Bangladesh</title>
@endsection
@section('nav')
    <x-nav />
@endsection
@section('main-content')
    <div class="main_page_wrapper">
        <!-- Container_section -->
        <div class="product_container">
            <div class="raw">
                <div class="raw_sidebar" id="filterSidebar">
                    <div class="filter_price">
                        <div class="card-header">
                            <h3 class="heading-sm">Price Range (BDT)</h3>
                            <button class="times" onclick="toggleFilterSidebar()"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                        </div>
                        <div class="divider"></div>
                        <div class="price_box">
                            <div class="wrapper">
                                <div class="slider-track"></div>
                                <input type="range" min="0" max="{{ $max_price }}" value="0" id="slider-1" oninput="slideOne()" style="right: 2px;">
                                <input type="range" min="0" max="{{ $max_price }}" value="{{ $max_price }}" id="slider-2" oninput="slideTwo()" style="left: 2px;">
                                {{-- <input type="range" min="0" max="850" value="0" id="slider-1" oninput="slideOne()" style="right: 2px;">
                                <input type="range" min="0" max="850" value="850" id="slider-2" oninput="slideTwo()" style="left: 2px;"> --}}
                            </div>
                            <div class="price_input">
                                <form action="#" id="priceForm">
                                    {{-- {{ dd(request('min_price')) }} --}}
                                    <div class="formbox">
                                        <input onchange="adjustSlider()" value="{{ request('min_price') }}" name="min_price" id="range1" type="text">
                                        <input onchange="adjustSlider()" name="max_price" id="range2" type="text">
                                    </div>
                                    <button class="filter_btn" type="submit">Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="logistics_rental">
                        <h3 class="heading-sm">Product Categories</h3>
                        <div class="divider"></div>
                        <ul class="rental_box">
                            @foreach ($categories as $category)
                            @if ($loop->first)
                                @continue
                            @endif
                            <li class="rental_items">
                                <a href="{{ route('customer.products', $category->id) }}" class="{{ $currentCategory->id == $category->id ? 'active' : '' }}">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="raw_items_box">
                    <div class="raw_items_top">
                        <div class="left">
                            <div class="filter-toggle">
                                <button id="filterSidebarToggleButton" onclick="toggleFilterSidebar(this)"><i class="fa-solid fa-sliders"></i></button>
                            </div>
                        </div>
                        <div class="right">
                            <div class="item">
                                <span>Sort by:</span>
                                <select name="order_by" id="orderSelect">
                                    <option value="id-asc">Default sorting</option>
                                    <option @selected($queries['order_by'] == 'price-asc') value="price-asc">Price: low to high</option>
                                    <option @selected($queries['order_by'] == 'price-desc') value="price-desc">Price: high to low</option>
                                </select>
                            </div>
                            {{-- <div class="item">
                                <span>Show:</span>
                                <select name="limit">
                                    <option @selected($queries['limit'] == 12) value="12">12</option>
                                    <option @selected($queries['limit'] == 24) value="24">24</option>
                                    <option @selected($queries['limit'] == 36) value="36">36</option>
                                    <option @selected($queries['limit'] == 48) value="48">48</option>
                                    <option @selected($queries['limit'] == 60) value="60">60</option>
                                </select>
                            </div> --}}
                        </div>
                    </div>
                    <div class="raw_items_bottom">
                        <div class="raw_items_bottom_box">
                            @forelse ($products as $product)
                            <div class="raw_items card_1">
                                <div class="raw_items_image">
                                    <img src="{{ asset('storage').'/'.$product->image }}" alt="{{ $product->name }} image" loading="lazy">
                                    <div class="image_items_icon_box">
                                        <a title="Read More" class="image_items_icon" href="{{ route('customer.rentals') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a title="Quick View" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        <a title="Add To Wishlist" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="raw_items_text">
                                    <a class="heading-xs" href="{{ route('customer.product', $product->id) }}">{{ $product->name }}</a>
                                    <p>SKU: {{ $product->product_code }}</p>
                                    @if ($product->dimension)
                                        <p>Dimension: {{ $product->dimension }}</p>
                                    @endif

                                    @if ($product->color)
                                        <p>Color/Material: {{ $product->color }}</p>
                                        @endif
                                    <p>Available: {{ $product->stock }} <span class="font-bn"></span></p>
                                </div>
                                <div class="card-footer">
                                    <p class="price">{{ number_format($product->rental_price) }} TK</p>
                                </div>
                            </div>
                            @empty
                                <span class="badge-lg">No Products Found</span>
                            @endforelse
                        </div>
                        {{-- <div class="next_view">
                            <a class="active" href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="">5</a>
                            <a href=""><i class="fa-solid fa-chevron-right"></i></a>
                        </div> --}}
                        {{-- {{ $products->links('website.partials.product_pagination') }} --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Model Section -->
        <div class="main_model">
            <div class="model">
                <div class="model_card">
                    <div class="cart_image">
                        <img src="{{ asset('./assets/website/assets/img/items_image2.jpg') }}" alt="">
                        <a class="view_details" href="">View Dtails</a>
                    </div>
                    <div class="cart_text">
                        <div class="cart_text_main">
                            <p>Black Georgette</p>
                            <button class="model_cart_close"><i class="fa-solid fa-x"></i></button>
                        </div>
                        <span>৳ 6.00</span>
                        <form class="form_box" action="">
                            <div class="form_items">
                                <label class="label_text" for="">Pickup Date &amp; Time (Please Select Date &amp; Time to Select Quantity)</label>
                                <input class="pickup_date" name="date" type="date">
                                <input class="pickup_time" name="time" type="time">
                            </div>
                            <div class="form_items">
                                <label class="label_text" for="">Drop off Date &amp; Time</label>
                                <input class="pickup_date" name="date" type="date">
                                <input class="pickup_time" name="time" type="time">
                            </div>
                            <div class="form_items">
                                <label class="label_text" for="">Quantity</label>
                                <input class="pickup_date" style="text-align: center; width: 100%;" name="number" type="number">
                            </div>
                            <button class="form_btn" type="submit">BOOK NOW</button>
                        </form>
                        <div class="cart_wishlist">
                            <i class="fa-regular fa-heart"></i>&nbsp;Add to wishlist
                        </div>
                        <div class="category">
                            <ul>
                                <li><p>SKU :</p><a href="">C-03</a></li>
                                <li><p>Category :</p><a href="">Cloth</a></li>
                                <li><p>Tag :</p><a href="">Cloth</a></li>
                                <li><p>Share :</p>
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>&nbsp;&nbsp;
                                    <a href=""><i class="fa-brands fa-pinterest-p"></i></a>&nbsp;&nbsp;
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>&nbsp;&nbsp;
                                    <a href=""><i class="fa-brands fa-telegram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay" onclick="toggleFilterSidebar()"></div>
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
<script>
    window.onload = function () {
        slideOne();
        slideTwo();
    };

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;

    // Parse the query parameters from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const minPriceParam = urlParams.get("min_price");
    const maxPriceParam = urlParams.get("max_price");

    // Set initial values based on the query parameters
    if (minPriceParam && maxPriceParam) {
        sliderOne.value = minPriceParam;
        sliderTwo.value = maxPriceParam;
        displayValOne.value = minPriceParam;
        displayValTwo.value = maxPriceParam;
        fillColor();
    }

    function slideOne() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderOne.value = parseInt(sliderTwo.value) - minGap;
        }
        displayValOne.value = sliderOne.value;
        fillColor();
    }

    function slideTwo() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderTwo.value = parseInt(sliderOne.value) + minGap;
        }
        displayValTwo.value = sliderTwo.value;
        fillColor();
    }

    function fillColor() {
        percent1 = (sliderOne.value / sliderMaxValue) * 100;
        percent2 = (sliderTwo.value / sliderMaxValue) * 100;
        sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
    }

    function adjustSlider() {
        if (parseInt(displayValOne.value) > parseInt(displayValTwo.value)) {
            sliderOne.value = displayValOne.value;
            sliderTwo.value = displayValOne.value;
            displayValTwo.value = displayValOne.value;
        } else {
            sliderOne.value = displayValOne.value;
            sliderTwo.value = displayValTwo.value;
        }
        fillColor();
    }


    //update url on select change
    document.querySelector('select[name="order_by"]').addEventListener('change', function() {
        const selectedValue = this.value;
        const currentUrl = window.location.href;
        const newUrl = updateQueryStringParameter('order_by', selectedValue);
        window.location.href = newUrl;
    });
    
    // document.querySelector('select[name="limit"]').addEventListener('change', function() {
    //     const selectedValue = this.value;
    //     const currentUrl = window.location.href;
    //     const newUrl = updateQueryStringParameter('limit', selectedValue);
    //     window.location.href = newUrl;
    // });
    
    document.querySelector("#priceForm").addEventListener("submit", function (e) {
        //prevent default form submit
        e.preventDefault();
        
        const minPrice = document.getElementById("range1").value;
        const maxPrice = document.getElementById("range2").value;
        
        const newUrl = updateQueryStringParameter("min_price", minPrice);
        const finalUrl = updateQueryStringParameter("max_price", maxPrice, newUrl);

        window.location.href = finalUrl;
    });


    function updateQueryStringParameter(key, value, url) {
        if (!url) url = window.location.href;
        const re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        const separator = url.indexOf("?") !== -1 ? "&" : "?";
        
        if (url.match(re)) {
            return url.replace(re, "$1" + key + "=" + value + "$2");
        } else {
            return url + separator + key + "=" + value;
        }
    }

    function toggleFilterSidebar() {
        const filterSidebar = document.getElementById("filterSidebar");
        const overlay = document.getElementById("overlay");
        if (filterSidebar.classList.contains("active")) {
            filterSidebar.classList.remove("active");
            overlay.classList.remove("active");
        } else {
            filterSidebar.classList.add("active");
            overlay.classList.add("active");
        }
    }

</script>
@endsection