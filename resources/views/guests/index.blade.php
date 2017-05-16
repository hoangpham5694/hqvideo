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
		<div id="listAutoPlay" data-ng-init="getListVideo()">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" ng-repeat="video in data" >
				<div class="thumb">
					<img class="img-responsive" src="{{asset('upload/images/200x124')}}/{% video.image %}" alt="{% video.title  %}" />
					<div class="duration">190</div>
					<a target="_blank" class="hover-posts" href="{{url('xem-video')}}/{%video.id%}/{%video.slug%}.html" title="{% video.title %}"><span></span>
						<div class="videoinfo">
							
						</div>
						<div class="videoplayer"></div>
					</a>
				</div>
				<h4 class="truncate"><a target="_blank" href="{{url('xem-video')}}/{%video.id%}/{%video.slug%}.html">{% video.title | cut:true:50:' ...' %}</a></h4>
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
					<a itemprop="url" href="http://cliphq.net/">
						<span itemprop="title">Giới thiệu</span>
					</a>
				</li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					<a itemprop="url" href="http://cliphq.net/">
						<span itemprop="title">Nội quy</span>
					</a>
				</li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					<a itemprop="url" href="http://cliphq.net/">
						<span itemprop="title">Hỏi/đáp</span>
					</a>
				</li>
				<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					<a itemprop="url" href="http://cliphq.net/">
						<span itemprop="title">Góp Ý</span>
					</a>
				</li>
			</ol>
	</div>


</div>




@endsection
@section('footer')
 <script  src="<?php echo asset('app/controller/guests/VideoController.js') ; ?>"> </script>
@endsection
