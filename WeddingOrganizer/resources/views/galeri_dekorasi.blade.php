@extends('layout.main')

@section('content')

{{-- Section hero banner --}}

<section class="section-hero-image-banner">
	<div class="container-fluid p-0 ">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="pict">
					<div alt="" class="background-banner-contact" style="background-image:url(assets/img/banner-dekorasi.jpg)">

						<div class="text-title text-center text-light fw-bold">
							<h5>Dekorasi</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>


{{-- Section galeri prewedding sect 2 --}}
<section class="section-prewedding-sect-2 galeri-sect-2">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="item-text">
					<div class="text-title text-center">
						<h3>Galeri Dekorasi</h3>
					</div>
					<div class="text-desc w-75 text-center mx-auto">
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos debitis deserunt nostrum qui at
							vitae
							facilis nemo consequuntur inventore modi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi
							tempora expedita ut laudantium voluptates fuga repudiandae blanditiis eius error numquam.</p>
					</div>
				</div>

				<div class="item-pict">
					<div class="row g-20" data-masonry='{"percentPosition": true }'>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (1).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (1).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (2).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (2).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (4).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (4).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (5).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (5).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (6).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (6).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (7).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (7).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (8).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (8).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (9).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (9).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (10).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (10).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (11).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (11).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (12).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (12).jpg') }}" alt="">
							</a>
						</div>
						<div class="col-md-6 col-lg-4 ">
							<a href="{{ asset('assets/img/dekor/dekor (3).jpg') }}" data-lightbox="roadtrip" data-title="My caption">

								<img class="img img-fluid" src="{{ asset('assets/img/dekor/dekor (3).jpg') }}" alt="">
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
	integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
</script>


@endsection