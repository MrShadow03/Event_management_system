@extends('website.layouts.app')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>Contact | Construction</title>
@endsection

@section('main-content')
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="{{ asset('assets/website/img/pages/page-banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>Contact</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>Contact</li>
                        </ul>
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- Contact Area Start -->
    <div class="contact__two section-padding pb-0">
        <div class="container">
            <div class="row contact__two-box">
                <div class="col-xl-4 col-lg-5 lg-mb-30">
                    <div class="contact__two-left">
                        <h3>Contact Us</h3>
                        <p class="mb-30">On the other hand we moralized bite the HR charms of pleasure.</p>
                        <div class="contact__two-left-item">
                            <div class="contact__two-left-item-icon">
                                <img src="{{ asset('assets/website/img/icon/call.png') }}" alt="">
                            </div>
                            <div class="contact__two-left-item-info">
                                <span>Tell With US</span>
                                <p><a href="tel:+123-568-4758">+123-568-4758</a></p>
                            </div>
                        </div>
                        <div class="contact__two-left-item">
                            <div class="contact__two-left-item-icon">
                                <img src="{{ asset('assets/website/img/icon/email.png') }}" alt="">
                            </div>
                            <div class="contact__two-left-item-info">
                                <span>Quick Email</span>
                                <p><a href="mailto:conbix.com@gmail.com">conbix.com@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="contact__two-left-item">
                            <div class="contact__two-left-item-icon">
                                <img src="{{ asset('assets/website/img/icon/locations.png') }}" alt="">
                            </div>
                            <div class="contact__two-left-item-info">
                                <span>Office Address</span>
                                <p><a href="#">Birkbeck Court, Birkbeck Rd, London W3 6BQ, UK</a></p>
                            </div>
                        </div>
                        <div class="contact__two-left-item-socialIcon">
                            <h6>Follow  Us</h6>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact__two-right">
                        <h3>Get In Touch</h3>
                        <p>On the other hand we denounce righteous indignation moralized bite the HR charms of pleasure.</p>
                        <div class="contact__two-right-form">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fal fa-user"></span>
                                            <input type="text" name="name" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-envelope-open"></span>
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-phone"></span>
                                            <input type="text" name="phone_number" placeholder="017123456" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fal fa-book"></span>
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-comments"></span>
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact__two-right-form-item">
                                            <button class="btn-one" type="submit">Submit Message <i class="far fa-chevron-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    <!-- Map Area Start -->
    <div class="contact__two-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894606!2d-74.11976383964463!3d40.69766374865767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1652012644726!5m2!1sen!2sbd" loading="lazy"></iframe>
    </div>
    <!-- Map Area End -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
