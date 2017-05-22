	@extends((is_mobile()) ? 'guests.master-m' : 'guests.master1')
	<?php $title = $video->title ?>
	@section('head')
	<title>{{ $title }} - Video-HQApps</title>
	<meta property="og:url" content="{{url('video')}}/{{$video->slug}}.{{$video->id}}.html"/>
	<meta property="og:image" content="{!! asset('upload/images')!!}/{!! $video->image!!}">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="800">
	<meta property="og:image:height" content="420">
	<meta property="og:type" content="article">
	<meta property="og:locale" content="vi_VN">
	<meta property="og:title" content="{!! $video->title!!}">
	<meta property="og:description" content="{!! $video->description!!}">
	<link rel="stylesheet" href="{{ asset('template/css/mediaelementplayer.min.css') }}">
        	<link rel="stylesheet" href="{{ asset('template/css/normalize.min.css') }}">
        	<link rel="stylesheet" href="{{ asset('template/css/teplayer.css') }}">
	@endsection
	@section('content')
		<script>
			var lantoa_video_start = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=2246899727&videoad_start_delay=0&hl=vi&max_ad_duration=15000";
			var lantoa_video_pause = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=3723632924&videoad_start_delay=10000&hl=vi&max_ad_duration=15000";
			var lantoa_video_end = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=5200366125&videoad_start_delay=-1&hl=vi&max_ad_duration=15000";
			var opt = {
				id: 'video_player',
				key: "OTdiNmUyMTk1ZGM4MTU4YzYzN2ZiNmJhM2Q5NmZkYjBhYzIzYjc2MTBiZjc5Y2QxYmRiYzEzODQwYmJhYWFjZQ==",
				locale: "vi",
				theme: "white", //default, black, red, white, yellow, green, dark-green, blue, dark-blue, pink
				sources: [
				  {
					src: "{!! $video->url !!}",
					type: "video/mp4",
				  }
				],
				width: '779',
				<?php echo (is_mobile() ?  "height:'799'," :  "height:'449',");?>
				responsive: true,
				mobileNativeControl: false,
				title: "{!! $video->title!!}",
				poster: "{{ asset('upload/images/260x137')}}/{!! $video->image !!}",
				name: "Lantoa.net",
				site_url: "http://video.hqapps.net/",
				video_url: "http://videos.hqapps.net/",
				//embed_url: "",
				logo: "http://Theme::asset.lantoa.net/assets/img/logo.png",
				adLabel: "Quảng cáo",
				isAds: true,
				pre: {
					status: true,
					tag: lantoa_video_start,
					forceNonLinearFullSlot: true,
				},
				// mid: {
					// status: true,
					// tag: lantoa_video_pause,
					// forceNonLinearFullSlot: true,
				// },
				post: {
					status: true,
					tag: lantoa_video_end,
					forceNonLinearFullSlot: true,
				},
				
				controls_videos: true,
				//last_videos: true,
				videos_type: "default",
				autoPlay: true, 
				engageya: {
					pubid: 169635,
					wid: 94977,
					webid: 137609
				},
				//video_items: 8,
				mobile_theme: true,
				debug: true

			};

			window.onload = function() {
				TE.createPlayer(opt);
			};
		</script>
		<h2>{!! $video->title!!}</h2>
		@if(is_mobile())
			<div class="rubric-title">Đang hot</div>
			<div id="organic-below-article"  data-ng-init="getSideBarVideo('hot')">
				<div class="organiccontainer">
					<div class="organicelement third" ng-repeat="video in dataHot">
						<a href="{{url('video')}}/{%video.slug%}.{%video.id%}.html">
							<div class="organicpic third">
								<img src="{{asset('upload/images/316x166')}}/{%video.image%}">
							</div>
							<div class="organictitle third">{%video.title%}</div>
						</a>
					</div>
					
				</div>
			</div>
			<div class="rubric-title">Bạn có thể thích</div>
			<div id="organic-below-article" data-ng-init="getSideBarVideo('random')">
				<div class="organiccontainer" ng-repeat="video in dataRandom">
					<div class="organicelement third" ng-repeat="video in dataRandom">
						<a href="{{url('video')}}/{%video.slug%}.{%video.id%}.html">
							<div class="organicpic third">
								<img class="lazy" data-original="{{asset('upload/images/316x166')}}/{%video.image%}">
							</div>
							<div class="organictitle third">{%video.title%}</div>
						</a>
					</div>
				</div>
				<div id="last"></div>
			</div>
			<div style="padding-bottom:10px" id="load-more">
				<div id="loadMoreQuizz"><span class="loading"></span></div>
				<div class="btn btn-lg btn-info btn-block"> Nhiều hơn </div>
			</div>

	                @else
		<div class="rubric-title">Mới nhất</div>
	                    <div id="organic-below-article" data-ng-init="getSideBarVideo('random')">
	                        <div class="organiccontainer">
	                            <div class="organicelement third" ng-repeat="video in dataRandom">
	                                <a href="{{url('video')}}/{%video.slug%}.{%video.id%}.html">
	                                    <div class="organicpic third">
	                                        <img  src="{{asset('upload/images/316x166')}}/{%video.image%}" width="198" height="104">
	                                    </div>
	                                    <div class="organictitle third">{%video.title%}</div>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="rubric-title">Bạn có thể thích</div>
	                    <div id="organic-below-article" data-ng-init="getSideBarVideo('random')">
	                        <div class="organiccontainer">
	                            <div class="organicelement third" ng-repeat="video in dataRandom">
	                                <a href="{{url('video')}}/{%video.slug%}.{%video.id%}.html">
	                                    <div class="organicpic third">
	                                        <img class="lazy" data-original="{{asset('upload/images/316x166')}}/{%video.image%}" width="198" height="104">
	                                    </div>
	                                    <div class="organictitle third">{%video.title%}</div>
	                                </a>
	                            </div>
	                        </div>
	                        <div style="padding-bottom:10px" id="load-more">
	                            <div id="loadMoreQuizz"><img src="{{ asset('images/quizloader3.gif') }}"></div>
	                            <div class="btn btn-lg btn-info btn-block">Nhiều hơn </div>
	                        </div>
	                    </div>
                </div>
            <div id="sidebar"  data-ng-init="getSideBarVideo('hot')">
                <div class="rubric-title">Hot nhất</div>
                <div id="organic-below-article">
                    <div class="organiccontainer">
                        <div class="organicelement" ng-repeat="video in dataHot">
                            <a href="{{url('video')}}/{%video.slug%}.{%video.id%}.html">
                                <div class="organicpic" style="background-image: url({{asset('upload/images/316x166')}}/{%video.image%});background-repeat: no-repeat;width:300px"></div>
                                <div class="organictitle">{%video.title%}</div>
                            </a>
                        </div>
                        
                    </div>
                </div>
	                @endif

@endsection
@section('footer')
<script src="{{ asset('template/js/jquery.js') }}"></script>
<script src="{{ asset('template/js/_teplayer.min.js') }}"></script>
<script src="{{ asset('template/js/mediaelement-and-player.js') }}"></script>
<script src="{{ asset('template/js/jquery.lazyload.min.js') }}" type="text/javascript"></script>
<script src="https://imasdk.googleapis.com/js/sdkloader/ima3.js" type="text/javascript"></script>
<script  src="<?php echo asset('app/controller/guests/VideoController.js') ; ?>"> </script>
<script>
	function fbShare() {
		var e =  "{{ url('video')}}/{{ $video->id }}/{{ $video->slug }}.html?utm_source=Facebook&utm_medium=FacebookShare&utm_campaign=NextActivity";
		var t = 626
		  , o = 496
		  , n = screen.width / 2 - t / 2
		  , r = screen.height / 2 - o / 2 - 50;
		window.open("https://www.facebook.com/sharer/sharer.php?u=" + e, "facebook-share-dialog", "width=" + t + ",height=" + o + ",top=" + r + ",left=" + n)
	}
	$( document ).ready(function() {
	    	$("#shareResult").click(function(){
			fbShare();
			if (typeof ga === "function") { 
				ga('send', 'event', 'share', 'click', '{{ $video->slug }}');
			}
		});
		setTimeout(function(){
			$("img.lazy").lazyload({thresshold:100,failure_limit:10}).removeClass("lazy").addClass("lazyloaded")
		},1200);
	});

</script>

@endsection

