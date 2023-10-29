@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <meta name="title" content="Logistics Category - Maaevent.com - Find Wedding Logistics Services in Bangladesh">
    <meta name="description" content="Explore wedding logistics services in Bangladesh with Maaevent.com's Logistics Category. Find transportation, venue services, and more for your wedding needs.">
    <meta name="keywords" content="Maaevent.com, logistics category, wedding logistics, transportation services, venue services, Bangladesh weddings">

    <!-- Open Graph (og:) Tags -->
    <meta property="og:title" content="Logistics Category - Maaevent.com - Find Wedding Logistics Services in Bangladesh">
    <meta property="og:description" content="Discover a range of wedding logistics services in Bangladesh with Maaevent.com's Logistics Category. From transportation to venue services, find what you need for your wedding.">
    <meta property="og:image" content="{{ asset('assets/website/assets/img/logo.png') }}">
    <meta property="og:url" content="{{ route('logistics') }}">

    <title>Logistics Category - Maaevent.com - Find Wedding Logistics Services in Bangladesh</title>
@endsection

@section('nav')
    <x-nav />
@endsection

@section('main-content')
<div class="main_page_wrapper">
    <div class="container">
        <div class="rental_product">
            <div class="rental_product_text">
                <h2 class="heading-xl">Rental Products</h2>
                <p class="para-md">Welcome to our rental products page! We are thrilled to offer a wide range of rental products to meet your needs, whether you're planning a party, event, or a DIY project.</p>
            </div>
            <div class="rental_product_category">
                <ul class="category_list">
                    @foreach ($categories as $category)
                    @if ($loop->first)
                        @continue
                    @endif
                    <li class="single_list">
                        <a href="{{ route('customer.products', ['id' => $category->id]) }}">
                            <img src="{{ asset('storage').'/'.$category->image }}" alt="">
                            <div class="category-detail">
                                <p class="font-bn heading-xs title">{{ $category->name }}</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection