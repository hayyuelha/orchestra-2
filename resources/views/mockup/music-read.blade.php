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
	   				 	<h1 class="grey">BUBUY BULAN</h1>
	   				 	<p class="star1">
		                    oleh <a href="#"> AFIK </a> | <a href="#"> <span class="fa fa-heart"> suka (236)</a> | 
		                    <a href="#"> <span class="fa fa-code-fork"> fork</a> | 
		                    <a href="#"> <span class="fa fa-plus"> add to playlist</a>
		                </p>
	   				    <div class="row">
							<div class="col-sm-7 wiki-music">
								<p>Bubuy Bulan adalah lagu daerah Jawa Barat yang diciptakan oleh Benny Korda. Adapun lirik lagu Bubuy Bulan adalah sebagai berikut:</p>
								<blockquote>
									Bubuy bulan</br>
									Bubuy bulan sangray bentang</br>
									Panon poe</br>
									Panon poe disasate</br>
									</br>
									Unggal bulan</br>
									Unggal bulan abdi teang</br>
									Unggal poe</br>
									Unggal poe oge hade</br>
									</br>
									Situ Ciburuy</br>
									laukna hese dipancing</br>
									Nyeredet hate</br>
									Ningali ngeplak caina</br>
									</br>
									Duh eta saha</br>
									Nu ngalangkung unggal enjing</br>
									Nyeredet hate</br>
									Ningali sorot socana</br>
								</blockquote>
							</div>
							<div class="col-sm-3">
								<div class="row">
									<div id="jquery_jplayer_1" class="jp-jplayer"></div>
									<div id="jp_container_1" class="jp-audio">
									  <div class="jp-type-single">
									 
									    <div class="jp-gui jp-interface">
									 
									        <ul class="jp-controls">
									          <li><a href="javascript:;" class="jp-play" tabindex="1">&#61515;</a></li>
									          <li><a href="javascript:;" class="jp-pause" tabindex="1">&#61516;</a></li>
									          <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">&#61480;</a></li>
									          <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">&#61478;</a></li>
									        </ul>
									 
									        <div class="jp-progress">
									          <div class="jp-seek-bar">
									            <div class="jp-play-bar"></div>
									          </div>
									        </div>
									 
									        <div class="jp-time-holder">
									          <div class="jp-current-time"></div>
									        </div>
									 
									        <div class="jp-volume-bar">
									          <div class="jp-volume-bar-value"></div>
									        </div>
									 
									    <div class="jp-no-solution">
									      <span>Update Required</span>
									      To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
									    </div>
									  </div>
									</div>
									</div>
								</div>
								<div class="row played-with">
									<p>Lagu ini dapat dimainkan dengan:</p>
									<ul>
										<li>Angklung</li>
										<li>Suling</li>
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
    <script src="{{asset('js/player/jplayer/dist/jplayer/jquery.jplayer.js')}}"></script>
    <script type="text/javascript">
	    $(document).ready(function(){	
	      $("#jquery_jplayer_1").jPlayer({
	        ready: function() {
	          $(this).jPlayer("setMedia", {
	            mp3: "{{asset('music/kicir-kicir.mp3')}}"
	          }).jPlayer("play");
	          var click = document.ontouchstart === undefined ? 'click' : 'touchstart';
	          var kickoff = function () {
	            $("#jquery_jplayer_1").jPlayer("play");
	            document.documentElement.removeEventListener(click, kickoff, true);
	          };
	          document.documentElement.addEventListener(click, kickoff, true);
	        },
	        swfPath: "/js",
	        loop: false
	      });
	    });
	  </script>
@endsection