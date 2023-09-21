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
<!-- Request Quote Page Start -->
    <div class="request__quote section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <form action="#">
                        <div class="row">
							<div class="col-md-6 mb-30">
                                <div class="request__quote-item">
                                    <label>Name<span> *</span></label>
									<input type="text" name="name" placeholder="First" required>
								</div>
							</div>
							<div class="col-md-6 mt-30 md-mt-0 lg-mb-30">
								<div class="request__quote-item">
									<input type="text" name="name" placeholder="Last" required>
								</div>
							</div>
							<div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Email Address<span> *</span></label>
									<input type="email" name="email" placeholder="email" required>
								</div>
							</div>
							<div class="col-md-6 lg-mb-30">
								<div class="request__quote-item">
									<label>Number<span> *</span></label>
									<input type="number" name="number"required>
								</div>
							</div>
							<div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Company/Organization<span> *</span></label>
									<input type="text" required>
								</div>
							</div>
							<div class="col-md-6 lg-mb-30">
								<div class="request__quote-item">
									<label>Website<span> *</span></label>
									<input type="text" value="https://" required>
								</div>
							</div>
							<div class="col-md-12 mb-30">
                                <p class="mb-10">What services can we provide you?<span> *</span></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="request__quote-services">
                                            <label><input class="mr-10" type="checkbox">Optimization (SEO)</label>
                                            <label><input class="mr-10" type="checkbox">Web Design</label>
                                            <label><input class="mr-10" type="checkbox">Web Hosting / Maintenance</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="request__quote-services">
                                            <label><input class="mr-10" type="checkbox">Content Writing</label>
                                            <label><input class="mr-10" type="checkbox">Search Engine Marketing</label>
                                            <label><input class="mr-10" type="checkbox">Social Media</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="request__quote-services">
                                            <label><input class="mr-10" type="checkbox">ADA Compliance</label>
                                            <label><input class="mr-10" type="checkbox">Photography / Video</label>
                                            <label><input class="mr-10" type="checkbox">Email Marketing</label>
                                        </div>
                                    </div>
                                </div>
							</div>
                            <div class="col-md-12 mb-30">
								<div class="request__quote-item">
									<label>Message<span> *</span></label>
                                    <textarea name="message"></textarea>
								</div>
                            </div>
                            <div class="col-lg-12">
                                <p class="mb-10">Join our email list?</p>
                                <label><input class="mr-10" type="radio">Yes, Please!</label><br>
                                <label><input class="mr-10" type="radio">Not yet, thanks</label>
                                <p class="description">Join our mailing list to get our blog updates. You can unsubscribe at any time. We respect your privacy and will never share your information.</p>
                                <button class="btn-one mt-30" type="submit">Submit <i class="far fa-chevron-double-right"></i></button>
                            </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Request Quote Page End -->
@endsection

<!-- Scripts  for this page only -->
@section('exclusive-scripts')
@endsection

