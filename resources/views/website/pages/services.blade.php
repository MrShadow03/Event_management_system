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
    <!-- Services Area Start -->
    <div class="services__page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="services__three-item page">
                        <img src="{{ asset('assets/website/img/pages/services-5.jpg') }}" alt="">
                        <div class="services__three-item-content page">
                            <div class="services__three-item-content-icon">
                                <img src="{{ asset('assets/website/img/icon/services-9.png') }}" alt="">
                            </div>
                            <h4><a href="services-right-sidebar.html">Business Consulting</a></h4>
                            <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                    <div class="services__three-item page">
                        <img src="{{ asset('assets/website/img/pages/services-6.jpg') }}" alt="">
                        <div class="services__three-item-content page">
                            <div class="services__three-item-content-icon">
                                <img src="{{ asset('assets/website/img/icon/services-10.png') }}" alt="">
                            </div>
                            <h4><a href="services-right-sidebar.html">Digital Solutions</a></h4>
                            <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30">
                    <div class="services__three-item page">
                        <img src="{{ asset('assets/website/img/pages/services-7.jpg') }}" alt="">
                        <div class="services__three-item-content page">
                            <div class="services__three-item-content-icon">
                                <img src="{{ asset('assets/website/img/icon/service-11.png') }}" alt="">
                            </div>
                            <h4><a href="services-right-sidebar.html">Human research</a></h4>
                            <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                    <div class="services__three-item page">
                        <img src="{{ asset('assets/website/img/pages/services-8.jpg') }}" alt="">
                        <div class="services__three-item-content page">
                            <div class="services__three-item-content-icon">
                                <img src="{{ asset('assets/website/img/icon/service-5.png') }}" alt="">
                            </div>
                            <h4><a href="services-right-sidebar.html">Creative Layout</a></h4>
                            <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
                    <div class="services__three-item page">
                        <img src="{{ asset('assets/website/img/pages/services-9.jpg') }}" alt="">
                        <div class="services__three-item-content page">
                            <div class="services__three-item-content-icon">
                                <img src="{{ asset('assets/website/img/icon/services-33.png') }}" alt="">
                            </div>
                            <h4><a href="services-right-sidebar.html">audit marketing</a></h4>
                            <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services__three-item page">
                        <img src="{{ asset('assets/website/img/pages/services-10.jpg') }}" alt="">
                        <div class="services__three-item-content page">
                            <div class="services__three-item-content-icon">
                                <img src="{{ asset('assets/website/img/icon/service-7.png') }}" alt="">
                            </div>
                            <h4><a href="services-right-sidebar.html">Machine Learning</a></h4>
                            <p>Aliquam sit amet massa quis augue porta consequat eu</p>
                        </div>
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
    <!-- Solutions Area Start -->
    <div class="solutions__two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 lg-mb-30">
                    <div class="solutions__two-title">
						<span class="subtitle-one">Advance Solutions</span>
						<h2>We help for Planing</h2>
                        <p>Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 xl-mb-30">
                    <div class="solutions__two-item">
                        <div class="solutions__two-item-icon">
                            <img src="{{ asset('assets/website/img/icon/solutions-1.png') }}" alt="">
                        </div>
						<h4>Digital Consulting</h4>
						<p>Pellentesque vitae velit quis ligula vehicula ornare a et quam.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 md-mb-30">
                    <div class="solutions__two-item">
                        <div class="solutions__two-item-icon">
                            <img src="{{ asset('assets/website/img/icon/solutions-2.png') }}" alt="">
                        </div>
						<h4>Strategic planning</h4>
						<p>Pellentesque vitae velit quis ligula vehicula ornare a et quam.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="solutions__two-item">
                        <div class="solutions__two-item-icon">
                            <img src="{{ asset('assets/website/img/icon/solutions-3.png') }}" alt="">
                        </div>
						<h4>customer service</h4>
						<p>Pellentesque vitae velit quis ligula vehicula ornare a et quam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solutions Area End -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
