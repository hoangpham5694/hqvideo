	@extends((is_mobile()) ? 'guests.master-m' : 'guests.master1')
	<?php $title = $video->title ?>
	<?php $domain = "http://hqapps.net/"; ?>
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
			var video_start = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=2246899727&videoad_start_delay=0&hl=vi&max_ad_duration=15000";
			var video_pause = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=3723632924&videoad_start_delay=10000&hl=vi&max_ad_duration=15000";
			var video_end = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=5200366125&videoad_start_delay=-1&hl=vi&max_ad_duration=15000";
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
				poster: "{{ asset('upload/images/316x166')}}/{!! $video->image !!}",
				name: "Lantoa.net",
				site_url: "http://video.hqapps.net/",
				video_url: "http://videos.hqapps.net/",
				//embed_url: "",
				logo: "http://hqapps.net/public/images/logo.png",
				adLabel: "Quảng cáo",
				isAds: true,
				pre: {
					status: true,
					tag: video_start,
					forceNonLinearFullSlot: true,
				},
				// mid: {
					// status: true,
					// tag: video_pause,
					// forceNonLinearFullSlot: true,
				// },
				post: {
					status: true,
					tag: video_end,
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
		@if(is_mobile())
			<div class="video-meta">
				<div class="headline">
					<h2 class="video-headline">{!! $video->title!!}</h2>
					<span class="views">{!! $video->view!!} lượt xem</span>
				</div>
				<div class="plugins">
					<div class="like">
						<div class="fb-like" data-href="{{$domain}}video/{{$video->slug}}.{{$video->id}}.html" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
					</div>
				</div>
				<div class="description">
					<span class="date">Xuất bản: {!! $video->created_at !!}</span>
					{!! $video->description!!}
				</div>
			</div>
			<aside class="related" data-ng-init="getSideBarVideo('random')">
				<div class="pannel">
					<div class="pannel-body">
						<ul class="list-unstyled">
							<a href="{{$domain}}video{%video.slug%}.{%video.id%}.html" ng-repeat="video in dataRandom"><li class="media pannel-item">
								<div class="related-thumb ">
									<img class="img-responsive" src="{{asset('upload/images/316x166')}}/{%video.image%}" alt="{%video.title%}">
									<span class="duration">{%video.duration%}</span>
								</div>
								<div class="media-body">
									<h5 class="">{%video.title%}</h5>
									<span class="views">{%video.view%} lượt xem</span>
								</div>
							</li></a>
							
							<hr/>
						</ul>
					</div>
					<!-- <div class="pannel-footer">
						<button type="button" class="btn btn-primary btn-block ajax-loadmore">Load more</button>
					</div> -->
					<div class="comments">
						<div class="comments-header">
							<h2 class="show-comments">
								<b>Comments</b>
							</h2>
						</div>
						<div id="comment-body">
							
						</div>
					</div>
				</div>
			</aside>
			

	                @else
			<div class="col-md-8 col-xs-12 main p-xs-0">
					<!-- START PLAYER -->
					<div class="row player">
						<div id='teplayer' class='te-player-container'></div>
						<script>
							var video_start = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=2246899727&videoad_start_delay=0&hl=vi&max_ad_duration=15000";
							var video_pause = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=3723632924&videoad_start_delay=10000&hl=vi&max_ad_duration=15000";
							var video_end = "http://googleads.g.doubleclick.net/pagead/ads?ad_type=video_text_image_flash&client=ca-video-pub-4629886296503257&description_url=http%3A%2F%2Flantoa.net&channel=5200366125&videoad_start_delay=-1&hl=vi&max_ad_duration=15000";
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
								poster: "{{ asset('upload/images/800x420')}}/{!! $video->image !!}",
								name: "Lantoa.net",
								site_url: "http://video.hqapps.net/",
								video_url: "http://videos.hqapps.net/",
								//embed_url: "",
								logo: "http://hqapps.net/public/images/logo.png",
								adLabel: "Quảng cáo",
								isAds: true,
								pre: {
									status: true,
									tag: video_start,
									forceNonLinearFullSlot: true,
								},
								// mid: {
									// status: true,
									// tag: video_pause,
									// forceNonLinearFullSlot: true,
								// },
								post: {
									status: true,
									tag: video_end,
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
					</div>
					<!-- END PLAYER -->
					<!-- START META -->
					<div class="row video-meta">
						<div class="headline">
							<h2 class="video-headline">{!! $video->title!!}</h2>
						</div>
						<span class="date">Xuất bản: {!! $video->created_at!!}</span>
						<div class="description">
							{!! $video->description!!}
						</div>
					</div>
					<!-- END META -->
					<!-- START COMMENT -->
					<div class="row comments">
						<h2>Comments</h2>
						<div class="fb-comments" data-href="{{$domain}}video/{{$video->slug}}.{{$video->id}}.html" data-width="100%" data-numposts="3"></div>
					</div>
					<!-- END COMMENT -->
				</div>
				<!-- END MAIN -->
				<aside class="col-md-4 col-xs-12 sidebar">
					<div class="pannel">
						<div class="pannel-header">
							<h2 class="pannel-title">Related</h2>
						</div>
						<div class="pannel-body" data-ng-init="getSideBarVideo('random')">
							<ul class="list-unstyled">
								<a href="{{$domain}}video/{%video.slug%}.{%video.id%}.html" ng-repeat="video in dataRandom"><li class="media pannel-item">
									<img class="d-flex col-md-5 img-responsive" src="{{asset('upload/images/316x166')}}/{%video.image%}" alt="{%video.title%}">
									<div class="col-md-7 media-body">
										<h5 class="">{%video.title%}</h5>
										<span class="views">{%video.view%} lượt xem</span>
									</div>
								</li></a>
								
								<hr/>
							</ul>
						</div>
						<!-- <div class="pannel-footer">
							<button type="button" class="btn btn-primary btn-block ajax-loadmore">Load more</button>
						</div> -->
					</div>
				</aside>
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

