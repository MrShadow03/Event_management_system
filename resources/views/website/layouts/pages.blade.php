@include('website.partials.head')
	<body>
		<!-- Preloader Start -->
		{{-- @include('website.partials.preloader') --}}
		<!-- Preloader End -->
		<!-- Navbar Start -->
		@include('website.partials.drawers')
		<header class="page_nav">
			@yield('nav')
		</header>
		<!-- Navbar End -->
		<!-- Main Content Start -->
		<div class="container_fluid">
		@yield('main-content')
        <!-- Footer Start -->
        @include('website.partials.footer')
        <!-- Footer End -->
		</div>
		<!-- Main Content End -->

		<!-- Scroll Btn Start -->
		{{-- @include('website.partials.scroll_button') --}}
		<!-- Scroll Btn End -->
		<!-- Main JS -->
		@include('website.partials.scripts')
		@yield('exclusive-scripts')
		@include('website.partials.overlay')
	</body>
</html>
