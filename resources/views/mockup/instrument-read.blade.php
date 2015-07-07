@extends('layouts.master')
@section('content')
<div class="content_middle">
	<div class="container">
   		<div class="content_middle_box_ed">
            <div class="top_grid">
   			    <div class="grid1 col-md-12">
   				    <div class="view">
                        <div class="index_img_orgbottom"><img src="/images/angklung1.jpg" class="img-responsive" alt=""/></div>
                    </div> 
                    <i class="songicon"></i>
   				    <div class="inner_wrap">
	   				 	<h1 class="grey">ANGKLUNG</h1>
	   				 	<p class="star1">
		                    diunggah oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a>
		                </p>
	   				    <div class="row">
							<div class="col-sm-7 wiki-music">
								<p>Angklung adalah alat musik multitonal (bernada ganda) yang secara tradisional berkembang dalam masyarakat Sunda di Pulau Jawa bagian barat. Alat musik ini dibuat dari bambu, dibunyikan dengan cara digoyangkan (bunyi disebabkan oleh benturan badan pipa bambu) sehingga menghasilkan bunyi yang bergetar dalam susunan nada 2, 3, sampai 4 nada dalam setiap ukuran, baik besar maupun kecil. Dictionary of the Sunda Language karya Jonathan Rigg, yang diterbitkan pada tahun 1862 di Batavia, menuliskan bahwa angklung adalah alat musik yang terbuat dari pipa-pipa bambu, yang dipotong ujung-ujungnya, menyerupai pipa-pipa dalam suatu organ, dan diikat bersama dalam suatu bingkai, digetarkan untuk menghasilkan bunyi. Angklung terdaftar sebagai Karya Agung Warisan Budaya Lisan dan Nonbendawi Manusia dari UNESCO sejak November 2010.</p>
							</div>
							<div class="col-md-5">
								<div class="row notes">
									<h2>Coba Mainkan</h2>
                    <div class="notes-group">
                        <ul>
                            <li><a class="btn btn-primary btn-instrument-read playC" >C</a></li>
                            <li><a class="btn btn-primary btn-instrument-read" disabled>C#</a></li>
                            <li><a class="btn btn-primary btn-instrument-read playD" >D</a></li>
                            <li><a class="btn btn-primary btn-instrument-read" disabled>D#</a></li>
                            <li><a class="btn btn-primary btn-instrument-read playE" >E</a></li>
                            <li><a class="btn btn-primary btn-instrument-read playF" >F</a></li>
                        </ul>
                    </div>
                    <div class="notes-group">
                        <ul>
                            <li><a class="btn btn-primary btn-instrument-read" disabled>F#</a></li>
                            <li><a class="btn btn-primary btn-instrument-read playG" >G</a></li>
                            <li><a class="btn btn-primary btn-instrument-read" disabled>G#</a></li>
                            <li><a class="btn btn-primary btn-instrument-read playA" >A</a></li>
                            <li><a class="btn btn-primary btn-instrument-read" disabled>A#</a></li>
                            <li><a class="btn btn-primary btn-instrument-read playB" >B</a></li>
                        </ul>
                    </div>
								</div>
								<hr/>
								<div class="row played-with">
									<p>Lagu yang dimainkan dengan alat ini:</p>
									<ul>
										<li><a href="#">Lagu 1</a></li>
										<li><a href="#">Lagu 2</a></li>
									</ul>
								</div>
								
							</div>
						</div>
   				    </div>
			    </div>
   			    <div class="clearfix"> </div>
   			</div>
   		</div>
   	</div>
</div>

@endsection
@section('script')
	@parent
	<script type="text/javascript">
	$(document).ready(function() {
        var C = document.createElement('audio');
        C.setAttribute('src', '{{asset("music/bonangbarung1.wav")}}');
        var D = document.createElement('audio');
        D.setAttribute('src', '{{asset("music/bonangbarung2.wav")}}');
        var E = document.createElement('audio');
        E.setAttribute('src', '{{asset("music/bonangbarung3.wav")}}');
        var F = document.createElement('audio');
        F.setAttribute('src', '{{asset("music/bonangbarung4.wav")}}');
        var G = document.createElement('audio');
        G.setAttribute('src', '{{asset("music/bonangbarung5.wav")}}');
        var A = document.createElement('audio');
        A.setAttribute('src', '{{asset("music/bonangbarung5.wav")}}');
        var B = document.createElement('audio');
        B.setAttribute('src', '{{asset("music/bonangbarung7.wav")}}');
        $.get();
        C.addEventListener("load", function() {
        C.play();
        }, true);
        D.addEventListener("load", function() {
        D.play();
        }, true);
        E.addEventListener("load", function() {
        E.play();
        }, true);
        F.addEventListener("load", function() {
        F.play();
        }, true);
        G.addEventListener("load", function() {
        G.play();
        }, true);
        A.addEventListener("load", function() {
        A.play();
        }, true);
        B.addEventListener("load", function() {
        B.play();
        }, true);
        $('.playC').click(function() {
        C.play();
        });
        $('.playD').click(function() {
        D.play();
        });
        $('.playE').click(function() {
        E.play();
        });
        $('.playF').click(function() {
        F.play();
        });
        $('.playG').click(function() {
        G.play();
        });
        $('.playA').click(function() {
        A.play();
        });
        $('.playB').click(function() {
        B.play();
        });
	});
</script>
@endsection