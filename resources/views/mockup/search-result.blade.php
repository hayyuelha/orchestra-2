@extends('layouts.master')
@section('content')
<div class="content_top">
   	<div class="container">
   		<div class="col-md-8 bottom_nav">
   		   <div class="content_menu">
   				<ul>
   					<li class="active"><a href="#">Semua</a></li> 
   					<li><a href="#">Alat Musik</a></li> 
   					<li><a href="#">Lagu</a></li> 
   				</ul>
			   </div>
		   </div>
   		<div class="col-md-4 content_dropdown1">
            <div class= "sort" > Sort by : </div>
   		   <div class="content_dropdown">    
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
   			<div class="col-md-12">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="/images/pic1.jpg" class="img-responsive" alt=""/></div>
   				    <div class="sale">$2.980</div>
   			          <div class="mask">
                        <div class="info"><i class="search"> </i> Show More</div>
                        <ul class="mask_img">
                        	<li class="star"><img src="/images/star.png" alt=""/></li>
                        	<li class="set"><img src="/images/set.png" alt=""/></li>
                        	<div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                   <i class="home"></i>
   				 <div class="inner_wrap">
   				 	<h3>2 bedroom house for rent in Dubai</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">Vision Agency</h4>
   				 	  <li><a href="#"> <img src="/images/star1.png" alt="">(236)</a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
   			<div class="clearfix"> </div>
   		 </div>
         </div>
      </div>
   </div>
@endsection
