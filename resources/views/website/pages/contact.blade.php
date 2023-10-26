@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <meta name="title" content="Contact Us - Maaevent.com - Your Ultimate Wedding Solution Provider in Bangladesh">
    <meta name="description" content="Get in touch with Maaevent.com, the largest wedding solution provider in Bangladesh. Contact our team for wedding planning assistance, vendor information, and more. Your dream wedding is just a message away.">
    <meta name="keywords" content="Maaevent.com, contact us, wedding solutions, wedding planning, vendor information, get in touch">

    <!-- Open Graph (og:) Tags -->
    <meta property="og:title" content="Contact Us - Maaevent.com - Your Wedding Planning Partner in Bangladesh">
    <meta property="og:description" content="Reach out to Maaevent.com for all your wedding planning needs. Contact our team for assistance, vendor information, and more. Your dream wedding is just a message away in Bangladesh.">
    <meta property="og:image" content="{{ asset('assets/website/assets/img/logo.png') }}">
    <meta property="og:url" content="{{ route('contact') }}">

    <title>Contact Us - Maaevent.com - Your Ultimate Wedding Solution Provider in Bangladesh</title>
@endsection

@section('nav')
    <x-nav />
@endsection

@section('main-content')
    <!-- MAIN BODY  -->
    <div class="contact_area">
        <div class="info_box">
            <h2>CONTACT INFO</h2>
            <span><i class="fa-solid fa-paper-plane"></i> Ka-44/2, Kalachandpur Gulshan-2, Dhaka-1212</span>
            <span><i class="fa-solid fa-phone"></i><a href="#"></a>+8801671-711933</span>
            <span><i class="fa-solid fa-envelope"></i><a href="#">maaeventmanagementbd@gmail.com</a></span>
            <div class="social_btn">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.259504026561!2d90.41494447533775!3d23.809369478630117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c715f2121e7d%3A0xf7d351b7edb1d903!2sMaa%20Event%20Management%20and%20Catering!5e0!3m2!1sen!2sbd!4v1695360704361!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="forn_box">
            <h2>CONTACT US FOR ANY QUESTIONS</h2>
            <form action="#">
                <div class="input_group">
                    <div class="input">
                        <label for="">Your Name</label>
                        <input type="text">
                    </div>
                    <div class="input">
                        <label for="">Your Email</label>
                        <input type="email">
                    </div>
                </div>
                <div class="input_group">
                    <div class="input">
                        <label for="">Phone Number</label>
                        <input type="number">
                    </div>
                    <div class="input">
                        <label for="">Company</label>
                        <input type="text">
                    </div>
                </div>
                <label for="">Your Message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button class="contact_btn" type="submit">ASK A QUESTION</button>
            </form>
        </div>
    </div>
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection