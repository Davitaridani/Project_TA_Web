@extends('layout.main')

@section('content')

{{-- Section Banner --}}
<section class="section-hero-image-banner">
	{{-- <div class="background-banner-contact" style="background-image:url(assets/img/banner-contact.jpg)"></div> --}}
	<div class="container-fluid p-0 ">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="pict">
					<div alt="" class="background-banner-contact" style="background-image:url(assets/img/banner-contact.jpg)">

						<div class="text-title text-center text-white">
							<h5>Contact Us</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>


{{-- Section contact sect 2 --}}
<section class="section-contact-sect-2">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="text-title text-center">
					<h5>Jangan Ragu Untuk Menghubungi Kami!</h5>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="pict">
							<img src="{{ asset('assets/img/img-contact-us.jpg') }}" class="img img-fluid"></img>
						</div>
					</div>

					<div class="col-md-7">
						<div class="item-form-contact">
							<form action="" method="get">
								<div class="mb-3">
									<label for="nama" class="form-label">Nama</label>
									<input type="text" id="nama" class="form-control" placeholder="Nama" required>
								</div>

								<div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" id="email" class="form-control" placeholder="E-Mail" required>
								</div>
								<div class="mb-3">
									<label for="telp" class="form-label">Telepon</label>
									<input type="telp" id="telp" class="form-control" placeholder="Telp" required>
								</div>
								<div class="mb-3">
									<label for="nama" class="form-label">Nama</label>
									<input type="text" id="nama" class="form-control" placeholder="Nama">
								</div>
								<div class="mb-3">
									<label for="pesan" class="form-label">Pesan</label>
									<textarea class="form-control" id="pesan" rows="4"></textarea>
								</div>
								<button type="submit" class="btn btn-danger">Kirim</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





@endsection