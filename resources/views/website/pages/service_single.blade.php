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
    <!-- Services Details Start -->
    <div class="services__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 lg-mb-60">
                    <div class="services__details-left">
                        <div class="services__details-left-image dark__image">
                            <img src="{{ asset('assets/website/img/pages/services-details.jpg') }}" alt="">
                        </div>
                        <div class="services__details-left-content">
                            <h2>Business analytics</h2>
                            <p class="mb-25">Proin molestie nunc id scelerisque facilisis. Nunc efficitur mollis nunc, ac facilisis orci viverra vel. Aliquam rutrum libero sit amet justo consectetur luctus. Duis dolor augue, euismod a accumsan at, commodo a lorem. Donec sit amet nibh condimentum libero</p>
                            <p class="mb-25">Nunc efficitur mollis nunc, ac facilisis orci viverra vel. Aliquam rutrum libero sit amet justo consectetur luctus. Duis dolor augue, euismod a accumsan at, commodo a lorem.</p>
                            <div class="services__details-left-content-list">
                                <span><i class="far fa-check"></i>It's essential to work with business consultants who have</span>
                                <span><i class="far fa-check"></i>Business consultants may charge by the project or hour, or you may need to pay daily or monthly retainers.</span>
                                <span><i class="far fa-check"></i>Meet with the board of directors and employees.</span>
                            </div>
                            <h3 class="mb-30">Working challenge</h3>
                            <p class="mb-25">Fusce ornare mauris arcu, eget placerat erat porttitor at. Cras non justo consectetur, tempus lectus a, tempor arcu. Proin luctus sagittis augue,</p>
                            <div class="services__details-left-content-list bold">
                                <div class="row">
                                    <div class="col-sm-6 sm-mb-15">
                                        <span><i class="far fa-check"></i>Accounting consulting.</span>
                                        <span><i class="far fa-check"></i>Read all company materials</span>
                                        <span><i class="far fa-check"></i>Financial consultants</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <span><i class="far fa-check"></i>Marketing consultants</span>
                                        <span><i class="far fa-check"></i>Operations consultants</span>
                                        <span><i class="far fa-check"></i>Implementation</span>
                                    </div>
                                </div>
                            </div>
                            <h3>frequently asked questions</h3>
                            <div class="faq-collapse mt-35">
                                <div class="faq-collapse-item">
                                    <div class="faq-collapse-item-card">
                                        <div class="faq-collapse-item-card-header">
                                            <h6><span class="far fa-question-circle"></span>How do you manage consulting effectively?</h6>
                                            <i class="far fa-minus"></i>
                                        </div>
                                        <div class="faq-collapse-item-card-header-content active">
                                            <p> Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
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
                                            <p> Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-collapse-item">
                                    <div class="faq-collapse-item-card">
                                        <div class="faq-collapse-item-card-header">
                                            <h6><span class="far fa-question-circle"></span>What is required of a consultant?</h6>
                                            <i class="far fa-plus"></i>
                                        </div>
                                        <div class="faq-collapse-item-card-header-content display-none">
                                            <p> Pellentesque eget dui tellus. Donec semper tincidunt egestas. Vivamus lectus ipsum, tempor quis mattis in, ornare ut tortor. Praesent condimentum eu turpis ut hendrerit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="all__sidebar">
                        <div class="all__sidebar-item">
                            <h4>Our Solutions</h4>
                            <div class="all__sidebar-item-solution">
                                <ul>
                                    <li><a href="services-right-sidebar.html"><i class="far fa-chevron-double-right"></i>Business Consulting<span>(2)</span></a></li>
                                    <li><a href="services-right-sidebar.html"><i class="far fa-chevron-double-right"></i>Human research<span>(3)</span></a></li>
                                    <li><a href="services-right-sidebar.html"><i class="far fa-chevron-double-right"></i>Digital solutions<span>(4)</span></a></li>
                                    <li><a href="services-right-sidebar.html"><i class="far fa-chevron-double-right"></i>strategy &amp; Research<span>(5)</span></a></li>
                                    <li><a href="services-right-sidebar.html"><i class="far fa-chevron-double-right"></i>Business Model<span>(6)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="all__sidebar-item">
                            <h4>Download</h4>
                            <div class="all__sidebar-item-download">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets/website/img/icon/pdf.png') }}" alt="">Our Brochures<i class="fal fa-arrow-to-bottom"></i></a></li>
                                    <li><a href="#"><img src="{{ asset('assets/website/img/icon/document.png') }}" alt="">Company Details<i class="fal fa-arrow-to-bottom"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="all__sidebar-help">
                            <div class="all__sidebar-help-image">
                                <img class="img__full" src="{{ asset('assets/website/img/pages/help.jpg') }}" alt="">
                                <div class="all__sidebar-help-image-content">
                                    <img src="{{ asset('assets/website/img/favicon-1.png') }}" alt="">
                                    <h4>We're Always ready for help You</h4>
                                    <a class="btn-one" href="contact.html">Need Help<i class="far fa-chevron-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Details End -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
