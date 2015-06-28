@extends('layouts.master')
@section('content')
<div class="homepage-landing">
	<div class="landing-container">
		<div class="slideshow-bg">
			<div class="landing-descriptor">
				<h1>Nikmati dan mainkan musik dari seluruh Nusantara</h1>
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
						<a href="#">
							<img src="{{asset('images/gamelan1.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa</a>
							</h3>
							<div class = "row showc">
								<div class="col-sm-4">
									<p> Gamelan lorem blah </p>
								</div>
								<div class="col-sm-2">
									<span class="love-i"></span>
								</div>
								<div class="col-sm-2">
									10
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="/images/gamelan1.jpg" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="{{asset('/images/gamelan1.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="item ">
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="{{asset('images/gamelan1.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa 2</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="{{asset('images/gamelan1.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa 2</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="{{asset('images/gamelan1.jpg')}}" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa 2</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="item ">
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="/images/gamelan1.jpg" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa 3</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="/images/gamelan1.jpg" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa 3</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="living_box">
						<a href="#">
							<img src="/images/gamelan1.jpg" class="img-responsive" alt>
							<span class="sale-box">
								<span class="sale-label">Play</span>
							</span>
						</a>
						<div class="living_desc desc1">
							<h3>
								<a href="#">Gamelan jawa 3</a>
							</h3>
							<p> Gamelan lorem blah </p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<div class="offering">
	<h2> Beritahu dunia tentang musik daerahmu sekarang </h2>
	<ul class="icons wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; -webkit-animation-delay: 0.4s; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
  	  	 <li><i class="icon4"> </i><span class="four"> </span></li>
  	  	 <li><i class="icon4"> </i></li>
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