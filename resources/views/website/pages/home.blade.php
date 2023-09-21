@extends('website.layouts.app')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>Home | Construction</title>
    <meta name="description" content="Leading Construction Firm in Barishal, Bangladesh. Specializing in Building Projects, Infrastructure, and more.">
    <meta name="keywords" content="construction firm, Barishal, Bangladesh, building projects, infrastructure">
    <meta name="author" content="PepploBD">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Construction Firm in Barishal, Bangladesh">
    <meta property="og:description" content="We are a leading construction firm based in Barishal, Bangladesh, specializing in various building projects and infrastructure development.">
    <meta property="og:image" content="{{ asset('assets/website/img/about/about-1.jpg') }}">
    <meta property="og:url" content="https://www.construction.com">
    <meta property="og:type" content="website">
@endsection

@section('main-content')
    <!-- Banner Area Start -->
    <div class="banner__one swiper banner-one-slider">
        <div class="swiper-wrapper">
            <div class="banner__one-image swiper-slide" data-background="{{ asset('assets/website/img/banner/banner-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="banner__one-content">
                                <span data-animation="fadeInUp" data-delay=".4s">Welcome to Conbix</span>
                                <h1 data-animation="fadeInUp" data-delay=".7s">Business consulting advice</h1>
                                <div class="banner__one-content-button" data-animation="fadeInUp" data-delay="1s">
                                    <div class="banner__one-content-button-item">
                                        <a class="btn-one" href="about.html">Read More<i class="far fa-chevron-double-right"></i></a>
                                    </div>
                                    <div class="banner__one-content-video-icon">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-four-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner__one-image swiper-slide" data-background="{{ asset('assets/website/img/banner/banner-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="banner__one-content">
                                <span data-animation="fadeInUp" data-delay=".4s">Welcome to Conbix</span>
                                <h1 data-animation="fadeInUp" data-delay=".7s">Inspire experience program</h1>
                                <div class="banner__one-content-button" data-animation="fadeInUp" data-delay="1s">
                                    <div class="banner__one-content-button-item">
                                        <a class="btn-one" href="about.html">Read More<i class="far fa-chevron-double-right"></i></a>
                                    </div>
                                    <div class="banner__one-content-video-icon">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="banner-four-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- About Area Start -->
    <div class="about__one dark__image section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="about__one-left">
                        <div class="about__one-left-image">
                            <img class="one" src="{{ asset('assets/website/img/about/about-1.jpg') }}" alt="">
                            <img class="two" src="{{ asset('assets/website/img/about/about-2.jpg') }}" alt="">
                        </div>
                        <div class="about__one-left-experience">
                            <h1><span class="counter">32</span>+</h1>
                            <h6>Years Experience Our Company</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about__one-right">
                        <div class="about__one-right-title">
                            <span class="subtitle-one">About Company</span>
                            <h2>our skilled Team grow your business.</h2>
                            <p>Aliquam volutpat diam a orci euismod ornare. Suspendisse quis massa justo. Suspendisse tortor lacus, tincidunt ut ex a, pretium lobortis sapien. Vestibulum rutrum pharetra ex,</p>
                        </div>
                        <div class="about__one-right-btn">
                            <div>
                                <a class="btn-one" href="about.html">Discover More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                            <div class="about__one-right-btn-author">
                                <div class="about__one-right-btn-author-avatar">
                                    <img src="{{ asset('assets/website/img/avatar/avatar-1.jpg') }}" alt="">
                                </div>
                                <div class="about__one-right-btn-author-name">
                                    <span class="text-one">Nguyen, Shane</span>
                                    <h6>Founder CEO</h6>
                                </div>
                            </div>
                        </div>
                        <div class="about__one-right-bottom">
                            <div class="about__one-right-bottom-list">
                                <span><i class="far fa-check"></i>Performing market research.</span>
                                <span><i class="far fa-check"></i>Providing information to a client.</span>
                                <span><i class="far fa-check"></i>Strategic planning.</span>
                            </div>
                            <div class="about__one-right-bottom-experience">
                                <h3><span class="counter">150</span>+</h3>
                                <h6>Expert Team members</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="about__one-shape-1 dark-n" src="{{ asset('assets/website/img/shape/about-1.png') }}" alt="">
        <img class="about__one-shape-1 light-n" src="{{ asset('assets/website/img/shape/about-1-dark.png') }}" alt="">
        <img class="about__one-shape-2 dark-n" src="{{ asset('assets/website/img/shape/about-2.png') }}" alt="">
        <img class="about__one-shape-2 light-n" src="{{ asset('assets/website/img/shape/about-2-dark.png') }}" alt="">
    </div>
    <!-- About Area End -->
    <!-- Services Area Start -->
    <div class="services__one section-padding pt-0">
        <div class="container">
            <div class="row align-items-end mb-70">
                <div class="col-xl-7 col-lg-8 lg-mb-30">
                    <div class="services__one-title lg-t-center">
                        <span class="subtitle-one">Our Solutions</span>
                        <h2>Consulting Services</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 t-right lg-t-center">
                    <a class="btn-one" href="services-two.html">All Services<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
                    <div class="services__one-item">
                        <div class="services__one-item-icon">
                            <img src="{{ asset('assets/website/img/icon/services-1.png') }}" alt="">
                            <div class="services__one-item-icon-one">
                                <img src="{{ asset('assets/website/img/icon/services-11.png') }}" alt="">
                            </div>
                        </div>
                        <h4><a href="services-right-sidebar.html">business model</a></h4>
                        <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                        <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                    <div class="services__one-item">
                        <div class="services__one-item-icon">
                            <img src="{{ asset('assets/website/img/icon/services-2.png') }}" alt="">
                            <div class="services__one-item-icon-one">
                                <img src="{{ asset('assets/website/img/icon/services-22.png') }}" alt="">
                            </div>
                        </div>
                        <h4><a href="services-right-sidebar.html">Digital Consulting</a></h4>
                        <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                        <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                    <div class="services__one-item">
                        <div class="services__one-item-icon">
                            <img src="{{ asset('assets/website/img/icon/services-3.png') }}" alt="">
                            <div class="services__one-item-icon-one">
                                <img src="{{ asset('assets/website/img/icon/services-33.png') }}" alt="">
                            </div>
                        </div>
                        <h4><a href="services-right-sidebar.html">audit marketing</a></h4>
                        <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                        <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__one-item">
                        <div class="services__one-item-icon">
                            <img src="{{ asset('assets/website/img/icon/services-4.png') }}" alt="">
                            <div class="services__one-item-icon-one">
                                <img src="{{ asset('assets/website/img/icon/services-44.png') }}" alt="">
                            </div>
                        </div>
                        <h4><a href="services-right-sidebar.html">Human Resource</a></h4>
                        <p>Proin pulvinar eu sem eu vehicula. Integer urna libero, semper</p>
                        <a class="simple-btn-2" href="services-right-sidebar.html">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- Cta Area Start -->
    <div class="cta__area">
        <div class="container">
            <div class="row cta__area-bg align-items-center">
                <div class="col-xxl-5 col-xl-4">
                    <div class="cta__area-title">
                        <h2>Get Free Quote</h2>
                        <span class="text-two">Perfect solution for your company.</span>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-8 pr-0">
                    <div class="cta__area-form">
                        <form>
                            <div class="cta__area-form-item md-mb-30">
                                <input type="text" name="name" placeholder="Full Name" required="">
                            </div>
                            <div class="cta__area-form-item md-mb-30">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="cta__area-form-item">
                                <button class="btn-four" type="submit">Get Quote<i class="far fa-chevron-double-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Area End -->
    <!-- Experience Area Start -->
    <div class="experience__area dark__image section-padding">
        <img class="experience__area-shape dark-n" src="{{ asset('assets/website/img/shape/experience.png') }}" alt="">
        <img class="experience__area-shape light-n" src="{{ asset('assets/website/img/shape/experience-dark.png') }}" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="experience__area-image">
                        <img class="experience__area-image-shape left-right-animate" src="{{ asset('assets/website/img/shape/dots.png') }}" alt="">
                        <div class="experience__area-image-item">
                            <img src="{{ asset('assets/website/img/pages/experience-1.jpg') }}" alt="">
                        </div>
                        <div class="experience__area-image-item mt-65">
                            <img src="{{ asset('assets/website/img/pages/experience-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="experience__area-right">
                        <div class="experience__area-right-title">
                            <span class="subtitle-one">Brand Success</span>
                            <h2>Empowering Brand Growth Together</h2>
                            <p>Phasellus vel sollicitudin velit. Fusce consequat pretium ligula vel aliquam. Vestibulum molestie luctus sapien et euismod. Cras convallis, purus in elementum lacinia,</p>
                        </div>
                        <div class="experience__area-right-skill">
                            <div class="experience__area-right-skill-item">
                                <div class="experience__area-right-skill-item-content">
                                    <span class="text-two">Business Consulting</span>
                                    <span class="experience__area-right-skill-item-count text-two"><span class="counter">80</span>%</span>
                                </div>
                                <div class="experience__area-right-skill-item-inner">
                                    <div class="experience__area-right-skill-item-bar" data-width="80"></div>
                                </div>
                            </div>
                            <div class="experience__area-right-skill-item mt-20">
                                <div class="experience__area-right-skill-item-content">
                                    <span class="text-two">Human Resource</span>
                                    <span class="experience__area-right-skill-item-count text-two"><span class="counter">90</span>%</span>
                                </div>
                                <div class="experience__area-right-skill-item-inner">
                                    <div class="experience__area-right-skill-item-bar" data-width="90"></div>
                                </div>
                            </div>
                        </div>
                        <a class="btn-two" href="request-quote.html">Get Consulting<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Experience Area End -->
    <!-- Portfolio Area Start -->
    <div class="portfolio__area dark__image section-padding pb-0">
        <div class="container-fluid p-0">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="portfolio__area-title t-center">
                        <span class="subtitle-one">Company Case Study</span>
                        <h2>Our Consulting Success</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper portfolio__area-slider">
                        <div class="swiper-wrapper">
                            <div class="portfolio__area-item swiper-slide">
                                <img src="{{ asset('assets/website/img/portfolio/portfolio-1.jpg') }}" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Business strategy</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="{{ asset('assets/website/img/icon/up-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__area-item swiper-slide">
                                <img src="{{ asset('assets/website/img/portfolio/portfolio-2.jpg') }}" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Digital Consulting</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="{{ asset('assets/website/img/icon/up-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__area-item swiper-slide">
                                <img src="{{ asset('assets/website/img/portfolio/portfolio-3.jpg') }}" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Human Resource</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="{{ asset('assets/website/img/icon/up-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__area-item swiper-slide">
                                <img src="{{ asset('assets/website/img/portfolio/portfolio-4.jpg') }}" alt="">
                                <div class="portfolio__area-item-content">
                                    <div class="portfolio__area-item-content-title">
                                        <h4><a href="project-single.html">Business Consulting</a></h4>
                                        <span class="text-eight">Conbix Agency</span>
                                    </div>
                                    <div class="portfolio__area-item-content-icon">
                                        <a href="project-single.html"><img src="{{ asset('assets/website/img/icon/up-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial__area section-padding">
        <img class="testimonial__area-shape dark-n" src="{{ asset('assets/website/img/shape/testimonial.png') }}" alt="">
        <img class="testimonial__area-shape light-n" src="{{ asset('assets/website/img/shape/testimonial-dark.png') }}" alt="">
        <div class="container">
            <div class="row mb-70 align-items-end">
                <div class="col-xl-8 col-lg-8 lg-mb-30">
                    <div class="testimonial__area-title lg-t-center">
                        <span class="subtitle-one">Real Client Stories</span>
                        <h2>Customer Experiences</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="testimonial__area-button t-right lg-t-center">
                        <div class="testimonial__area-button-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                        <div class="testimonial__area-button-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper testimonial__area-slider">
                        <div class="swiper-wrapper">
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="{{ asset('assets/website/img/avatar/avatar-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Flores, Juanita</h5>
                                        <span class="text-eight">Ceo Founder</span>
                                    </div>
                                </div>
                                <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="{{ asset('assets/website/img/avatar/avatar-2.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Cooper, Kristin</h5>
                                        <span class="text-eight">Co Founder</span>
                                    </div>
                                </div>
                                <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__area-item swiper-slide">
                                <div class="testimonial__area-item-client">
                                    <div class="testimonial__area-item-icon">
                                        <i class="fal fa-quote-right"></i>
                                    </div>
                                    <div class="testimonial__area-item-client-image">
                                        <img src="{{ asset('assets/website/img/avatar/avatar-3.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial__area-item-client-title">
                                        <h5>Johnsie Jock</h5>
                                        <span class="text-eight">sr. Designer</span>
                                    </div>
                                </div>
                                <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat.</p>
                                <div class="testimonial__area-item-reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Get In Touch Start End -->
    <div class="getIn__touch section-padding" data-background="assets/img/pages/getInTouch.jpg">
        <img class="getIn__touch-shape left-right-animate2" src="{{ asset('assets/website/img/shape/getInTouch.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 lg-mb-30">
                    <div class="getIn__touch-left">
                        <div class="getIn__touch-left-title">
                            <span class="subtitle-one">Get In Touch</span>
                            <h2>Free Consultation</h2>
                        </div>
                        <div class="getIn__touch-left-form">
                            <form action="#">
                                <div class="mt-25">
                                    <input type="text" name="name" placeholder="Full Name" required="required">
                                </div>
                                <div class="mt-25">
                                    <input type="email" name="email" placeholder="Email Address" required="required">
                                </div>
                                <div class="mt-25">
                                    <input type="text" name="subject" placeholder="Subject" required="required">
                                </div>
                                <div class="mt-25">
                                    <button class="btn-one" type="submit">Free Consulting</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="getIn__touch-right">
                        <div class="getIn__touch-right-title">
                            <h2>We serving 30% Of Global 600 Companies</h2>
                            <p>Aenean a felis consequat, varius orci ut, varius metus. Donec iaculis leo turpis, vitae sagittis massa luctus feugiat. Donec vel sodales dui,</p>
                        </div>
                        <div class="getIn__touch-right-bottom">
                            <div class="getIn__touch-right-bottom-text">
                                <h4>client satisfaction in the globaly</h4>
                            </div>
                            <div class="getIn__touch-right-bottom-shape">
                                <img src="{{ asset('assets/website/img/icon/getInTouch.png') }}" alt="">
                            </div>
                            <div class="getIn__touch-right-bottom-image">
                                <ul>
                                    <li><img src="{{ asset('assets/website/img/avatar/avatar-7.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/website/img/avatar/avatar-5.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/website/img/avatar/avatar-6.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/website/img/avatar/avatar-4.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Area End -->
    <!-- Emargency Help Area Start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-5"></div>
            <div class="col-xl-7">
                <div class="help__area">
                    <div class="help__area-item">
                        <div class="help__area-item-icon icon-animation">
                            <i class="fal fa-phone-alt"></i>
                        </div>
                        <div class="help__area-item-info">
                            <span class="text-three">Emargency Help</span>
                            <h5><a href="tel:+012652689523">+012 652 689 523</a></h5>
                        </div>
                    </div>
                    <div class="help__area-item">
                        <div class="help__area-item-icon">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <div class="help__area-item-info">
                            <span class="text-three">Email drop Us</span>
                            <h5><a href="mailto:conbix@gmail.com">conbix@gmail.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emargency Help Area End -->
    <!-- Team Page Area Start -->
    <div class="team__area section-padding dark__image">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('assets/website/img/team/team-1.jpg') }}" alt="">
                            <div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                        <div class="team__area-item-content page">
                            <h5><a href="team-single.html">Courtney Henry</a></h5>
                            <span class="text-eight">Sr. Consultant</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('assets/website/img/team/team-2.jpg') }}" alt="">
                            <div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                        <div class="team__area-item-content page">
                            <h5><a href="team-single.html">Darrell Steward</a></h5>
                            <span class="text-eight">Sr. Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('assets/website/img/team/team-3.jpg') }}" alt="">
                            <div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                        <div class="team__area-item-content page">
                            <h5><a href="team-single.html">Guy Hawkins</a></h5>
                            <span class="text-eight">Jr. Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team__area-item">
                        <div class="team__area-item-image">
                            <img src="{{ asset('assets/website/img/team/team-8.jpg') }}" alt="">
                            <div class="team__area-item-image-icon page">
                                <div class="team__area-item-image-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                        <div class="team__area-item-content page">
                            <h5><a href="team-single.html">Ralph Edwards</a></h5>
                            <span class="text-eight">Jr. Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-xl-12 t-center">
                    <h6>Consulting With our Expert Team Members <a href="#">schedule meeting</a></h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Page Area End -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
