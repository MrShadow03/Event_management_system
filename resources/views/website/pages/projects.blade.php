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
                        <span>Work</span>
                        <ul>
                            <li><a href="index.html">Home</a><span>|</span></li>
                            <li>Project</li>
                        </ul>
                        <h1>Our Projects</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->
    <!-- Portfolio Area Start -->
    <div class="project__one section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-30">
                    <div class="conbix__filter-button">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".corporate">Corporate</button>
                        <button data-filter=".finance">Finance</button>
                        <button data-filter=".marketing">Marketing</button>
                        <button data-filter=".startup">Startup</button>
                    </div>
                </div>
            </div>
            <div class="row conbix__filter-active">
                <div class="col-xl-4 col-md-6 mt-30">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-1.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">Business analytics</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 finance">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-3.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">Digital Solutions</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 corporate">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-4.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">business strategy</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 marketing">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-6.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">Human research</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 startup corporate">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-2.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">Business planning</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 finance">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-8.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">audit marketing</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 startup marketing">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-9.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">swot analysis</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 marketing">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-7.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">Digital Business</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-30 corporate startup finance">
                    <div class="project__one-item">
                        <img class="img__full" src="{{ asset('assets/website/img/portfolio/project-5.jpg') }}" alt="">
                        <div class="project__one-item-content">
                            <span>Business Growth</span>
                            <h4><a href="{{ route('project') }}">Business Plan</a></h4>
                        </div>
                        <div class="project__one-item-icon">
                            <a href="{{ route('project') }}"><i class="fal fa-long-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Area End -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection
