@extends('layouts.master')
@section('content')
<div class="content_top">
   	<div class="container top_search">
   		<div class="col-md-8 bottom_nav">
   		    <div class="content_menu">
     				<ul>
     					<li class="active"><a href="#">Semua</a></li> 
     					<li><a href="#">Alat Musik</a></li> 
     					<li><a href="#">Lagu</a></li> 
     				</ul>
			    </div>
		  </div>
   		<div class="col-md-4 content_dropdown1 row">
          <div class= "col-sm-4 sort" > Sort by : </div>
   		    <div class="col-sm-4 content_dropdown">    
		         <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
               	<option value="0">A-Z</option>	
					     	<option value="1">By Date</option>
                <option value="2">Most Popular</option>
                <option value="5">Blahblah </option>
						    <option value="5"></option>
		         </select>
		      </div>  
   		</div>
   	</div>
</div>
<div class="content_middle">
	<div class="container">
    <div class="search-title">
      <h2> Hasil Pencarian untuk "Jawa Barat" </h2>
    </div>
   	<div class="content_middle_box">
      <div class="top_grid">
   			<div class="grid1 col-md-10">
   				<div class="view view-first">
            <div class="index_img"><img src="/images/instrument/angklung.jpg" class="img-responsive" alt=""/></div>
			      <div class="mask" href="#">
              <p> Angklung adalah alat musik dari Jawa Barat.</p>
              <div class="info"><i class="search"> </i> Show More</div>
            </div>
          </div> 
          <i class="instrument1"></i>
   				<div class="inner_wrap">
   				 	<h1 class="grey">ANGKLUNG</h1>
   				 	<p class="star1">
   				 	  oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a>
   				 	</p>
   				</div>
			  </div>
   			<div class="clearfix"> </div>
        <div class="grid1 col-md-10">
          <div class="view view-first">
            <div class="index_img"><img src="/images/music-banner.jpg" class="img-responsive" alt=""/></div>
            <div class="mask" href="#">
              <p> Bubuy Bulan adalah lagu dari Jawa Barat.</p>
              <div class="info"><i class="search"> </i> Show More</div>
            </div>
          </div> 
          <i class="music1"></i>
          <div class="inner_wrap">
            <h1 class="grey">Bubuy Bulan</h1>
            <p class="star1">
              oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a> | 
              <a href="#"> <span class="fa fa-code-fork"> aransemen</a> | 
              <a href="#"> <span class="fa fa-plus"> tambah ke playlist</a>
            </p>
          </div>
        </div>
        <div class="clearfix"> </div>
        <div class="grid1 col-md-10">
          <div class="view view-first">
            <div class="index_img"><img src="/images/instrument/kecapi.jpg" class="img-responsive" alt=""/></div>
            <div class="mask" href="#">
              <p> Kecapi adalah alat musik dari Jawa Barat.</p>
              <div class="info"><i class="search"> </i> Show More</div>
            </div>
          </div> 
          <i class="instrument1"></i>
          <div class="inner_wrap">
            <h1 class="grey">Kecapi</h1>
            <p class="star1">
              oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a> | 
              <a href="#"> <span class="fa fa-code-fork"> aransemen</a> | 
              <a href="#"> <span class="fa fa-plus"> tambah ke playlist</a>
            </p>
          </div>
        </div>
        <div class="clearfix"> </div>
   		</div>
    </div>
  </div>
</div>
@endsection
