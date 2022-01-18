@extends('layout.main')

@section('content')



{{-- Saection paket wedding ect 2 --}}
<section class="section-paket-wedding-sect-2">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="item-text w-75 mx-auto text-center">
					<div class="text-title ">
						<h3>Paket Lamaran</h3>
					</div>
					<div class="text-desc">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, consectetur, hic id laboriosam numquam
							tenetur sapiente accusantium et odit libero ratione ipsa magni dignissimos eum omnis. A cum minima iure?
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- Section paket wedding sect 3 --}}
<section class="section-paket-wedding-sect-3">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items-card">
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="pict">
								<img src="{{ asset('assets/img/thumbnail (2).jpg') }}" alt="" class="img card-img">
							</div>
							<div class="card-body text-center">
								<div class="title-card">
									<h3>Paket A</h3>
								</div>
								<div class="link-paket">
									<a href="/detail-paket-wedding" class="item-btn">Lihat Detail</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="pict">
								<img src="{{ asset('assets/img/thumbnail (6).jpg') }}" alt="" class="img card-img">
							</div>
							<div class="card-body text-center">
								<div class="title-card ">
									<h3>Paket B</h3>
								</div>
								<div class="link-paket">
									<a href="/detail-paket-wedding" class="item-btn">Lihat Detail</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="pict">
								<img src="{{ asset('assets/img/thumbnail (8).jpg') }}" alt="" class="img card-img">
							</div>
							<div class="card-body text-center">
								<div class="title-card ">
									<h3>Paket C</h3>
								</div>
								<div class="link-paket">
									<a href="/detail-paket-wedding" class="item-btn">Lihat Detail</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection