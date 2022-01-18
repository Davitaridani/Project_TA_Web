@extends('layout.main')
@section('content')


{{-- Owl Carousel --}}

<section class="section-img-banner owl-carousel owl-theme owl-slider" id="slider-home">
	<div class="slide slide-1">
		<img src="{{ url('../assets/img/banner-1.jpg', []) }} " class="img-fluid" alt="...">
		<div class="slide-content">
			<div class="text-title">
				<h1>Kreatif dan Elegan</h1>
			</div>
			<div class="text-desc">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum accusamus atque voluptatum repellat
					voluptates nam ipsum aspernatur .</p>
			</div>
			<div class="btns-slide">
				<a href="">Selengkapnya</a>
			</div>
		</div>
	</div>
	<div class="slide slide-2">
		<img src="{{ url('../assets/img/banner-2.jpg', []) }} " class="img-fluid" alt="...">
		<div class="slide-content">
			<div class="text-title">
				<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam.</h1>
			</div>
			<div class="text-desc">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae nisi a explicabo ratione ipsum quo pariatur!
				</p>
			</div>
			<div class="btns-slide">
				<a href="">Selengkapnya</a>
			</div>
		</div>
	</div>
	<div class="slide slide-3">
		<img src="{{ url('../assets/img/banner-3.jpg', []) }} " class="img-fluid" alt="...">
		<div class="slide-content">
			<div class="text-title">
				<h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
			</div>
			<div class="text-desc">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ratione, neque tenetur ab ipsa vitae voluptas
					mollitia ducimus!</p>
			</div>
			<div class="btns-slide">
				<a href="">Selengkapnya</a>
			</div>
		</div>
	</div>
	</div>

</section>


