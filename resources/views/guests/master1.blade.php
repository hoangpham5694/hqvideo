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
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-touch-icon-152x152.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <link href="{{ asset('template/css/hqapps.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
        
        <style>.AdsLink{z-index:10000;cursor:default;color:#fff;position:absolute;top:40%;left:38%;background:rgba(0,0,0,0.5);padding:10px;display:none;}</style>
        <style>.newlike iframe{transform:scale(1.5);-ms-transform:scale(1.5);-webkit-transform:scale(1.5);-o-transform:scale(1.5);-moz-transform:scale(1.5);transform-origin:top left;-ms-transform-origin:top left;-webkit-transform-origin:top left;-moz-transform-origin:top left;-webkit-transform-origin:top left;}</style>
    </head>
    <body ng-app="my-app">
        <div id="fb-root"></div>
        <nav class="navbar navbar-custom" role="navigation">
            <div class="wrapper">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://hqapps.net/"><img src="http://hqapps.net/public/images/logo.png"></a>
                </div>
                <div ng-controller="CateListController">
                <ul class="nav navbar-nav" data-ng-init="getCateList()">
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
                </ul>
                </div>
            </div>
        </nav>
        <div class="wrapper" ng-controller="VideoController">
                <div id="main">
                        <article>
                            <div id='teplayer' class='te-player-container'></div>
                            @yield('content')
                         </article>
            </div>
        </div>
        
        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
        <script src="<?php echo asset('app/app.js') ; ?>"></script>
        <script src="<?php echo asset('app/controller/guests/CateListController.js') ; ?>"></script>
        @yield('footer')
    </body>
</html>