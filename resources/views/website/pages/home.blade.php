@extends('website.layouts.app')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <meta name="title" content="Welcome to Maaevent.com - Your Ultimate Wedding Solution Provider in Bangladesh">
    <meta name="description" content="Discover the largest and most trusted wedding solution provider in Bangladesh. Maaevent.com offers a one-stop platform for wedding planning, connecting you with top vendors, ideas, and inspiration. Plan your dream wedding effortlessly.">
    <meta name="keywords" content="Bangladesh wedding, wedding planners, photographers, vendors, inspiration, wedding ideas, bridal services, wedding solutions">
    <meta name="author" content="Maa Event Management">

    <!-- Open Graph (og:) Tags -->
    <meta property="og:title" content="Maaevent.com - Your Wedding Planning Partner in Bangladesh">
    <meta property="og:description" content="Plan your perfect wedding with Maaevent.com, the premier wedding solution provider in Bangladesh. Find vendors, inspiration, and more for your special day.">
    <meta property="og:image" content="{{ asset('assets/website/img/about/about-1.jpg') }}">
    <meta property="og:url" content="https://www.maaevent.com">
    <meta property="og:type" content="website">

    <title>Welcome to Maaevent.com - Your Ultimate Wedding Solution Provider in Bangladesh</title>
@endsection

@section('nav')
    <x-nav :transparent="true" />
@endsection

