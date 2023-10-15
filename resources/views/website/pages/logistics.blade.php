@extends('website.layouts.pages')

<!-- Styles for this page only -->
@section('exclusive-styles')
@endsection

@section('meta')
    <title>Logistic Rentals</title>
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
                        <a href="{{ route('products', ['id' => $category->id]) }}">
                            <img src="{{ asset('storage').'/'.$category->image }}" alt="">
                            <div class="category-detail">
                                <p class="font-bn heading-xs title">{{ $category->name }}</p>
                                <p class="font-bn para-sm">{{ $category->products->count() ? $category->products->count().' টি' : 'আসছে'}}</p>
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