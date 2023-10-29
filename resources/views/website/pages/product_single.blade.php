@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <meta name="title" content="{{ $product->name }} - Maaevent.com - Your Event Solution Provider in Bangladesh">
    <meta name="description" content="Explore the details of {{ $product->name }}, a high-quality event solution offered by Maaevent.com. Learn about its features, benefits, and how it can enhance your upcoming event in Bangladesh.">
    <meta name="keywords" content="Maaevent.com, {{ $product->name }}, event solution, product details, features, benefits, Bangladesh events">

    <!-- Open Graph (og:) Tags -->
    <meta property="og:title" content="{{ $product->name }} - Maaevent.com - Your Event Solution Provider in Bangladesh">
    <meta property="og:description" content="Discover the details of {{ $product->name }}, an exceptional event solution provided by Maaevent.com. Learn about its features, benefits, and how it can elevate your upcoming event in Bangladesh.">
    <meta property="og:image" content="{{ asset('storage').'/'.$product->image }}">
    <meta property="og:url" content="{{ route('product', $product->id) }}">

<title>{{ $product->name }} - Maaevent.com - Your Event Solution Provider in Bangladesh</title>
@endsection

@section('nav')
    <x-nav />
@endsection

@section('main-content')
<div class="main_page_wrapper bg-white">
    <div class="container">
        <div class="cart_section_top card_2">
            <div class="cart_image">
                <img src="{{ asset('storage').'/'.$product->image }}" alt="" width="100%" class="zoom">
            </div>
            <div class="cart_text">
                <h1 class="product-title">{{ $product->name }}</h1>
                <span class="product-price">Tk {{ $product->rental_price }}</span>
                @if ($variations['colors']->count() > 0 || $variations['dimensions']->count() > 0)
                <div class="variations">
                    <span>More Variations: </span>
                    @foreach ($variations['colors'] as $item)
                        <a href="{{ route('product', $item->id) }}" class="btn-badge">{{ $item->color }}</a>
                    @endforeach
                    @foreach ($variations['dimensions'] as $item)
                        <a href="{{ route('product', $item->id) }}" class="btn-badge">{{ $item->dimension }}</a>
                    @endforeach
                </div>
                @endif
                <form class="form_box" action="{{ route('customer.login') }}">
                    {{-- <div class="form_items">
                        <label class="label_text" for="">Pickup Date &amp; Time (Please Select Date &amp; Time to Select Quantity)</label>
                        <input class="pickup_date" name="date" type="date">
                        <input class="pickup_time" name="time" type="time">
                    </div>
                    <div class="form_items">
                        <label class="label_text" for="">Drop off Date &amp; Time</label>
                        <input class="pickup_date" name="date" type="date">
                        <input class="pickup_time" name="time" type="time">
                    </div> --}}
                    <button class="btn-grad" type="submit">BOOK NOW</button>
                </form>
                <div class="cart_wishlist">
                    <i class="fa-regular fa-heart"></i>&nbsp;Add to wishlist
                </div>
                <div class="category">
                    <ul>
                        <li><p>SKU : {{ $product->product_code }}</p></li>
                        <li><p>Size & Dimension : {{ $product->dimension }}</p></li>
                        <li><p>Material & Color : {{ $product->color }}</p></li>
                        <li><p>Category :</p><a href="{{ route('products', $product->category->id) }}">{{ $product->category->name }}</a></li>
                        <li><p>Share :</p>
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
                            <a href=""><i class="fa-brands fa-twitter"></i></a>&nbsp;&nbsp;
                            <a href=""><i class="fa-brands fa-telegram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @if($related_products->count() > 0)
        <div class="related_products">
            <div class="related_products_text">
                <h3 class="heading-sm">Related Products</h3>
            </div>
            <div class="related_products_items swiper">
                <div class="swiper-wrapper">
                    @foreach ($related_products as $product)
                    <div class="raw_items card_1 swiper-slide">
                        <div class="raw_items_image">
                            <img src="{{ asset('storage').'/'.$product->image }}" alt="{{ $product->name }} image" loading="lazy">
                            <div class="image_items_icon_box">
                                <a title="Read More" class="image_items_icon" href="{{ route('customer.login') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a title="Quick View" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-magnifying-glass"></i></a>
                                <a title="Add To Wishlist" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="raw_items_text">
                            <a class="heading-xs" href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                            {{-- @if ($product->dimension)
                                <p>Dimension: {{ $product->dimension }}</p>
                            @endif
    
                            @if ($product->color)
                                <p>Color/Material: {{ $product->color }}</p>
                            @endif --}}
                        </div>
                        <div class="card-footer">
                            <p class="price">{{ $product->rental_price }} <span class="font-bn">৳</span></p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
