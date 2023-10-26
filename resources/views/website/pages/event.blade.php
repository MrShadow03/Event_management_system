@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <meta name="title" content="Events Category - Maaevent.com - Explore Wedding Events in Bangladesh">
    <meta name="description" content="Discover a wide range of wedding events in Bangladesh with Maaevent.com's Events Category. Explore wedding ceremonies, receptions, and more. Find inspiration for your dream wedding.">
    <meta name="keywords" content="Maaevent.com, events category, wedding events, wedding ceremonies, wedding receptions, wedding inspiration, Bangladesh weddings">

    <!-- Open Graph (og:) Tags -->
    <meta property="og:title" content="Events Category - Maaevent.com - Explore Wedding Events in Bangladesh">
    <meta property="og:description" content="Explore a variety of wedding events in Bangladesh with Maaevent.com's Events Category. From ceremonies to receptions, find inspiration for your dream wedding.">
    <meta property="og:image" content="{{ asset('assets/website/assets/img/logo.png') }}">
    <meta property="og:url" content="{{ route('event') }}">

    <title>Events - Maaevent.com - Explore Wedding Events in Bangladesh</title>
@endsection

@section('nav')
    <x-nav />
@endsection

@section('main-content')
<!-- Event Management Section Start -->
<div class="event_management">
    <div class="event_management_title">
        <h2>Event Management</h2>
        <p>We are thrilled to offer a variety of events and gatherings for you to enjoy. Our goal is to provide a welcoming and enjoyable atmosphere where you can connect with others and make lasting memories.</p>
    </div>
    <div class="wedding_receptio_sec">
        <div class="wedding_receptio_items">
            <div class="wedding_receptio_img">
                <img src="{{ asset('./assets/website/assets/img/Wedding.png') }}" alt="">
            </div>
            <div class="wedding_receptio_text">
                <h2>Wedding Reception</h2>
                <p>We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.</p>
                <a class="btn_black" href="">VIEW</a>
            </div>
        </div>
        <span></span>
    </div>
    <div class="lifestyle_occasion_sec">
        <div class="lifestyle_occasion_items">
            <div class="lifestyle_occasion_text">
                <h2>Lifestyle Occasions</h2>
                <p>We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.</p>
                <a class="btn_black" href="">VIEW</a>
            </div>
            <div class="lifestyle_occasion_img">
                <img src="{{ asset('./assets/website/assets/img/Lifestyle.png') }}" alt="">
            </div>
        </div>
        <span></span>
    </div>
    <div class="corporate_events_sec">
        <div class="corporate_events_items">
            <div class="corporate_events_img">
                <img src="{{ asset('./assets/website/assets/img/corporate-02.png') }}" alt="">
            </div>
            <div class="corporate_events_text">
                <h2>Corporate Events</h2>
                <p>We understand the importance of creating memorable experiences for your corporate events. Whether you’re planning a conference, team-building retreat, product launch, or an executive summit, our dedicated team is here to make your event a resounding success.</p>
                <a class="btn_black" href="">VIEW</a>
            </div>
        </div>
        <span></span>
    </div>
</div>
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
