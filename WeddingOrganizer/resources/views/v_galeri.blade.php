@extends('layout.main')

@section('content')

{{-- herro image galeri --}}

<section class="section-galeri-sect-1">
	<div class="container-galeri ">
		<div class="inner">
			<div class="galeri-slider-background">
				<img class="img img-fluid" height="700px" src="{{ asset('assets/img/1.jpg') }}" alt="">
				<h4>Gallery</h4>
				<p>Our Colection</p>
			</div>
		</div>
	</div>
</section>


{{-- Galeri Sec 2 --}}
<section>
	<div class="section-galeri-sect-2">
		<div class="container p-0">
			<div class="inner">
				<div class="blocks-items">
					<div class="text-title text-uppercase text-center pt-5">
						<h3>Prewedding & Wedding</h3>
					</div>
					<div class="text-desc text-center">
						<p>Wedding Organizer</p>
					</div>
					<div class="row row-cols-4" data-masonry='{"percentPosition": true }'>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (1).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (2).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (3).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (4).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (5).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (6).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (7).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (16).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (9).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (15).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (11).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (13).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (14).jpg') }}" alt="">
						</div>
						<div class="col pt-4">
							<img class="img img-fluid" src="{{ asset('assets/img/prewedding/prewedding (8).jpg') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- Galeri sec 3 --}}
<section class="section-galeri-sect-3">
	<div class="container p-0">
		<div class="inner">
			<h1 class="text-uppercase text-center">Make Up Artist</h1>
			<h5>Lorem ipsum dolor sit amet.</h5>
			<div class="row row-cols-4" data-masonry='{"percentPosition": true }'>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (1).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (2).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (3).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (4).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (5).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (6).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (7).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (8).jpg') }}" alt="" class="img img-fluid">
				</div>

				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (9).jpg') }}" alt="" class="img img-fluid">
				</div>
				<div class="col pt-4">
					<img src="{{ asset('assets/img/make-up/make-up (11).jpg') }}" alt="" class="img img-fluid">
				</div>

			</div>
		</div>
	</div>
</section>

{{-- Galeri sec 4 --}}
<section class="section-galeri-sect-4">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="title text-center">
					<h2>Decoration</h2>
				</div>
				<div class="text-decs text-center">
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
				<div class="block-item-pict">
					<div class="row row-cols-4 " data-masonry='{"percentPosition": true }'>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (1).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (2).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (3).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (4).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (15).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (5).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (6).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (7).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (8).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (9).jpg') }}" alt="">
						</div>
						<div class="col  pt-4">
							<img class="img card-img" src="{{ asset('assets/img/dekor/dekor (10).jpg') }}" alt="">
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