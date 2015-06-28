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
   	  <div class="content_middle_box">
          <div class="top_grid">
   			<div class="grid1 col-md-12">
   				<div class="view view-first">
                  <div class="index_img"><img src="/images/angklung1.jpg" class="img-responsive" alt=""/></div>
   				       <div class="mask" href="#">
                        <p> Angklung adalah alat musik dari Jawa Barat. Lalalala lalalalalalala </p>
                        <div class="info"><i class="search"> </i> Show More</div>
                       </div>
                   </div> 
                   <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h1 class="grey">ANGKLUNG</h1>
   				 	<p class="star1">
   				 	  oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a>
   				 	</p>
   				 </div>
			   </div>
   			<div class="clearfix"> </div>
            <div class="grid1 col-md-12">
               <div class="view view-first">
                  <div class="index_img"><img src="/images/angklung1.jpg" class="img-responsive" alt=""/></div>
                      <div class="mask" href="#">
                        <p> Bubuy Bulan adalah lagu dari Jawa Barat. Lalalala lalalalalalala </p>
                        <div class="info"><i class="search"> </i> Show More</div>
                       </div>
                   </div> 
                   <i class="home1"></i>
                 <div class="inner_wrap">
                  <h1 class="grey">Bubuy Bulan</h1>
                  <p class="star1">
                    oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a> | 
                    <a href="#"> <span class="fa fa-code-fork"> fork</a> | 
                    <a href="#"> <span class="fa fa-plus"> add to playlist</a>
                  </p>
                </div>
              </div>
            <div class="clearfix"> </div>
   		 </div>
         </div>
      </div>
   </div>
@endsection
