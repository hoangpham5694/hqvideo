	@extends('guests.master1')
	@section('head')
	   <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
            	max-height: 320px;
    
            }

        </style> 
    </head>
	<title>QH Video Trang chủ</title>

	@endsection
@section('content')
<div class="row">
	<div class="col-md-8" ng-controller="VideoController">
		<div id="listAutoPlay" data-ng-init="getListVideo({{$cate->id}})">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" ng-repeat="video in data" >
				<div class="thumb">
					<img class="img-responsive" ng-src="{{asset('upload/images/200x124')}}/{% video.image %}" alt="{% video.title  %}" />
					<div class="duration">{%video.duration%}</div>
					<a target="_blank" class="hover-posts" ng-href="{{url('video')}}/{%video.slug%}.{%video.id%}.html" title="{% video.title %}"><span></span>
						<div class="videoinfo">
							
						</div>
						<div class="videoplayer"></div>
					</a>
				</div>
				<h4 class="truncate"><a target="_blank" ng-href="{{url('video')}}/{%video.slug%}.{%video.id%}.html">{% video.title | cut:true:50:' ...' %}</a></h4>
			</div>
			<div class="clearfix"></div>
			<div id="paging-buttons" class="paging-buttons">
			
			<a href="" ng-click = "previouspage('new')" class="previous" ng-class="{disabled: page==1}">« Quay lại</a>
			<a href="" ng-click = "nextpage('new')" class="older" ng-class="{disabled: end}">Xem tiếp »</a>				
			</div>
		</div>

		<ol class="breadcrumb">
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a itemprop="url" href="http://cliphq.net/"><span itemprop="title">Cliphq.net</span></a></li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a itemprop="url" href="http://cliphq.net/"><span itemprop="title">Trang Chủ</span></a></li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="active"><span itemprop="title">Video Mới</span></li>
			</ol>
			<ol class="breadcrumb">
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					<a itemprop="url" href="">
						<span itemprop="title">Giới thiệu</span>
					</a>
				</li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					<a itemprop="url" href="">
						<span itemprop="title">Nội quy</span>
					</a>
				</li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					<a itemprop="url" href="">
						<span itemprop="title">Hỏi/đáp</span>
					</a>
				</li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					<a itemprop="url" href="">
						<span itemprop="title">Góp Ý</span>
					</a>
				</li>
			</ol>
	</div>

	<div class="col-md-4 hidden-xs hidden-xs">
			<div class="rightfixed">
			<!--Ads-->
			
			</div>
			<div class="social-block">
				<h3>Like để nhận những clip hay :)</h3>
				<div class="facebook-like">
					<div class="fb-like fb_iframe_widget" data-href="http://www.facebook.com/vivivuvu.net" data-send="false" data-width="300" data-show-faces="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=360&amp;href=http%3A%2F%2Fwww.facebook.com%2Fvivivuvu.net&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=300"><span style="vertical-align: bottom; width: 300px; height: 28px;"><iframe name="f2a353c5eab16c4" width="300px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FJtmcTFxyLye.js%3Fversion%3D42%23cb%3Df34be638a6bb24%26domain%3Dcliphq.net%26origin%3Dhttp%253A%252F%252Fcliphq.net%252Ff25fb5f09469b4%26relation%3Dparent.parent&amp;container_width=360&amp;href=http%3A%2F%2Fwww.facebook.com%2Fvivivuvu.net&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=300" style="border: none; visibility: visible; width: 300px; height: 28px;" class=""></iframe></span></div>
				</div>
			</div>
		</div>

</div>




@endsection
@section('footer')
 <script  src="<?php echo asset('app/controller/guests/VideoController.js') ; ?>"> </script>
@endsection
