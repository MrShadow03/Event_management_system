@extends('website.layouts.app')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>About | Construction</title>
@endsection

@section('main-content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="{{ asset('assets/website/img/pages/page-banner.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>About</span>
                    <ul>
                        <li><a href="index.html">Home</a><span>|</span></li>
                        <li>Company About</li>
                    </ul>
                    <h1>Company About</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->
<!-- About Company Area Start -->
<div class="about__company section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{ asset('assets/website/img/about/about-7.jpg') }}" alt="">
                        <img src="{{ asset('assets/website/img/about/about-8.jpg') }}" alt="">
                    </div>
                    <div class="about__company-left-experience">
                        <h2><span class="counter">180</span>+</h2>
                        <h6>Get national Award</h6>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <span class="subtitle-one">About Our Company</span>
                        <h2>Find out more about our business consulting</h2>
                        <p>Fusce quis lacus laoreet, dignissim quam eu, scelerisque tortor. Cras volutpat aliquet efficitur. Quisque dignissim justo ac erat tincidunt tristique. Curabitur id tortor ipsum. Suspendisse suscipit commodo turpis eu interdum</p>
                        <a class="btn-one" href="about.html">Read More<i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="about__one-shape-1" src="{{ asset('assets/website/img/shape/about-1.png') }}" alt="">
    <img class="about__one-shape-2" src="{{ asset('assets/website/img/shape/about-2.png') }}" alt="">
</div>
<!-- About Company Area End -->
<!-- About Company Two Area Start -->
<div class="company__two section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 lg-mb-30">
                <div class="company__two-left">
                    <div class="company__two-left-title">
                        <span class="subtitle-one">Who we are</span>
                        <h2>best company Especially in Business</h2>
                        <p>Aenean ac vulputate nibh, sed fringilla metus. Pellentesque porttitor felis eu nunc feugiat, nec condimentum magna ultricies. Nam vitae est accumsan nunc</p>
                    </div>
                    <div class="company__two-left-skill">
                        <div class="company__two-left-skill-item">
                            <h2><span class="counter">89</span>k</h2>
                            <h6>Project Completed Last Years</h6>
                        </div>
                        <div class="company__two-left-skill-item">
                            <h2><span class="counter">87</span>k</h2>
                            <h6>happy customer worldwide</h6>
                        </div>
                    </div>
                    <a class="btn-two" href="about.html">Discover more<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="company__two-right dark__image t-right">
                    <img class="img__full" src="{{ asset('assets/website/img/about/about-9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Company Two Area End -->
<!-- About Solution Area Start -->
<div class="about__solution" data-background="assets/website/img/about/about-solution.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8">
                <div class="about__solution-left xl-t-center">
                    <h2>implement solutions &amp; achieve goals.</h2>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="about__solution-right t-right xl-t-center">
                    <a class="btn-one" href="contact.html">Get Free Consultations<i class="far fa-chevron-double-right"></i></a>
                    <img class="about__solution-right-shape left-right-animate" src="{{ asset('assets/website/img/shape/about-solution.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Solution Area End -->
<!-- Company History Area Start-->
<div class="company__history section-padding">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-12">
                <div class="company__history-title t-center">
                    <span class="subtitle-one">Our History</span>
                    <h2>Our Company History</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="company__history-area dark__image">
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <img src="{{ asset('assets/website/img/about/history-1.jpg') }}" alt="">
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                <div class="company__history-area-item-right-content-date">
                                    <span>2003</span>
                                    <h5>Start Company</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-items">
                        <div class="company__history-area-items-left order-last order-lg-first">
                            <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                <div class="company__history-area-items-left-content-date">
                                    <span>2008</span>
                                    <h5>Opening Office</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                        <div class="company__history-area-items-right">
                            <div class="company__history-area-items-right-image">
                                <img src="{{ asset('assets/website/img/about/history-2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <div class="company__history-area-item-left-image">
                                <img src="{{ asset('assets/website/img/about/history-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                <div class="company__history-area-item-right-content-date">
                                    <span>2013</span>
                                    <h5>Improve Management</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-items">
                        <div class="company__history-area-items-left order-last order-lg-first">
                            <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                <div class="company__history-area-items-left-content-date">
                                    <span>2018</span>
                                    <h5>Open Research Team</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                        <div class="company__history-area-items-right">
                            <div class="company__history-area-items-right-image">
                                <img src="{{ asset('assets/website/img/about/history-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <div class="company__history-area-item-left-image">
                                <img src="{{ asset('assets/website/img/about/history-5.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content">
                                <div class="company__history-area-item-right-content-date">
                                    <span>2023</span>
                                    <h5>Winning Award</h5>
                                </div>
                                <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Company History Area End-->
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
            <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('assets/website/img/team/team-4.jpg') }}" alt="">
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
                        <h5><a href="team-single.html">Elton John</a></h5>
                        <span class="text-eight">Sr. Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('assets/website/img/team/team-5.jpg') }}" alt="">
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
                        <h5><a href="team-single.html">Thomas Girardi</a></h5>
                        <span class="text-eight">Sr. Consultant</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 lg-mb-30">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('assets/website/img/team/team-6.jpg') }}" alt="">
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
                        <h5><a href="team-single.html">Erika Jayne</a></h5>
                        <span class="text-eight">Sr. Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('assets/website/img/team/team-7.jpg') }}" alt="">
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
                        <h5><a href="team-single.html">Devon Lane</a></h5>
                        <span class="text-eight">Sr. Designer</span>
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
<!-- Faq Area Start -->
<div class="faq__area section-padding pt-0">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-12">
                <div class="faq__area-title t-center">
                    <span class="subtitle-one">Frequently Ask Questions</span>
                    <h2>What does Conbix do?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 xl-mb-10">
                <div class="faq-collapse">
                    <div class="faq-collapse-item">
                        <div class="faq-collapse-item-card">
                            <div class="faq-collapse-item-card-header">
                                <h6><span class="far fa-question-circle"></span>How do you manage consulting effectively?</h6>
                                <i class="far fa-plus"></i>
                            </div>
                            <div class="faq-collapse-item-card-header-content display-none">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-collapse-item">
                        <div class="faq-collapse-item-card">
                            <div class="faq-collapse-item-card-header">
                                <h6><span class="far fa-question-circle"></span>How do consultants solve problems?</h6>
                                <i class="far fa-plus"></i>
                            </div>
                            <div class="faq-collapse-item-card-header-content display-none">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-collapse-item">
                        <div class="faq-collapse-item-card">
                            <div class="faq-collapse-item-card-header">
                                <h6><span class="far fa-question-circle"></span>How can I improve my consulting skills?</h6>
                                <i class="far fa-plus"></i>
                            </div>
                            <div class="faq-collapse-item-card-header-content display-none">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-collapse-item">
                        <div class="faq-collapse-item-card">
                            <div class="faq-collapse-item-card-header">
                                <h6><span class="far fa-question-circle"></span>What is required of a consultant?</h6>
                                <i class="far fa-minus"></i>
                            </div>
                            <div class="faq-collapse-item-card-header-content active">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="faq-accordion">
                    <div class="faq-accordion-item">
                        <div class="faq-accordion-item-card">
                            <div class="faq-accordion-item-card-header">
                                <h6><span class="far fa-question-circle"></span>Do you need a degree to become a consultant?</h6>
                                <i class="far fa-minus"></i>
                            </div>
                            <div class="faq-accordion-item-card-header-content display-none">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <div class="faq-accordion-item-card">
                            <div class="faq-accordion-item-card-header">
                                <h6><span class="far fa-question-circle"></span>Is a consulting business profitable?</h6>
                                <i class="far fa-plus"></i>
                            </div>
                            <div class="faq-accordion-item-card-header-content active">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <div class="faq-accordion-item-card">
                            <div class="faq-accordion-item-card-header">
                                <h6><span class="far fa-question-circle"></span>Can you scale a consulting business?</h6>
                                <i class="far fa-plus"></i>
                            </div>
                            <div class="faq-accordion-item-card-header-content display-none">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion-item">
                        <div class="faq-accordion-item-card">
                            <div class="faq-accordion-item-card-header">
                                <h6><span class="far fa-question-circle"></span>How do I sell myself as a consultant?</h6>
                                <i class="far fa-plus"></i>
                            </div>
                            <div class="faq-accordion-item-card-header-content display-none">
                                <p>Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Faq Area End -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
