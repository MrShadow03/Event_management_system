@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>Workshop</title>
@endsection

@section('nav')
    <x-nav />
@endsection

@section('main-content')
    <div class="workshop_area">
        <a class="workshop_card" href="assets/img/workshop1.jpg" data-lightbox="workshop" data-title="item1">
            <img src="{{ asset('./assets/website/assets/img/workshop1.jpg') }}" alt="">
            <h2>Metal Window Kapison</h2>
        </a>
        <a class="workshop_card" href="assets/img/workshop2.jpg" data-lightbox="workshop" data-title="item1">
            <img src="{{ asset('./assets/website/assets/img/workshop2.jpg') }}" alt="">
            <h2>Metal Window Kapison</h2>
        </a>
        <a class="workshop_card" href="assets/img/workshop3.jpg" data-lightbox="workshop" data-title="item1">
            <img src="{{ asset('./assets/website/assets/img/workshop3.jpg') }}" alt="">
            <h2>Metal Window Kapison</h2>
        </a>
        <a class="workshop_card" href="assets/img/workshop4.jpg" data-lightbox="workshop" data-title="item1">
            <img src="{{ asset('./assets/website/assets/img/workshop4.jpg') }}" alt="">
            <h2>Metal Window Kapison</h2>
        </a>
        <a class="workshop_card" href="assets/img/workshop5.jpg" data-lightbox="workshop" data-title="item1">
            <img src="{{ asset('./assets/website/assets/img/workshop5.jpg') }}" alt="">
            <h2>Metal Window Kapison</h2>
        </a>
        <a class="workshop_card" href="assets/img/workshop6.jpg" data-lightbox="workshop" data-title="item1">
            <img src="{{ asset('./assets/website/assets/img/workshop6.jpg') }}" alt="">
            <h2>Metal Window Kapison</h2>
        </a>
    </div>
    <!-- FOOTER END SECTION -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection