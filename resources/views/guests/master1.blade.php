<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ Session::token() }}"> 
	@yield('head')

 <link href="<?php echo asset('template/vendor/bootstrap/css/bootstrap.min.css') ; ?>" rel="stylesheet">
 <!--<link rel    ="stylesheet" href="{!! asset('template/css/guest.css')!!}">    -->
<link href="{{asset('template/css/guestv2.css')}}" media="screen" rel="stylesheet" type="text/css">

 <meta name   ="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="shortcut icon" href="{{ asset('photos/icon.png') }}">

</head>
<body ng-app="my-app">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


</script>


<div id="header">
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/')}}" style="padding-top: 0px;padding-bottom: 0px;"><img id="logo" src="http://cliphq.net/images/logo.png"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse" ng-controller="CateListController">

        <ul class="nav navbar-nav" data-ng-init="getCateList()">
          <li><a href="">Top <span class="label label-danger">New</span></a></li>
            <?php 
              if(isset($cate)){
                $cateId = $cate->id;
              }else{
                $cateId= 0;
              }
            ?>
          <li ng-repeat="cate in categories" ng-class="{active: cate.id == {{$cateId}}}" >
            <a href="{{url('/')}}/{%cate.slug%}.{%cate.id%}.html"  >{%cate.name%} </a>
          </li>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>





  </div>
          <div id="content">
            <div class="container">


              @yield('content')

            </div>
          </div>
          <div id="footer">

          </div>

          <div class="modal"><!-- Place at bottom of page --></div>
          <script>

          </script>
   








 <!-- Metis Menu Plugin JavaScript -->

 <script src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
 <script src="<?php echo asset('app/app.js') ; ?>"></script>     
<script src="<?php echo asset('app/controller/guests/CateListController.js') ; ?>"></script>    
        @yield('footer')      
        </body>
        </html>