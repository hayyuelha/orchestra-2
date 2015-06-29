@extends('layouts.master')
@section('content')
<div class="content_middle">
	<div class="container">
   		<div class="content_middle_box_ed">
            <div class="top_grid">
   			    <div class="grid1 col-md-12">
   				    <div class="view view-first">
                        <div class="index_img_orgbottom"><img src="/images/angklung1.jpg" class="img-responsive" alt=""/></div>
   				        <div class="mask" href="#">
                        	<p> Bubuy Bulan adalah lagu dari Jawa Barat. Lalalala lalalalalalala </p>
                        	<div class="info"><i class="search"> </i> Show More</div>
                        </div>
                    </div> 
                    <i class="songicon"></i>
   				    <div class="inner_wrap">
	   				 	<h1 class="grey">BUBUY BULAN</h1>
	   				 	<p class="star1">
		                    oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a> | 
		                    <a href="#"> <span class="fa fa-code-fork"> fork</a> | 
		                    <a href="#"> <span class="fa fa-plus"> add to playlist</a>
		                </p>
		                <div id="jquery_jplayer_1" class="jp-jplayer"></div>
							<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
							  <div class="jp-type-single">
							    <div class="jp-gui jp-interface">
							      <div class="jp-volume-controls">
							        <button class="jp-mute" role="button" tabindex="0">mute</button>
							        <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
							        <div class="jp-volume-bar">
							          <div class="jp-volume-bar-value"></div>
							        </div>
							      </div>
							      <div class="jp-controls-holder">
							        <div class="jp-controls">
							          <button class="jp-play" role="button" tabindex="0">play</button>
							          <button class="jp-stop" role="button" tabindex="0">stop</button>
							        </div>
							        <div class="jp-progress">
							          <div class="jp-seek-bar">
							            <div class="jp-play-bar"></div>
							          </div>
							        </div>
							        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
							        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
							        <div class="jp-toggles">
							          <button class="jp-repeat" role="button" tabindex="0">repeat</button>
							        </div>
							      </div>
							    </div>
							    <div class="jp-details">
							      <div class="jp-title" aria-label="title">&nbsp;</div>
							    </div>
							    <div class="jp-no-solution">
							      <span>Update Required</span>
							      To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							    </div>
							  </div>
							</div>
	   				    <div class="row">
							<div class="col-sm-7">
								<h1>WIKI</h1>
								<p>Bubuy Bulan adalah lagu daerah Jawa Barat yang lalalala lililili</p>
							</div>
							<div class="col-sm-3">
								<p>Lagu ini dapat dimainkan dengan:</p>
								<ul>
									<li>Angklung</li>
									<li>Suling</li>
								</ul>
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
    <script src="{{asset('js/player/jplayer/dist/jplayer/jquery.jplayer.js')}}"></script>
@endsection