{{-- Section home 2 --}}
<section class="section-home-sect-2" id="">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="text-title  mx-auto text-uppercase">
					<h1>Welcome to <br>Wedding Orgainzer Dhewi lestari</h1>
				</div>
				<div class="item">
					<div class="row ">
						<div class="col-md-6">
							<div class="text-desc">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur sequi laudantium odio atque
									blanditiis, culpa itaque et rerum possimus commodi. Molestias accusamus perferendis
									reiciendis sint.
								</p>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos officia aliquam quae
									beatae aut eos quo vel rem facilis explicabo et, voluptates provident ea nobis modi, suscipit
									harum ullam nemo soluta voluptate. Recusandae ipsum incidunt deserunt blanditiis ea quo,
									eveniet aspernatur hic pariatur quaerat cumque culpa, rem accusantium, excepturi quidem
									voluptas iure voluptatum fuga odio! . Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus
									consectetur eaque quasi ipsam aliquam! Hic tempore eius non, molestiae necessitatibus, placeat, ipsa
									incidunt error sequi rerum odit itaque obcaecati excepturi.</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate hic, odio earum sapiente
									illo laudantium natus a neque commodi? At deserunt reprehenderit alias sit illum ex odit?
									Labore facere assumenda vitae dolores repudiandae tempore beatae, eaque maxime ipsum iusto
									quidem.</p>
							</div>
						</div>
						<div class="col-md-5">
							<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
										aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
										aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
										aria-label="Slide 3"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="{{ asset('assets/img/img-carousel-1.jpg') }}" class="d-block w-100 img img-fluid"
											alt="...">
										<div class="carousel-caption ">
											<h5>Wedding Angga & Dinda</h5>
										</div>
									</div>
									<div class="carousel-item">
										<img src="{{ asset('assets/img/img-carousel-2.jpg') }}" class="d-block w-100 img img-fluid"
											alt="...">
										<div class="carousel-caption ">
											<h5>Wedding Riyan & Sinta</h5>
										</div>
									</div>
									<div class="carousel-item">
										<img src="{{ asset('assets/img/img-carousel-3.jpg') }}" class="d-block w-100 img img-fluid"
											alt="...">
										<div class="carousel-caption ">
											<h5>Wedding Dimas & Bella</h5>
										</div>
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
									data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
									data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<img class="img img-fluid" src="" alt="">
						{{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore atque sequi corporis quam,
							et
							optio
							perspiciatis maxime veritatis praesentium inventore!</p> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	{{--
</section>

{{-- Section Home sect 3 --}}
<section class="section-home-sect-3">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="item-text text-center">
					<div class="text-title ">
						<h3>Kenapa kamu harus mengunakan jasa kami?</h3>
					</div>
					<div class="text-desc">
						<p>Ini adalah ada beberapa alasan kenapa anda harus memilih jasa Dhewi Lestari sebagai partner anda</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-evenly">
			<div class="col-md-4">
				<div class="item-desc text-center">
					<div class="icons">
						<span class="iconify" data-icon="ic:outline-miscellaneous-services" data-width="19"></span>
					</div>
					<div class="text-title">
						<h5>Kami Melayani</h5>
					</div>
					<div class="text-desc">
						<p>Kami memberikan pelayanan terbaik kepada klien dan membuat mereka bahagia dengan apa yang kami lakukan.
							Kita melayani,
							tidak untuk dilayani</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="item-desc text-center">
					<div class="icons">
						<span class="iconify" data-icon="bi:person-circle" data-width="19"></span>
					</div>
					<div class="text-title">
						<h5>Klient</h5>
					</div>
					<div class="text-desc">
						<p>Kami menjadikan klien sebagai pusat dari apa yang kami kerjakan dan kami memastikan mereka nyaman dan
							semua kebutuhan
							yang diperlukan terpenuhi.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="item-desc text-center">
					<div class="icons">
						<span class="iconify" data-icon="eos-icons:service-outlined" data-width="19"></span>
					</div>
					<div class="text-title">
						<h5>Saling Percaya</h5>
					</div>
					<div class="text-desc">
						<p>Kepercayaan adalah pondasi yang memperkuat layanan kami dan kepercayaan klien pada kami akan kami jaga
							dengan sebaik
							mungkin.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="item-desc text-center">
					<div class="icons">
						<span class="iconify" data-icon="mdi:ticket" data-width="19"></span>
					</div>
					<div class="text-title">
						<h5>Unggul dalam Integritas</h5>
					</div>
					<div class="text-desc">
						<p>Integritas sangat penting. Kami memberikan integritas penuh untuk apa yang kami lakukan dan berikan
							kepada klien</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="item-desc text-center">
					<div class="icons">
						<span class="iconify" data-icon="clarity:group-solid" data-width="19"></span>
					</div>
					<div class="text-title">
						<h5>Hargai Anggota</h5>
					</div>
					<div class="text-desc">
						<p>Kami menghargai, memberikan tantangan, dan menghargai para member. Menghargai pekerjaan anggota kami
							sangat penting.
							Karena tanpa mereka kita bukanlah apa-apa.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


{{-- Section home sect 4 --}}
<section class="section-home-sect-4">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="item-text text-center">
					<div class="text-title">
						<h3>Jasa Apa yang Kami Sediakan?</h3>
					</div>
					<div class="text-desc">
						<p>Ini adalah beberapa layanan terbaik yang dapat kami berikan kepada anda</p>
					</div>
				</div>

				<div class="blocks-pict">
					<div class="row">
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict">
									<img src="{{ asset('assets/img/home-1.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>Prewedding</p>
									<a href="#"></a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict">
									<img src="{{ asset('assets/img/home-2.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>Lamaran</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict">
									<img src="{{ asset('assets/img/home-3.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>Wedding</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict">
									<img src="{{ asset('assets/img/home-4.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>Wedding</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict ">
									<img src="{{ asset('assets/img/home-5.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>wedding</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict">
									<img src="{{ asset('assets/img/home-6.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>wedding</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict">
									<img src="{{ asset('assets/img/home-7.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>wedding</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="items-card">
								<div class="pict">
									<img src="{{ asset('assets/img/home-8.jpg') }}" alt="" class="img img-fluid w-100">
								</div>
								<div class="text-desc text-center">
									<p>wedding</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


{{-- Section Home sect 5 --}}
<section class="section-home-sect-5">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="item-text text-center">
					<div class="text-title">
						<h3>Partner Kerja Kami Wedding Organizer Dhewi Lesatri</h3>
					</div>
					<div class="text-desc">
						<p>Ini adalah partner kerja terbaik kami yang sudah kami sediakan</p>
					</div>
				</div>

				{{-- <div class="item-pict"> --}}
					<div class="row">
						<div class="col-md-3">
							<div class="pict">
								<img src="{{ asset('assets/img/tim-1.jpg') }}" alt="" class="img img-fluid w-100">
							</div>
							<div class="text-title text-center">
								<p>Dhewi</p>
							</div>
							<div class="link-sosmed-icons text-center">

								<a href="" class="items-icons ">
									<span class="iconify icon-ig" data-icon="fa-brands:instagram"></span>
									<span class="iconify icon-fb" data-icon="fa-brands:facebook-square"></span>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="pict">
								<img src="{{ asset('assets/img/tim-2.jpg') }}" alt="" class="img img-fluid w-100">
							</div>
							<div class="text-title text-center">
								<p>Siska</p>
							</div>
							<div class="link-sosmed-icons text-center
							">
								<a href="" class="items-icons ">
									<span class="iconify icon-ig" data-icon="fa-brands:instagram"></span>
									<span class="iconify icon-fb" data-icon="fa-brands:facebook-square"></span>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="pict">
								<img src="{{ asset('assets/img/tim-3.jpg') }}" alt="" class="img img-fluid w-100">
							</div>
							<div class="text-title text-center">
								<p>Dinda</p>
							</div>
							<div class="link-sosmed-icons text-center">
								<a href="" class="items-icons ">
									<span class="iconify icon-ig" data-icon="fa-brands:instagram"></span>
									<span class="iconify icon-fb" data-icon="fa-brands:facebook-square"></span>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="pict">
								<img src="{{ asset('assets/img/tim-4.jpg') }}" alt="" class="img img-fluid w-100">
							</div>
							<div class="text-title text-center">
								<p>Satria</p>
							</div>
							<div class="link-sosmed-icons  text-center">
								<a href="" class="items-icons ">
									<span class="iconify icon-ig" data-icon="fa-brands:instagram"></span>
									<span class="iconify icon-fb" data-icon="fa-brands:facebook-square"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


{{-- Section home sect 6 --}}
<section class="section-home-sect-6">
	<div class="bg-parallax" data-parallax="scroll" data-z-index="1" data-image-src="../assets/img/3.jpg">
		<div class="container">
			<div class="inner text-content">
				<div class="blocks-items">
					<div class="item-text text-center">
						<div class="text-title">
							<h3>Testimoni dari klien-klien kami</h3>
						</div>
						<div class="text-desc">
							<p>Ini adalah beberapa kata-kata indah dari klien kami yang mendorong kami untuk terus memberikan layanan
								terbaik</p>
						</div>
					</div>
					<div class="testimoni-carousel owl-carousel owl-theme owl-loaded">

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-1.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Sinta</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero?</p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-2.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Firda</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero? Lorem ipsum dolor sit amet
										consectetur,
										adipisicing elit. Nesciunt, ad. Est perferendis, ab culpa expedita laborum, blanditiis laudantium
										esse
										architecto </p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-3.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Dinda</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero? Lorem ipsum dolor, sit amet
										consectetur
										adipisicing elit.</p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-4.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Salsa</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tenetur quo, neque ullam aperiam earum
										maiores
										unde . Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, eligendi aspernatur?</p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-5.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Irma</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea Lorem ipsum dolor sit amet
										consectetur,
										adipisicing elit., neque ullam aperiam earum
										maiores
										unde harum voluptatem accusantium.</p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-2.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Sindi</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tenetur quo, neque ullam aperiam earum
										maiores
										unde harum voluptatem accusantium.</p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-6.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Putri</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tenetur quo, neque ullam aperiam earum
										maiores
										unde harum voluptatem accusantium.</p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-7.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Fina</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tenetur quo, neque ullam aperiam earum
										maiores
										unde harum voluptatem accusantium.</p>
								</div>
							</div>
						</div>

						<div class="item-testimoni">
							<div class="pict">
								<img src="{{ asset('assets/img/card-carousel-8.jpg') }}" alt="">
							</div>
							<div class="item-text">
								<div class="text-title">
									<h3>Dini</h3>
								</div>
								<div class="text-desc">
									<hr>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tenetur quo, neque ullam aperiam earum
										maiores
										unde harum voluptatem accusantium.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</section>


{{-- Section home sect-7--}}
<section class="section-home-sect-7">
	<div class="container-fluid">
		<div class="inner text-content">
			<div class="blocks-items m-0">
				<hr>
				<div class="owl-carousel owl-theme mx-auto" id="owl-logo">
					<div class="item">
						<div class="logo">
							<img src="{{ asset('assets/img/logo-1.jpg') }}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="logo">
							<img src="{{ asset('assets/img/logo-2.jpg') }}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="logo">
							<img src="{{ asset('assets/img/logo-3.jpg') }}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="logo">
							<img src="{{ asset('assets/img/logo-4.jpg') }}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="logo">
							<img src="{{ asset('assets/img/logo-5.jpg') }}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="logo">
							<img src="{{ asset('assets/img/logo-6.jpg') }}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="logo">
							<img src="{{ asset('assets/img/logo-7.jpg') }}" alt="">
						</div>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</section>

{{-- Section home sect 8 --}}
<section class="section-home-sect-8">
	<div class="container">
		<div class="inner text-content">
			<div class="blocks-items">
				<div class="row">
					<div class="col-md-6">
						<div class="link-yt">
							<iframe width="550" height="330" src="https://www.youtube.com/embed/kgMgKKeY7s8"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-6">
						<div class="item-text">
							<div class="text-title">
								<h3>Sukseskan Acaramu Bersama Kami</h3>
							</div>
							<div class="text-desc">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit possimus eligendi in porro accusantium
									distinctio quis. fuga distinctio et voluptatibus
									accusamus, tenetur quis officia.</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quae molestias et inventore, nisi
									ratione facere labore, voluptatem at, quasi vitae optio aliquid dolorum quas reiciendis porro? Ut,
									fugiat rem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ab?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>


@endsection