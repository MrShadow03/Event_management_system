@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>Cart</title>
@endsection

@section('main-content')
<div class="main_cart_section">
    <div class="cart_section">
        <div class="cart_section_top card_2">
            <div class="cart_image">
                <img src="{{ asset('./assets/website/assets/img/items_image.jpg') }}" alt="" width="100%" class="zoom">
            </div>
            <div class="cart_text">
                <p>Black Georgette</p>
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
        <div class="cart_section_mid">
            <a href="javascript:void(0);">SHIPPING &amp; DELIVERY</a>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="related_products">
            <div class="related_products_text">
                <h3>RELATED PRODUCTS</h3>
            </div>
            <div class="related_products_items owl-carousel">
                <div class="raw_items card_1">
                    <div class="raw_items_image">
                        <div class="image_sec">
                            <img src="{{ asset('./assets/website/assets/img/items_image.jpg') }}" alt="">
                        </div>
                        <div class="image_items_icon_box">
                            <a title="Read More" class="image_items_icon" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                            <a title="Quick View" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <a title="Add To Wishlist" class="image_items_icon" href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="raw_items_text">
                        <p>Banyan Tree</p>
                        <span>৳ 500.00</span>
                    </div>
                </div>
                <div class="raw_items card_1">
                    <div class="raw_items_image">
                        <div class="image_sec">
                            <img src="{{ asset('./assets/website/assets/img/items_image.jpg') }}" alt="">
                        </div>
                        <div class="image_items_icon_box">
                            <a title="Read More" class="image_items_icon" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                            <a title="Quick View" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <a title="Add To Wishlist" class="image_items_icon" href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="raw_items_text">
                        <p>Banyan Tree</p>
                        <span>৳ 500.00</span>
                    </div>
                </div>
                <div class="raw_items card_1">
                    <div class="raw_items_image">
                        <div class="image_sec">
                            <img src="{{ asset('./assets/website/assets/img/items_image.jpg') }}" alt="">
                        </div>
                        <div class="image_items_icon_box">
                            <a title="Read More" class="image_items_icon" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                            <a title="Quick View" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <a title="Add To Wishlist" class="image_items_icon" href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="raw_items_text">
                        <p>Banyan Tree</p>
                        <span>৳ 500.00</span>
                    </div>
                </div>
                <div class="raw_items card_1">
                    <div class="raw_items_image">
                        <div class="image_sec">
                            <img src="{{ asset('./assets/website/assets/img/items_image.jpg') }}" alt="">
                        </div>
                        <div class="image_items_icon_box">
                            <a title="Read More" class="image_items_icon" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                            <a title="Quick View" class="image_items_icon" href="javascript:void(0);"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <a title="Add To Wishlist" class="image_items_icon" href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="raw_items_text">
                        <p>Banyan Tree</p>
                        <span>৳ 500.00</span>
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
