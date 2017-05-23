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
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-touch-icon-152x152.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <style>
        .sidebar-nav li a,a{text-decoration:none}.headline,.video-headline{word-wrap:break-word}body{margin:0;padding:0;background-color:#f5f6f7;font-family:Roboto,sans-serif;-webkit-transition:all 250ms ease-out;-moz-transition:all 250ms ease-out;-ms-transition:all 250ms ease-out;-o-transition:all 250ms ease-out;transition:all 250ms ease-out;position:relative;overflow-x:hidden}a,a:hover{color:#333}body,html{height:100%}.navbar-fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030;border-width:0 0 1px}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:transparent}#wrapper{padding-left:0;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}#wrapper.toggled{padding-left:220px}#sidebar-wrapper{z-index:1000;left:220px;width:0;height:100%;margin-left:-220px;overflow-y:auto;overflow-x:hidden;background:#009688;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}#sidebar-wrapper::-webkit-scrollbar{display:none}#wrapper.toggled #sidebar-wrapper{width:220px}#page-content-wrapper{width:100%;padding-top:50px}#wrapper.toggled #page-content-wrapper{position:absolute;margin-right:-220px}.sidebar-nav{position:absolute;top:0;width:220px;margin:0;padding:0;list-style:none}.sidebar-nav li{position:relative;line-height:20px;display:inline-block;width:100%;border-bottom:1px solid #ddd}.sidebar-nav li:before{content:'';position:absolute;top:0;left:0;z-index:-1;height:100%;width:3px;background-color:#1c1c1c;-webkit-transition:width .2s ease-in;-moz-transition:width .2s ease-in;-ms-transition:width .2s ease-in;transition:width .2s ease-in}.sidebar-nav li:first-child a{color:#fff}.sidebar-nav li:nth-child(2):before{background-color:#ec1b5a}.sidebar-nav li:nth-child(3):before{background-color:#79aefe}.sidebar-nav li:nth-child(4):before{background-color:#314190}.sidebar-nav li:nth-child(5):before{background-color:#279636}.sidebar-nav li:nth-child(6):before{background-color:#7d5d81}.sidebar-nav li:nth-child(7):before{background-color:#ead24c}.sidebar-nav li:nth-child(8):before{background-color:#2d2366}.sidebar-nav li:nth-child(9):before{background-color:#35acdf}.sidebar-nav li.open:hover:before,.sidebar-nav li:hover:before{width:100%;-webkit-transition:width .2s ease-in;-moz-transition:width .2s ease-in;-ms-transition:width .2s ease-in;transition:width .2s ease-in}.sidebar-nav li a{display:block;color:#ddd;padding:10px 15px 10px 30px}.sidebar-nav li a:active,.sidebar-nav li a:focus,.sidebar-nav li a:hover,.sidebar-nav li.open a:active,.sidebar-nav li.open a:focus,.sidebar-nav li.open a:hover{color:#fff;text-decoration:none;background-color:transparent}.sidebar-nav>.sidebar-brand{height:65px;font-size:20px;line-height:44px}.hamburger.is-closed:before,.hamburger.is-open:before{font-size:14px;line-height:32px;text-align:center;content:''}.sidebar-nav .dropdown-menu{position:relative;width:100%;padding:0;margin:0;border-radius:0;border:none;background-color:#222;box-shadow:none}.hamburger{position:fixed;top:7px;z-index:999;display:block;width:32px;height:32px;margin-left:15px;background:0 0;border:none}.hamburger.is-closed .hamb-bottom,.hamburger.is-closed .hamb-middle,.hamburger.is-closed .hamb-top,.hamburger.is-open .hamb-bottom,.hamburger.is-open .hamb-middle,.hamburger.is-open .hamb-top{background-color:#000}.hamburger:active,.hamburger:focus,.hamburger:hover{outline:0}.hamburger.is-closed:before{display:block;width:100px;color:#000;opacity:0;-webkit-transform:translate3d(0,0,0);-webkit-transition:all .35s ease-in-out}.hamburger.is-closed:hover:before{opacity:1;display:block;-webkit-transform:translate3d(-100px,0,0);-webkit-transition:all .35s ease-in-out}.hamburger.is-closed .hamb-bottom,.hamburger.is-closed .hamb-middle,.hamburger.is-closed .hamb-top,.hamburger.is-open .hamb-bottom,.hamburger.is-open .hamb-middle,.hamburger.is-open .hamb-top{position:absolute;left:0;height:4px;width:100%}.hamburger.is-closed .hamb-top{top:5px;-webkit-transition:all .35s ease-in-out}.hamburger.is-closed .hamb-middle{top:50%;margin-top:-2px}.hamburger.is-closed .hamb-bottom{bottom:5px;-webkit-transition:all .35s ease-in-out}.hamburger.is-closed:hover .hamb-top{top:0;-webkit-transition:all .35s ease-in-out}.hamburger.is-closed:hover .hamb-bottom{bottom:0;-webkit-transition:all .35s ease-in-out}.hamburger.is-open .hamb-bottom,.hamburger.is-open .hamb-top{-webkit-transition:-webkit-transform .2s cubic-bezier(.73,1,.28,.08)}.hamburger.is-open .hamb-bottom,.hamburger.is-open .hamb-top{top:50%;margin-top:-2px}.hamburger.is-open .hamb-top{-webkit-transform:rotate(45deg)}.hamburger.is-open .hamb-middle{display:none}.hamburger.is-open .hamb-bottom{-webkit-transform:rotate(-45deg)}.hamburger.is-open:before{display:block;width:100px;color:#fff;opacity:0;-webkit-transform:translate3d(0,0,0);-webkit-transition:all .35s ease-in-out}.brand,.overlay{position:fixed;width:100%}.hamburger.is-open:hover:before{opacity:1;display:block;-webkit-transform:translate3d(-100px,0,0);-webkit-transition:all .35s ease-in-out}.overlay{display:none;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgba(250,250,250,.8);z-index:1}.brand,.pannel{background:#fff}.brand{text-align:center;height:50px;z-index:999}.logo{width:180px;margin-top:7px}.player{min-height:180px;max-height:calc(100vh - 95px);width:100vw;height:56.25vw}.video-meta{margin:0;padding:16px;border-top:none;border-right:none;border-left:none}.date{font-weight:500;font-size:13px;line-height:14px;margin-top:10px;margin-bottom:10px}.video-headline{font-size:18px;color:#222;font-weight:400;margin:0}.media-body>h5,.views{color:#222;font-size:13px;font-weight:400;margin-top:0;overflow:hidden}.video-headline:after,.show-comments:after{display:inline-table;content:'';position:absolute;right:12px;border-top:6px solid #555;border-left:6px solid transparent;border-right:6px solid transparent}.views{display:-webkit-box}.description,#comment-body{display:none}.pannel{margin:0;padding:16px;border-top:none;border-right:none;border-left:none}.list-unstyled{margin:0;padding:0;list-style:none}.pannel-item{position:relative;clear:both;padding:8px 0}.related-thumb{float:left;width:120px;height:63px;overflow:hidden;position:relative;background:#767676}.related-thumb img{width:100%;}.media-body{vertical-align:baseline;padding-left:8px;height:67px;overflow:hidden}.media-body>h5{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;text-overflow:ellipsis;line-height:1.25;margin-bottom:2px;max-height:34px}.media-body span{line-height:120%;color:#767676;font-size:12px}.duration{position: absolute;padding: 1px 4px;background: rgba(0,0,0,.6);color: #fff;font-size: 11px;border-radius: 2px;right: 5px; bottom: 5px;}
        </style>
    </head>
    <body ng-app="my-app">
        <div id="fb-root"></div>
        <div id="wrapper">
            <div class="overlay"></div>
            <div class="brand">
                <a href="http://hqapps.net/"><img class="logo" src="http://hqapps.net/public/images/logo.png"></a>
            </div>
            
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" ng-controller="CateListController">
                <ul class="nav sidebar-nav" data-ng-init="getCateList()">
                        <?php
                        if(isset($cate)){
                        $cateId = $cate->id;
                        }else{
                        $cateId= 0;
                        }
                        ?>
                        <li ng-repeat="cate in categories" ng-class="{active: cate.id == {{$cateId}}}" >
                            <a href="{{$domain}}/{%cate.slug%}.{%cate.id%}.html"  >{%cate.name%} </a>
                        </li>
                </ul>
            </nav>
        <div class="wrapper" id="page-content-wrapper" ng-controller="VideoController">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
                </button>
                <div id="main">
                        <article class="player">
                            <div id='teplayer' class='te-player-container'></div>
                            @yield('content')
                         </article>
            </div>
        </div>
        </div>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
        <script src="<?php echo asset('app/app.js') ; ?>"></script>
        <script src="<?php echo asset('app/controller/guests/CateListController.js') ; ?>"></script>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        @yield('footer')
        <script>
            $( document ).ready(function(){
            $("img.lazy").lazyload();
            var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;
            trigger.click(function () {
                hamburger_cross();
            });
            function hamburger_cross() {
                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }
            
            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });
            $(".video-headline").click(function(){
            $(".description").toggle();
        })
        var show_comments_clicked = false;
        $(".show-comments").click(function() {
            $("#comment-body").toggle();
            if(!show_comments_clicked) {
                $("#comment-body").html('<fb:comments href="{{url('video')}}/{{$video->slug}}.{{$video->id}}.html" width="100%" numposts="3" colorscheme="light"></fb:comments>');
                FB.XFBML.parse(document.getElementById('comment-body'));
            }
            show_comments_clicked = true;
        })
        });
        </script>
    </body>
</html>