@section('main-content')

    <!-- BANNER -->
    @section('top-logo')
    <div class="logo_top">
        <img src="{{ asset('assets/website/assets/img/logo.png') }}" alt="">
    </div>
    @endsection
    @section('banner')
        <!-- BENAR START HERE -->
        <div class="benar_box swiper">
            <div class="swiper-wrapper">
                <div class="benar_items swiper-slide">
                    <img src="{{ asset('./assets/website/assets/img/banner-slide1.jpg') }}" alt="">
                </div>
                <div class="benar_items swiper-slide">
                    <img src="{{ asset('./assets/website/assets/img/banner-slide2.jpg') }}" alt="">
                </div>
                <div class="benar_items swiper-slide">
                    <img src="{{ asset('./assets/website/assets/img/benar1.jpg') }}" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    @endsection
    <div class="aro_img">
        <!-- NEW IMG ADDD ************************************ **************************************************-->
    </div>

    <!-- EVENT -->
    <div class="event">
        <div class="custom_title1" style="margin-top: 2rem;">
            <h2 class="heading-xl">Maa Event Management<span class="border"></span></h2>
            <p class="para-lg desc">We are thrilled to offer a variety of events and gatherings for you to enjoy. Our goal is to provide a welcoming and enjoyable atmosphere where you can connect with others and make lasting memories.</p>
        </div>
        <div class="event_card_area">
            <div class="event_card">
                <img class="card_body_img" src="{{ asset('./assets/website/assets/img/the-wedding-bg-1.png') }}" alt="">
                <div class="card_img">
                    <img src="{{ asset('./assets/website/assets/img/desktop-wallpaper-ajf-wedding-event-management-nalan-sg-event-management.jpg') }}" alt="">
                </div>
                <div class="card_text">
                    <img src="{{ asset('./assets/website/assets/img/loveicon.png') }}" alt="" class="love_img">
                    <h2 class="heading-lg">Wedding Reception</h2>
                    <p class="para-md">We understand the significance of your special day and strive to make it truly unforgettable. Our elegant and versatile event spaces provide the perfect backdrop for your dream wedding reception.</p>
                    <a class="btn-grad-sm" href="#">View &nbsp;<i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="event_card">
                <img class="card_body_img" src="{{ asset('./assets/website/assets/img/the-wedding-bg-1.png') }}" alt="">
                <div class="card_img">
                    <img src="{{ asset('./assets/website/assets/img/the-wedding-party.jpg') }}" alt="">
                </div>
                <div class="card_text">
                    <img src="{{ asset('./assets/website/assets/img/loveicon.png') }}" alt="" class="love_img">
                    <h2 class="heading-lg">Lifestyle Occasions</h2>
                    <p class="para-md">We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.</p>
                    <a class="btn-grad-sm" href="#">View &nbsp;<i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="event_card">
                <img class="card_body_img" src="{{ asset('./assets/website/assets/img/the-wedding-bg-1.png') }}" alt="">
                <div class="card_img">
                    <img src="{{ asset('./assets/website/assets/img/home_corporate.jpg') }}" alt="">
                </div>
                <div class="card_text">
                    <img src="{{ asset('./assets/website/assets/img/loveicon.png') }}" alt="" class="love_img">
                    <h2 class="heading-lg">Corporate Events</h2>
                    <p class="para-md">We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.</p>
                    <a class="btn-grad-sm" href="#">View &nbsp;<i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- CATERING -->
    <div class="catering">
        <div class="catering_slider left_side">
            <div class="img_area img_left swiper">
                <div class="swiper-wrapper">
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering1.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/Bor-dish-02-maaevent.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/Bor-dish-01-maaevent.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/Platter-maaevent.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/Kacchi.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="custom_title2">
                <h2 class="heading-lg">Catering</h2>
                <p class="para-md">Welcome to our catering services, where we turn your special moments into culinary masterpieces. Our team of passionate chefs and experienced event planners is dedicated to creating a memorable dining experience for you and your guests.</p>
                <a class="btn-grad" href="#">VIEW</a>
            </div>
        </div>
        <div class="catering_slider right_side">
            <div class="img_area img_right swiper">
                <div class="swiper-wrapper">
                <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/images (1).jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/71-650x330.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/images.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/IMG_1684.JPG') }}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="custom_title2">
                <h2 class="heading-lg">Book Your Venue</h2>
                <p class="para-md">Looking for the perfect venue for your next event? Let our event management company take care of it! With our expertise &amp; extensive network of venues, we’ll help you find the ideal space to bring your event to life!</p>
                <a class="btn-grad" href="#">VIEW</a>
            </div>
        </div>
    </div>

    <!-- NEW Dive ADD -->
    <div class="backGtitle">
        <h2>Counting down for the Special Day</h2>
    </div>
     <!-- NEW Dive END -->

    <!-- CLIENTS -->
    <div class="clients">

        <div class="custom_title1">
            <h2 class="heading-xl">Our Happy Clients!</h2>
        </div>
        <!--  -->
        <div id="client_slider" class="owl-carousel">
            <div class="clients_card">
                <div class="ca_img">
                    <img src="{{ asset('./assets/website/assets/img/client-default.png') }}" alt="">
                </div>

                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Tayba Jannat</h4>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
            </div>
            <div class="clients_card">
                <div class="ca_img">
                    <img src="{{ asset('./assets/website/assets/img/client-default.png') }}" alt="">
                </div>

                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Tayba Jannat</h4>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
            </div>
            <div class="clients_card">
                <div class="ca_img">
                    <img src="{{ asset('./assets/website/assets/img/client-default.png') }}" alt="">
                </div>

                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Tayba Jannat</h4>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
            </div>
            <div class="clients_card">
                <div class="ca_img">
                    <img src="{{ asset('./assets/website/assets/img/client-default.png') }}" alt="">
                </div>

                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Tayba Jannat</h4>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
            </div>
            <div class="clients_card">
                <div class="ca_img">
                    <img src="{{ asset('./assets/website/assets/img/client-default.png') }}" alt="">
                </div>

                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Tayba Jannat</h4>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
            </div>
            <div class="clients_card">
                <div class="ca_img">
                    <img src="{{ asset('./assets/website/assets/img/client-default.png') }}" alt="">
                </div>

                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Tayba Jannat</h4>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
            </div>
        </div>
    </div>

    <!-- VIDEOS  -->
    <div class="video">
        <div class="custom_title1">
            <h2 class="heading-xl">Our Videos</h2>
            <p class="desc para-lg">Here you’ll find videos that highlight some of our most popular rental products, including tents, tables and chairs, audio and visual equipment, and more. You’ll see our equipment being set up and used at real events, giving you a better understanding of what to expect when you rent from us.</p>
        </div>
        <div class="videos">
            <div class="items">
                <iframe src="https://www.youtube.com/embed/FT6QMCRqS2E" title="Wedding Ceremony of Sabbir &amp; Anika | Date : 06-10-2022 |Venue: Sena Malancha" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
            </div>
            <div class="items">
                <iframe src="https://www.youtube.com/embed/YJXGwt_LCa8" title="Ahona &amp; Murad's Holud | 8th September, 2022 | Army Officers Club |" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
            </div>
            <div class="items">
                <iframe src="https://www.youtube.com/embed/-B_yj0dat-4" title="Wedding Reception of Razin &amp; Naomi | 17-02-2022 | MP Hostel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
            </div>
            <div class="items">
                <iframe src="https://www.youtube.com/embed/aksGnMvngn8" title="Reception of Laiba &amp; Shovon | Date : 07/08/2022 | Venue: Army Golf Garden , Dhaka Canton." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
            </div>
            <div class="items">
                <iframe src="https://www.youtube.com/embed/YMkEuHk-JDI" title="Wedding Reception of Fema &amp; Showrov | Date : 27/07/2022 | Venue: MP Hostel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
            </div>
            <div class="items">
                <iframe src="https://www.youtube.com/embed/xtqU9PLQ3no" title="Wedding Reception of Athina &amp; Rahil | Date : 25/07/2022 | Venue: Hotel Pan Pacific Sonargaon, Dhaka" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="btn_area">
            <a class="btn-grad" href="#">VIEW</a>
        </div>
    </div>


    <!-- FOLLOWUS -->
    <div class="followUs">
        <div class="custom_title2">
            <h2 class="heading-lg">Follow &amp; Review Us</h2>
            <p class="para-md">We understand the significance of your special day and strive to make it truly unforgettable. Our elegant and versatile event spaces provide the perfect backdrop for your dream wedding reception.</p>
        </div>
        <div class="social_btn_lg">
            <a class="Facebook" href="#" style="margin-right: 10px"><i class="fa-brands fa-facebook"></i>&nbsp; Review</a>
            <a class="btn-grad" href="#"><i class="fa-brands fa-google"></i>&nbsp; Review</a>
        </div>
    </div>
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
