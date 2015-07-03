@extends('layouts.master')
@section('content')
<div class="homepage-landing">
	<div class="landing-container">
		<div class="slideshow-bg">
			<div class="landing-descriptor">
				<h1>Nikmati dan mainkan musik dari seluruh Nusantara</h1>
			</div>
			<div class="landing-descriptor">
				<a href="#"><h3> Coba jelajah nusantara <span class="fa fa-chevron-right"> </h3></a>
			</div> 
		</div>
	</div>
</div>
<div class="homepage-showcase">
	<div class="educate-grid carousel-slide" id="myCarousel" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/instrument/bonangbarung.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Demo</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Bonang Barung</a>
							</h3>
							<div class ="row showc">
								<div class="col-sm-8">
									<p> Bonang Barung adalah salah satu gamelan jawa....</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (77) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/instrument/gordang.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Demo</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gordang</a>
							</h3>
							<div class = "row showc">
								<div class="col-sm-8">
									<p>Gordang adalah alat musik khas Batak Toba...</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (159) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/instrument/gambus.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Demo	</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gambus</a>
							</h3>
							<div class = "row showc">
								<div class="col-sm-8">
									<p>Gambus adalah alat musik khas Jambi...</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (200) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="item">
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/instrument/kendang.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Demo</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Kendang</a>
							</h3>
							<div class ="row showc">
								<div class="col-sm-8">
									<p> Kendang adalah salah satu gamelan jawa....</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (77) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/instrument/serunai.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Demo</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Serunai</a>
							</h3>
							<div class = "row showc">
								<div class="col-sm-8">
									<p>Serunai adalah alat musik khas Sumatra...</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (159) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/instrument/kolintang.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Demo</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Kolintang</a>
							</h3>
							<div class = "row showc">
								<div class="col-sm-8">
									<p>Kolintang adalah alat musik khas Minahasa...</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (200) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="item">
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/music-banner.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Kicir-kicir</a>
							</h3>
							<div class ="row showc">
								<div class="col-sm-8">
									<p>Kicir-kicir adalah lagu khas Jakarta....</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (77) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/music-banner.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Prau Layar</a>
							</h3>
							<div class = "row showc">
								<div class="col-sm-8">
									<p>Prau layar adalah lagu khas daerah jawa Tengah...</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (159) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a class="living-top" href="#">
							<img src="{{asset('images/music-banner.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Bubuy Bulan</a>
							</h3>
							<div class = "row showc">
								<div class="col-sm-8">
									<p>Bubuy Bulan adalah lagu daerah Jawa Barat...</p> 
								</div>
								<div class="col-sm-offset-1 col-sm-3">
									<a href="#" ><span class="fa fa-heart"></span> (200) </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<div class="offering">
	<h2> BERITAHU DUNIA TENTANG MUSIK DAERAHMU SEKARANG </h2>
	<h3> Tambah alat musik baru atau buat lagu baru untuk dimainkan oleh orang lain </h3>
	<ul class="icons wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; -webkit-animation-delay: 0.4s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
  	  	 <li><a href="#"><i class="instrument"></i><p>Tambah instrumen</p></a></li>
  	  	 <li><a href="#"><i class="song"></i><p>Buat lagu</p></a></li>
  	</ul>
</div>
@endsection

@section('script')
<script>
$('.myCarousel').carousel({
    interval: 50 //changes the speed
})
</script>
@endsection