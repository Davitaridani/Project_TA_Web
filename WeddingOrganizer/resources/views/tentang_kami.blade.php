@extends('layout.main')
@section('content')


{{-- Section tentang kami sect 2 --}}
<section class="section-hero-image-banner hero-image-banner-paralax" data-parallax="scroll" data-z-index="1"
	data-image-src="../assets/img/tim.jpg">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items ">
				<div class="items text-center">
					<div class="text-title">
						<h3>Tentang Kami</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


{{-- Section Tentang kmai sect 2 --}}
<section class="section-tentangKami-sect-2">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="logo text-center">
					<img src="{{ asset('assets/img/logo-tentang-kami.png') }}" alt="" class="img img-fluid">
					<div class="item-text">
						<div class="text-title">
							<h3>Tentang Dhewi Lestari</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




@endsection