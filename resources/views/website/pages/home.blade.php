@extends('website.layouts.app')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>Maa Event Management</title>
    <meta name="description" content="Maaevent.com is the Largest & Most Loved 360 degree wedding solution provider’s platform in Bangladesh. Starting in 2021, we are running our operations with a view to serving our clients as an all-in-one purchasing platform.">
    <meta name="keywords" content="Event management, catering, meeting">
    <meta name="author" content="Maa Event Management">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Largest & Most Loved wedding solution provider’s platform in Bangladesh.">
    <meta property="og:description" content="Maaevent.com is the Largest & Most Loved 360 degree wedding solution provider’s platform in Bangladesh. Starting in 2021, we are running our operations with a view to serving our clients as an all-in-one purchasing platform.">
    <meta property="og:image" content="{{ asset('assets/website/img/about/about-1.jpg') }}">
    <meta property="og:url" content="https://www.maaevent.com">
    <meta property="og:type" content="website">
@endsection

@section('main-content')

    <!-- BANNER -->
    @section('top-logo')
    <div class="logo_top">
        <img src="{{ asset('assets/website/assets/img/Logo.png') }}" alt="">
    </div>
    @endsection
    @section('banner')
        <!-- BENAR START HERE -->
        <div class="benar_box swiper">
            <div class="swiper-wrapper">
                <div class="benar_items swiper-slide">
                    <img src="{{ asset('./assets/website/assets/img/benar1.jpg') }}" alt="">
                </div>
                <div class="benar_items swiper-slide">
                    <img src="{{ asset('./assets/website/assets/img/Lifestyle.png') }}" alt="">
                </div>
                <div class="benar_items swiper-slide">
                    <img src="{{ asset('./assets/website/assets/img/catering.jpg') }}" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    @endsection
    <div class="aro_img">
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,60L80,55C160,50,320,40,480,45C640,50,800,70,960,70C1120,70,1280,50,1440,36.7C1600,23,1760,17,1920,25C2080,33,2240,57,2400,68.3C2560,80,2720,80,2880,66.7C3040,53,3200,27,3360,28.3C3520,30,3680,60,3840,65C4000,70,4160,50,4320,46.7C4480,43,4640,57,4800,60C4960,63,5120,57,5280,56.7C5440,57,5600,63,5760,55C5920,47,6080,23,6240,25C6400,27,6560,53,6720,55C6880,57,7040,33,7200,21.7C7360,10,7520,10,7680,23.3C7840,37,8000,63,8160,75C8320,87,8480,83,8640,75C8800,67,8960,53,9120,48.3C9280,43,9440,47,9600,40C9760,33,9920,17,10080,13.3C10240,10,10400,20,10560,23.3C10720,27,10880,23,11040,25C11200,27,11360,33,11440,36.7L11520,40L11520,100L11440,100C11360,100,11200,100,11040,100C10880,100,10720,100,10560,100C10400,100,10240,100,10080,100C9920,100,9760,100,9600,100C9440,100,9280,100,9120,100C8960,100,8800,100,8640,100C8480,100,8320,100,8160,100C8000,100,7840,100,7680,100C7520,100,7360,100,7200,100C7040,100,6880,100,6720,100C6560,100,6400,100,6240,100C6080,100,5920,100,5760,100C5600,100,5440,100,5280,100C5120,100,4960,100,4800,100C4640,100,4480,100,4320,100C4160,100,4000,100,3840,100C3680,100,3520,100,3360,100C3200,100,3040,100,2880,100C2720,100,2560,100,2400,100C2240,100,2080,100,1920,100C1760,100,1600,100,1440,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z"></path></svg>
    </div>
    <div class="custom_title1">
        <h2>Maa Event Management<span class="border"></span></h2>
        <p class="desc">We are thrilled to offer a variety of events and gatherings for you to enjoy. Our goal is to provide a welcoming and enjoyable atmosphere where you can connect with others and make lasting memories.</p>
    </div>
    <!-- EVENT -->
    <div class="event">
       <div class="eventCard_md">
            <div class="img_area">
                <img src="{{ asset('./assets/website/assets/img/home_wedding.jpg') }}" alt="">
            </div>
            <div class="custom_title2">
                <h2>Wedding Reception</h2>
                <p>We understand the significance of your special day and strive to make it truly unforgettable. Our elegant and versatile event spaces provide the perfect backdrop for your dream wedding reception.</p>
                <a class="btn-grad" href="#">View &nbsp;<i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
       </div>
       <div class="eventCard_sm">
            <div class="custom_title2">
                <h2>Lifestyle Occasions</h2>
                <p>We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.</p>
                <a class="btn-grad" href="#">VIEW &nbsp;<i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
            <div class="img_area">
                <img src="{{ asset('./assets/website/assets/img/home_event.jpg') }}" alt="">
            </div>
        </div>

        <div class="eventCard_sm">
            <div class="img_area">
                <img src="{{ asset('./assets/website/assets/img/home_corporate.jpg') }}" alt="">
            </div>
            <div class="custom_title2">
                <h2>Corporate Events</h2>
                <p>We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.</p>
                <a class="btn-grad" href="#">VIEW &nbsp;<i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>
    </div>

    <!-- CATERING -->
    <div class="catering">
        <div class="catering_slider left_side">
            <div class="img_area img_left swiper">
                <div class="swiper-wrapper">
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="custom_title2">
                <h2>Catering</h2>
                <p>Welcome to our catering services, where we turn your special moments into culinary masterpieces. Our team of passionate chefs and experienced event planners is dedicated to creating a memorable dining experience for you and your guests.</p>
                <a class="btn-grad" href="#">VIEW</a>
            </div>
        </div>
        <div class="catering_slider right_side">
            <div class="img_area img_right swiper">
                <div class="swiper-wrapper">
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering.jpg') }}" alt="">
                    </div>
                    <div class="img swiper-slide">
                        <img src="{{ asset('./assets/website/assets/img/catering.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="custom_title2">
                <h2>Book Your Venue</h2>
                <p>Looking for the perfect venue for your next event? Let our event management company take care of it! With our expertise &amp; extensive network of venues, we’ll help you find the ideal space to bring your event to life!</p>
                <a class="btn-grad" href="#">VIEW</a>
            </div>
        </div>
    </div>

    <!-- VIDEOS  -->
    <div class="video">
        <div class="custom_title1">
            <h2>Our Videos</h2>
            <p class="desc">Here you’ll find videos that highlight some of our most popular rental products, including tents, tables and chairs, audio and visual equipment, and more. You’ll see our equipment being set up and used at real events, giving you a better understanding of what to expect when you rent from us.</p>
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

    <!-- CLIENTS -->
    <div class="clients">
        <div class="custom_title1">
            <h2>Our Happy Clients!</h2>
        </div>
        <div id="client_slider" class="owl-carousel">
            <div class="clients_card">
                <img src="{{ asset('./assets/website/assets/img/Logo.png') }}" alt="">
                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
                <h4>Tayba Jannat</h4>
            </div>
            <div class="clients_card">
                <img src="{{ asset('./assets/website/assets/img/Logo.png') }}" alt="">
                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
                <h4>Tayba Jannat</h4>
            </div>
            <div class="clients_card">
                <img src="{{ asset('./assets/website/assets/img/Logo.png') }}" alt="">
                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
                <h4>Tayba Jannat</h4>
            </div>
            <div class="clients_card">
                <img src="{{ asset('./assets/website/assets/img/Logo.png') }}" alt="">
                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
                <h4>Tayba Jannat</h4>
            </div>
            <div class="clients_card">
                <img src="{{ asset('./assets/website/assets/img/Logo.png') }}" alt="">
                <div class="reting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Amr coto meye r birthday te apnader decoration r service niyeci sobie khub sondhor boleca asolei Sondhor hoyeca.</p>
                <h4>Tayba Jannat</h4>
            </div>
        </div>
    </div>

    <!-- FOLLOWUS -->
    <div class="followUs">
        <div class="custom_title2">
            <h2>Follow &amp; Review Us</h2>
            <p>We understand the significance of your special day and strive to make it truly unforgettable. Our elegant and versatile event spaces provide the perfect backdrop for your dream wedding reception.</p>
            <div class="social_btn_sm">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <div class="social_btn_lg">
            <a class="btn-grad" href="#" style="margin-right: 10px"><i class="fa-brands fa-facebook"></i>&nbsp; Review</a>
            <a class="btn-grad" href="#"><i class="fa-brands fa-google"></i>&nbsp; Review</a>
        </div>
    </div>
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
