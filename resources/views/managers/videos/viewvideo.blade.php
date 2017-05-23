<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="{!! asset('template/css/mediaelementplayer.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('template/css/normalize.min.css') !!}">	
	<link rel="stylesheet" href="{!! asset('template/css/teplayer.css') !!}">
	    <script src="https://imasdk.googleapis.com/js/sdkloader/ima3.js" type="text/javascript"></script>
	<script src="http://lantoa.net/themes/modern/teplayer/jquery.js"></script>
	<script src="{!! asset('template/js/_teplayer.min.js') !!}"></script>
	<script src="{!! asset('template/js/mediaelement-and-player.js') !!}"></script>
		<style>
		body {
			margin: 0;
			padding: 0;
		}
		.AdsLink {
		z-index:10000;
		cursor: default;
		color: #fff;
		position:absolute;
		top: 40%;
		left: 38%;		background: rgba(0,0,0,0.5);
		padding: 10px;
		display:none;
	}
	</style>
</head>
<body>
	<div id='teplayer' class='te-player-container'></div>
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
				src: '<?php 
					switch($url){
						case "local":
							echo $video->url;
						break;
						case "drive":
							echo $video->url_drive;
						break;
					}
				?>',
				type: "video/mp4",
			  }
			],
			width: '779',
			height:'449',			responsive: true,
			mobileNativeControl: false,
			title: "",
			//poster: "",
			name: "Lantoa.net",
			site_url: "http://lantoa.net/",
			video_url: "http://lantoa.net/",
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
</body>
</html>