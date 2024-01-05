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
                @foreach ($banners  as $banner)
                <div class="benar_items swiper-slide">
                    <img src="{{ asset('storage').'/'.$banner->image }}" alt="banner_{{ $banner->title }}">
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    @endsection

    <!-- EVENT -->
    <div class="event">
        @if ($sections->where('name', 'about')->first()->pivot->status == 1)
        <div class="custom_title1" style="margin-top: 2rem;">
            <h2 class="heading-xl">{{ $sections->where('name', 'about')->first()->heading }}<span class="border"></span></h2>
            <p class="para-lg desc">{{ $sections->where('name', 'about')->first()->description }}</p>
        </div>
        @endif

        <div class="event_card_area">
            @if ($sections->where('name', 'event_cards')->first()->pivot->status == 1)
            @foreach ($event_cards as $card)
                <div class="event_card">
                    <img class="card_body_img" src="{{ asset('./assets/website/assets/img/the-wedding-bg-1.png') }}" alt="">
                    <div class="card_img">
                        <img 
                        src="{{ asset('storage').'/'.$card->image }}" 
                        alt="">
                    </div>
                    <div class="card_text">
                        <img src="{{ asset('./assets/website/assets/img/loveicon.png') }}" alt="" class="love_img">
                        <h2 class="heading-lg">{{ $card->title }}</h2>
                        <p class="para-md">{{ $card->description }}</p>
                        <a class="btn-grad-sm" href="#">View &nbsp;<i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>

    @if ($sections->where('name', 'services')->first()->pivot->status == 1)
    <!-- CATERING -->
    <div class="catering">
        @if ($services->where('name', 'slot-1')->first()->status == 1)
        <div class="catering_slider left_side">
            <div class="img_area img_left swiper">
                <div class="swiper-wrapper">
                    @foreach ($services->where('name', 'slot-1')->first()->images as $image)
                    <div class="img swiper-slide">
                        <img 
                        src="{{ asset('storage').'/'.$image->path }}"
                        alt="service_{{ $image->id }}"
                        >
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="custom_title2">
                <h2 class="heading-lg">{{ $services->where('name', 'slot-1')->first()->title }}</h2>
                <p class="para-md">{{ $services->where('name', 'slot-1')->first()->description }}</p>
                <a class="btn-grad" href="#">VIEW</a>
            </div>
        </div>
        @endif
        @if ($services->where('name', 'slot-2')->first()->status == 1)
        <div class="catering_slider right_side">
            <div class="img_area img_right swiper">
                <div class="swiper-wrapper">
                    @foreach ($services->where('name', 'slot-2')->first()->images as $image)
                    <div class="img swiper-slide">
                        <img 
                        src="{{ asset('storage').'/'.$image->path }}"
                        alt="service_{{ $image->id }}"
                        >
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="custom_title2">
                <h2 class="heading-lg">{{ $services->where('name', 'slot-2')->first()->title }}</h2>
                <p class="para-md">{{ $services->where('name', 'slot-2')->first()->description }}</p>
                <a class="btn-grad" href="#">VIEW</a>
            </div>
        </div>
        @endif
    </div>
    @endif

    @if ($sections->where('name', 'general_CTA')->first()->pivot->status == 1)
    <!-- NEW Dive ADD -->
    <div class="backGtitle">
        <h2>Counting down for the Special Day</h2>
    </div>
     <!-- NEW Dive END -->
     @endif

    <!-- CLIENTS -->
    @if ($sections->where('name', 'feedbacks')->first()->pivot->status == 1)
    <div class="clients">
        <div class="custom_title1">
            <h2 class="heading-xl">{{ $sections->where('name', 'feedbacks')->first()->heading }}</h2>
        </div>
        <!--  -->
        <div id="client_slider" class="owl-carousel">
            @foreach ($feedbacks as $feedback)
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
                <h4>{{ $feedback->name }}</h4>
                <p class="font-bn">{{ $feedback->feedback }}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    @if ($sections->where('name', 'video_gallery')->first()->pivot->status == 1)
    <!-- VIDEOS  -->
    <div class="video">
        <div class="custom_title1">
            <h2 class="heading-xl">Video Gallery</h2>
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
    @endif

    @if ($sections->where('name', 'review_CTA')->first()->pivot->status == 1)
    <!-- FOLLOWUS -->
    <div class="followUs">
        <div class="custom_title2">
            <h2 class="heading-lg">{{ $sections->where('name', 'review_CTA')->first()->heading }}</h2>
            <p class="para-md">{{ $sections->where('name', 'review_CTA')->first()->description }}</p>
        </div>
        <div class="social_btn_lg">
            <a class="Facebook" href="#" style="margin-right: 10px"><i class="fa-brands fa-facebook"></i>&nbsp; Review</a>
            <a class="btn-grad" href="#"><i class="fa-brands fa-google"></i>&nbsp; Review</a>
        </div>
    </div>
    @endif
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
