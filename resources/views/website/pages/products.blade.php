@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>Products</title>
@endsection

@section('main-content')
    <div class="main_page_wrapper">
        <!-- Container_section -->
        <div class="product_container">
            <div class="raw">
                <div class="raw_sidebar">
                    <div class="filter_price">
                        <p>FILTER BY PRICE</p>
                        <div class="price_box">
                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range_input">
                                <input type="range" class="range_min" min="0" max="10000" value="0" step="100">
                                <input type="range" class="range_max" min="0" max="10000" value="10000" step="100">
                            </div>
                            <div class="price_input">
                                <form action="">
                                    <div class="formbox">
                                        <label for="">Price:</label>
                                        <span>৳</span>
                                        <input name="low_price" type="text" value="20">
                                        <span>-</span>
                                        <span>৳</span>
                                        <input name="high_price" type="text" value="1500">
                                    </div>
                                    <button class="filter_btn" type="submit">FILTER</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="logistics_rental">
                        <p>LOGISTICS RENTAL</p>
                        <ul class="rental_box">
                            @foreach ($categories as $category)
                            @if ($loop->first)
                                @continue
                            @endif
                            <li class="rental_items">
                                <a href="{{ route('products', $category->id) }}">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="raw_items_box">
                    <div class="raw_items_top">
                        <div class="select_items">
                            <select name="" id="">
                                <option value="">Default sorting</option>
                                <option value="">Sort b popularity</option>
                                <option value="">Sort by latest</option>
                                <option value="">Sort by price: low to high</option>
                                <option value="">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="raw_items_bottom">
                        <div class="raw_items_bottom_box">
                            @forelse ($products as $product)
                            <div class="raw_items card_1">
                                <div class="raw_items_image">
                                    <div class="image_sec">
                                        <img src="{{ asset('storage').'/'.$product->image }}" alt="">
                                    </div>
                                    <div class="image_items_icon_box">
                                        <a title="Read More" class="image_items_icon" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a title="Quick View" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        <a title="Add To Wishlist" class="image_items_icon" href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="raw_items_text">
                                    <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                                    <span>৳ {{ $product->rental_price }}</span>
                                </div>
                            </div>
                            @empty
                            <div class="raw_items card_1">
                                No Products Found
                            </div>
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
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection