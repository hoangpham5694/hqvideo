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

	



					<div class="total-panel" ng-controller="VideoController" >
	



				  

  <div class="tab-content">
  	<div class="group-btn">
				<button class="btn-previous" ng-click = "previouspage('new')"><span class="glyphicon glyphicon-chevron-left"></span>Trang trước</button>
			<button class="btn-next"  ng-click = "nextpage('new')">Trang sau <span class="glyphicon glyphicon-chevron-right"></span></button>
			<div class="clear-fix"></div>
			</div>
    <div id="new" class="tab-pane fade in active">
     		<div class="row game-grid mainContent" >
					<div class ="col-lg-3 col-md-4 col-sm-6 col-xs-12 video-item" ng-repeat="video in data" >
						<a href="#" target="_blank"></a>
						<div class="ui special cardsui special cards">
							<a href="#" target="_blank"></a>
							<div class="card">
								<a href="xem-video/{% video.id %}/{% video.slug %}.html" >								
									<div class="center">
									<img src="{!! asset('upload/images')!!}/{% video.image %}" alt="">
									<span class="playIcon"></span>
									</div>
								</a>

								<div class="content setMaxHeight">
									<a href="#" target="_blank"></a>
									<div class="header">
										<a href="#" target="_blank"></a>
										<a href="xem-video/{% video.id %}/{% app.slug %}.html">{% video.title | cut:true:50:' ...' %}</a>
									</div>
									
								</div>
								<div class="extra content small-text orange-text">
									<hr>
									<div class="pull-left">
					      			<i class="glyphicon glyphicon-eye-open"></i> {%video.view%}    

					      		</div>
					      		<div class="pull-right">
					      			<i class ="glyphicon glyphicon-calendar"></i> 
					      		
					      			{% video.created_at | dateFilter | date:"dd-MM-yyyy" %}
					      		</div>
								</div>
							</div>
						</div>
					</div>
			<div class="clear-fix"></div>
			</div>
			<div class="group-btn">
				<button class="btn-previous" ng-click = "previouspage('new')"><span class="glyphicon glyphicon-chevron-left"></span>Trang trước</button>
			<button class="btn-next"  ng-click = "nextpage('new')">Trang sau <span class="glyphicon glyphicon-chevron-right"></span></button>
			<div class="clear-fix"></div>
			</div>
			
    </div>

    
  </div>

			</div>


@endsection
@section('footer')
 <script  src="<?php echo asset('app/controller/guests/VideoController.js') ; ?>"> </script>
@endsection
