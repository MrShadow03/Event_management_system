<div class="header__area header__sticky">
    <div class="container custom__container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <a href="index.html">
                        <img class="dark-n" src="{{ asset('assets/website/img/logo-1.png') }}" alt="">
                        <img class="light-n" src="{{ asset('assets/website/img/logo-2.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="header__area-menubar-center">
                <div class="header__area-menubar-center-menu menu-responsive">
                    <ul id="mobilemenu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li class="menu-item-has-children"><a href="#">More</a>
                            <ul class="sub-menu">
                                <li><a href="project-single.html">FAQ</a></li>
                                <li><a href="project-single.html">Review</a></li>
                                <li><a href="project-filter.html">Our Team</a></li>
                                <li><a href="project-filter.html">Terms of Services</a></li>
                                <li class="menu-item-has-children"><a href="#">Newsletter</a>
                                    <ul class="sub-menu">
                                        <li><a href="project-two.html">Subscribe</a></li>
                                        <li><a href="project-three.html">Unsubscribe</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <div class="header__area-menubar-right-box-search">
                        <div class="search">
                            <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-search"></i></span>
                        </div>
                        <div class="header__area-menubar-right-box-search-box">
                            <form>
                                <input type="search" placeholder="Search Here.....">
                                <button type="submit"><i class="fal fa-search"></i>
                                </button>
                            </form> <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                        </div>
                    </div>
                    <div class="header__area-menubar-right-sidebar">
                        <div class="header__area-menubar-right-sidebar-popup-icon"><img src="{{ asset('assets/website/img/icon/menu.png') }}" alt=""></div>
                    </div>
                    <div class="header__area-menubar-right-box-btn">
                        <a class="btn-one" href="{{ route('quote') }}">Request quote<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- sidebar Menu Start -->
                    <div class="header__area-menubar-right-sidebar-popup">
                        <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                        <div class="header__area-menubar-right-sidebar-popup-logo">
                            <a href="index.html"> <img src="{{ asset('assets/website/img/logo-2.png') }}" alt=""> </a>
                        </div>
                        <p>Morbi et tellus imperdiet, aliquam nulla sed, dapibus erat. Aenean dapibus sem non purus venenatis vulputate. Donec accumsan eleifend blandit. Nullam auctor ligula</p>
                        <div class="header__area-menubar-right-box-sidebar-popup-contact">
                            <h4 class="mb-30">Get In Touch</h4>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-phone-alt icon-animation"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Call Now</span>
                                    <h6><a href="tel:+125(895)658568">+125 (895) 658 568</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Quick Email</span>
                                    <h6><a href="mailto:info.help@gmail.com">info.help@gmail.com</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Office Address</span>
                                    <h6><a href="#">PV3M+X68 Welshpool United Kingdom</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-box-sidebar-popup-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-overlay"></div>
                    <!-- sidebar Menu Start -->
                </div>
                <div class="responsive-menu"></div>
            </div>
        </div>
    </div>
</div>


{{-- <li class="menu-item-has-children"><a href="#">Pages</a>
    <ul class="sub-menu">
        <li><a href="about.html">About Us</a></li>
        <li class="menu-item-has-children"><a href="#">Services</a>
            <ul class="sub-menu">
                <li><a href="services.html">Services 01</a></li>
                <li><a href="services-two.html">Services 02</a></li>
                <li><a href="services-right-sidebar.html">Single Right Sidebar</a></li>
                <li><a href="services-left-sidebar.html">Single Left Sidebar</a></li>
            </ul>
        </li>
        <li><a href="pricing.html">Price Plans</a></li>
        <li><a href="faq.html">FAQ's</a></li>
        <li><a href="testimonial.html">Testimonials</a></li>
        <li class="menu-item-has-children"><a href="#">Teams</a>
            <ul class="sub-menu">
                <li><a href="team-filter.html">Team Filter</a></li>
                <li><a href="team.html">Team 01</a></li>
                <li><a href="team-two.html">Team 02</a></li>
                <li><a href="team-three.html">Team 03</a></li>
                <li><a href="team-single.html">Team Single</a></li>
            </ul>
        </li>
        <li><a href="request-quote.html">Request Quote</a></li>
        <li><a href="404-error.html">404 Page</a></li>
    </ul>
</li> --}}
