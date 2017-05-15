<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ Session::token() }}"> 
	@yield('head')

 <link href="<?php echo asset('template/vendor/bootstrap/css/bootstrap.min.css') ; ?>" rel="stylesheet">
 <!--<link rel    ="stylesheet" href="{!! asset('template/css/guest.css')!!}">    -->
<link href="http://cliphq.net/css/style.css?v2" media="screen" rel="stylesheet" type="text/css">

 <meta name   ="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="shortcut icon" href="{{ asset('photos/icon.png') }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body ng-app="my-app">
  <div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1892596964352709";
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
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="http://cliphq.net/top">Top <span class="label label-danger">New</span></a></li>
          <li><a href="http://cliphq.net/c/funny">Funny</a></li><li><a href="http://cliphq.net/c/thoi-su">Thời sự</a></li><li><a href="http://cliphq.net/c/doi-song">Đời sống</a></li><li><a href="http://cliphq.net/c/giao-thong">Giao thông</a></li><li><a href="http://cliphq.net/c/tinh-yeu">Tình yêu</a></li>      </ul>
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
            <div class="fa-footer container">
              <div class="footer-help pull-left">

              </div>
              <div class="footer-help pull-right">
                © Copyright
              </div>
            </div>
          </div>
          <div id="btn-goto-top" class="ui icon orange button scrollToTop " style="display: block;">
            <i class="glyphicon glyphicon-menu-up"></i>
          </div>
          <div class="modal"><!-- Place at bottom of page --></div>
          <script>
          var toogle = true;
          $(document).ready(function() {
            $(".search-panel-btn").click(function() {
              if(toogle){
                $(".search-panel").css("display","block");
                toogle = false;
              }else{
               $(".search-panel").css("display","none");
               toogle = true;
             }


           });
            $("#btn-goto-top").click(function() {
              $("html, body").animate({ scrollTop: 0 }, "slow");
              return false;
            });

          });

          </script>
   






 <script src="<?php echo asset('template/vendor/jquery/jquery.min.js') ; ?>"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="<?php echo asset('template/vendor/bootstrap/js/bootstrap.min.js') ; ?>"></script>

 <!-- Metis Menu Plugin JavaScript -->

 <script src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
 <script src="<?php echo asset('app/app.js') ; ?>"></script>      
        @yield('footer')      
        </body>
        </html>