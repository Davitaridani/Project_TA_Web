<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dhewi Lestari | </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">




	{{-- Link scss --}}
	<link rel="stylesheet" href="{{ asset('css/main_custom.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

	{{-- Owl Carousel include --}}
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">



	{{-- OWL Carousel --}}
	<link rel="stylesheet"
		href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">

	<link rel="stylesheet"
		href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">



	{{-- Lightbox css --}}
	<link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">

</head>

<body>

	{{-- <div class="super_container"> --}}

		@include('include.v_navbar')


		<div class="container-fluid p-0">
			@yield('content')
		</div>

		@include('include.v_footer')
		{{--
	</div> --}}




	{{-- Link BS 5 --}}
	<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>


	{{-- Lightbox JS --}}
	<script src="{{ asset('js/lightbox.min.js') }}"></script>

	{{-- Ligbox jquery --}}
	<script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>

	{{-- Owl Card --}}
	<script src="{{ asset('js/owl-card.js') }}"></script>



	{{-- OWL carousel jquery --}}
	<script src="{{ asset('js/jquery.min.js') }}"></script>

	{{-- Owl carousel inlcude JS --}}
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>


	{{-- Jquery --}}
	<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>


	{{-- Link OWL Caroseul JS--}}
	<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>


	{{-- Link iconfy --}}
	<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

	{{-- Paralax Js --}}
	<script src="{{ asset('js/parallax.min.js') }}"></script>

	{{-- Custom JS --}}
	<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>