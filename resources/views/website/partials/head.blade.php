<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	@yield('meta')
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/website/img/favicon-1.png') }}">
	@include('website.partials.styles')
    @yield('exclusive-styles')
</head>
