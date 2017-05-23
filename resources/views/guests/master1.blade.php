<?php $domain = "http://hqapps.net/video/"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ Session::token() }}">
        @yield('head')
        <meta name   ="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="{{ asset('photos/icon.png') }}">
        <meta property="fb:app_id" content="1565134950451411">
        <meta property="article:publisher" content="https://www.facebook.com/dmhaylam">
        <meta property="article:author" content="https://www.facebook.com/dmhaylam">
        <meta property="og:site_name" content="HQAPPS Ứng Dụng Vui Facebook! - HQAPPS.NET">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ $domain}}images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ $domain}}images/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ $domain}}images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{{ $domain}}images/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ $domain}}images/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ $domain}}images/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ $domain}}images/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ $domain}}images/apple-touch-icon-152x152.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="{{{ $domain}}template/css/style-v2.css" rel="stylesheet">
        <style>.AdsLink{z-index:10000;cursor:default;color:#fff;position:absolute;top:40%;left:38%;background:rgba(0,0,0,0.5);padding:10px;display:none;}</style>
    </head>
    <body ng-app="my-app">
        <div id="fb-root"></div>
        <header>
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-custom">
                <div class="wrapper">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="http://hqapps.net/public/images/logo.png" alt="logo"></a>
                    <div class="collapse navbar-collapse" id="navbarText" ng-controller="CateListController">
                        <ul class="navbar-nav mr-auto" data-ng-init="getCateList()">
                            <?php
                            if(isset($cate)){
                            $cateId = $cate->id;
                            }else{
                            $cateId= 0;
                            }
                            ?>
                             <li class="nav-item" ng-repeat="cate in categories" ng-class="{active: cate.id == {{$cateId}}}" >
                                <a class="nav-link" href="{{ $domain}}{%cate.slug%}.{%cate.id%}.html"  >{%cate.name%} </a>
                            </li>
                        </ul>
                        <!--  <span class="navbar-text">
                                    Navbar text with an inline element
                        </span> -->
                    </div>
                </div>
            </nav>
        </header>
        <section class="wrapper" ng-controller="VideoController">
            <div class="row page">
                
                <!-- START MAIN -->
                    <!-- START PLAYER -->
                    @yield('content')
               </div>
        </section>
        <footer class="bd-footer text-muted">
            <div class="container">
                <ul class="bd-footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/video">Video</a></li>
                </ul>
                
            </div>
        </footer>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
        <script src="<?php echo asset('app/app.js') ; ?>"></script>
        <script src="<?php echo asset('app/controller/guests/CateListController.js') ; ?>"></script>
        @yield('footer')
    </body>
</html>