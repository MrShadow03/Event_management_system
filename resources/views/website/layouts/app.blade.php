@include('website.partials.head')
	<body>
		<!-- Preloader Start -->
		@include('website.partials.preloader')
		<!-- Preloader End -->
		<!-- Dark Light Start -->
		@include('website.partials.theme_switch')
		<!-- Dark Light End -->
		<!-- Top Bar Start -->
		@include('website.partials.topbar')
		<!-- Top Bar End -->
		<!-- Navbar Start -->
		@include('website.partials.navbar')
		<!-- Navbar End -->
		<!-- Main Content Start -->
		@yield('main-content')
		<!-- Main Content End -->

        <!-- Footer Start -->
        @include('website.partials.footer')
        <!-- Footer End -->
		<!-- Scroll Btn Start -->
		@include('website.partials.scroll_button')
		<!-- Scroll Btn End -->
		<!-- Main JS -->
		@include('website.partials.scripts')
		@yield('exclusive-scripts')
	</body>
</html>
