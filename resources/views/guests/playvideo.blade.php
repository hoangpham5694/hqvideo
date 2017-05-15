	@extends('guests.master1')
	<?php $title = $video->title ?>
	@section('head')
	<meta property="og:image" content="{!! asset('upload/images')!!}/{!! $video->image!!}" />
<title>{{ $title }} - HQApps</title>



<style>
	
	
.ng-hide {
  height: 0;
  width: 0;
  background-color: transparent;
  top:-200px;
  left: 200px;
}
.main-top .game .loading-game{
	text-align: center;
	height: 400px;	
}
.main-top .game .loading-game img{
	width:100px;

}
.begin-game{
	height:400px;
	padding-top: 150px;

	background: url("{!! asset('public/mh94_guest/images/bg1.svg')!!}");
}
.game-result{
	width:730px;
}
#canvas-img img{
	width:100%;
}
</style>
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
	@endsection
@section('content')

<div class="row">
<div class="col-md-8">
 

<ol class="breadcrumb" style="display: none">
	<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
		<a itemprop="url" href="http://cliphq.net/">
			<span itemprop="title">Cliphq</span>
		</a>
	</li>
	<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
		<a itemprop="url" href="http://cliphq.net/new">
			<span itemprop="title">Video</span>
		</a>
	</li>
	<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="active">
		<span itemprop="title">{{ $video->title}}</span>
	</li>
</ol>

<div class="row post">
	<div class="postinfo">
		<h3>{{ $video->title}}</h3>
	</div>
	<div class="movieLoader" data-movie="719">
<div class="postcontainer">
	<center>
		<div class="video">
	<iframe src="{{ url('viewvideo')}}/{!! $video->id !!}" width="100%" onload="this.style.height=this.contentDocument.body.scrollHeight +'px';" scrolling="no" frameborder="0" allowfullscreen=""></iframe>  
		</div>
	</center>
</div>

</div>	<div id="shareResult" class="facebook_share">
		<i class="fb_f"></i>
		<span>Chia sẻ lên Facebook</span>
	</div>
	<div id="auto-next" class="pull-right">
		Tự động chuyển
		<label id="autoplay" class="label toggle">
			<input checked="" id="someSwitchOptionPrimary" type="checkbox" class="toggle_input">
			<div class="toggle-control"></div>
		</label>
	</div>
	<div class="postinfo">
		<div class="stats">
			<div class="numbers">
				<span class="views" votes="164" score="0" title="Lượt xem"> <b>164</b></span>
				<span class="comments" title="Bình luận"> <b>0</b></span>
			</div>
			<div class="facebook-btn">
				<iframe src="https://www.facebook.com/plugins/like.php?href=http://cliphq.net/video/719&amp;width=450&amp;layout=standard&amp;action=like&amp;size=small&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
			</div>
		</div>
	</div>
</div>
 
<div class="fp">
	<h4>
		<img src="http://cliphq.net/images/thumbsup.png"> Like <a href="http://www.facebook.com/vivivuvu.net" target="_blank" class="colorful" title=""> Vivivuvu.Net trên Facebook</a> để được cười nhiều hơn
	</h4>
	<div>
		<img src="http://cliphq.net/images/logo_vivivuvu.png" alt="logo">
		 <div class="fb-like" style="vertical-align:top" data-href="http://www.facebook.com/vivivuvu.net" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
	</div>
</div>

<div id="comments">
	<div class="commentfixed" style="width: 750px;">
		<div class="fb-comments" data-href="http://cliphq.net/video/719" data-num-posts="5" data-width="750"></div>
	</div>
</div>

</div>
<div class="col-md-4" ng-controller="VideoController">
	<div class="right-ovui videonew">
		<ul id="new-videos">
			<li class="right-p" ng-repeat="video in dataRandom">
				<div class="mask">
					<a href="{{ url('xem-video')}}/{% video.id %}/{% video.slug %}.html" class="jump_stop">
						<img class="thumb" src="{{asset('upload/images/133x70')}}/{%video.image%}">
						<div class="new">New</div>
					</a>
				</div>
				<div class="info stats">
					<a href="{{ url('xem-video')}}/{% video.id %}/{% video.slug %}.html" class="jump_stop">
						<h4 class="truncate">{%video.title%}</h4>
					</a>
					<span id="view_count" class="view" score="0" title="Lượt xem">{% video.view %}</span>
					<span id="comment_count" title="Bình luận">0</span>
				</div>
				<div class="clear"> </div>
			</li>

		</ul>
	</div>
</div>

</div>



@endsection
@section('footer')
 <script  src="<?php echo asset('app/controller/guests/VideoController.js') ; ?>"> </script>
@endsection

