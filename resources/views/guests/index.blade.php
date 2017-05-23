<!DOCTYPE html">
<html lang="vi">
    <head>
        <title>HQAPPS Ứng Dụng Vui Facebook! - HQAPPS.NET</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ứng dụng vui Facebook">
        <meta name="keywords" content="">
        <meta property="og:url" content="http://hqapps.net/">
        <meta property="og:type" content="website">
        <meta property="og:image" content="http://hqapps.net/public/images/home.jpg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="420">
        <meta property="fb:pages" content="294960127517973">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-touch-icon-152x152.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="manifest" href="/manifest.json">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <style>body{background-color:#f5f6f7;font-family:'Roboto',sans-serif;}.wrapper{max-width:980px;margin:0 auto;clear:both;position:relative;}#sidebar{width:300px;position:absolute;right:0;top:0;text-align:center;}#main{margin-right:320px;position:relative;padding:0}h1{margin-top:0;}#header .details{color:#888;margin-bottom:20px;}#intro .cover{width:60%;float:left;}#intro .cover>img{width:100%;}#intro .description{margin-left:62%;font-size:18px;color:#888;line-height:24px;}#start{margin:20px 0;width:60%;}.Share{overflow:hidden;display:none;position:absolute;bottom:10px;left:0;right:0;background:white;margin:10px;padding:10px;z-index:15;box-shadow:0 2px 6px rgba(0,0,0,0.8);}.Share .title{display:none;color:#444;font-size:18px;margin-bottom:10px;}.Share .btn{color:white;width:49.5%;float:left;}.btn.facebook{background-color:#3b5998;margin-right:1%;color:white;}.Share .twitter{background-color:#1dadeb;}.Share.final{padding:10px 20px;border:1px solid #ddd;border-top:0;background:#eee;margin-bottom:30px;}.Share.final .title{display:block;}#comments{padding-top:30px;}#timeline{width:100%;height:50px;overflow:hidden;position:absolute;top:0;left:0;z-index:2;}#timeline .steps{width:1500px;}#timeline .steps .step{width:30px;line-height:30px;text-align:center;float:left;margin:10px;color:#888;font-weight:bold;}#timeline .steps .step.done{background:rgba(74,163,252,1);border-radius:15px;color:white;}#questions .question .cover{position:relative;}#questions .question .cover .text{position:absolute;bottom:0;left:0;background-color:rgba(74,163,252,.9);color:#fff;padding:9px 20px;font-size:22px;}#questions .question .cover>img{width:100%;}.navbar{border-radius:0;}.navbar.navbar-custom{background-color:#fff;-webkit-box-shadow:0 1px 8px rgba(0,0,0,.2);-moz-box-shadow:0 1px 8px rgba(0,0,0,.2);box-shadow:0 1px 8px rgba(0,0,0,.2);}.navbar-brand{padding:2px 20px;}.navbar-brand>img{width:180px;margin-top:7px}.navbar-right{padding:8px 0;}.glyphicon-plus-sign{top:2px;}.answers{overflow:hidden;}.answer.text{border:1px solid #888;border-top:0;padding:8px 20px;font-size:16px;cursor:pointer;}.answer:hover,.answer.selected{background-color:rgba(74,163,252,1);color:#fff;}.answer.illustrated{border:1px solid #888;font-size:16px;cursor:pointer;width:24%;padding:1.5%;margin-right:1%;margin-top:10px;float:left;text-align:center;}.answer.illustrated>img{width:100%;margin-bottom:10px;}#results .result{border:1px solid #ddd;position:relative;}#results .result .cover{position:relative;}#results .result .cover>img{width:100%;}#results .result .cover .text{font-size:16px;color:#888;line-height:20px;padding:10px;position:absolute;bottom:0;background:white;z-index:15;margin:10px;box-shadow:0 2px 6px rgba(0,0,0,0.8);}#results .result .cover .text>h3{color:#4797e7;margin:0 0 10px 0;}#loading{text-align:center;color:#4AA3FC;font-size:18px;padding-top:100px;}#loading>img{display:block;margin:10px auto;}#questions,.question,#results,#loading,#intro{-webkit-transition:all 0.3s linear;transition:all 0.3s linear;position:relative;}.invisible{opacity:0;}.alternating-thumbnails-a{padding:20px 0 0 0!important;}#blackBG{background:rgba(0,0,0,0.8);display:none;position:fixed;top:0;left:0;bottom:0;right:0;z-index:9050;}.blackBG_small{position:absolute;display:none;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,0.5);z-index:10;}#LikePopup{position:fixed;z-index:9051;top:10%;background-color:#ffffff;box-shadow:0 2px 6px rgba(0,0,0,0.3);display:none;text-align:center;margin:auto;left:0;right:0;width:500px;padding:20px;}#LikePopup .title{position:absolute;font-size:16px;color:#3b5998;font-weight:bold;margin-right:35px;}#LikePopup .fb-like-box{margin-top:20px;}#LikePopup .subtitle{padding-top:20px;}#LikePopup .text{padding:20px;}#LikePopup .footer{margin-top:20px}#LikePopup .footer>span{display:block;margin-bottom:10px}.btn{display:inline-block;text-shadow:0 -1px 0 rgba(0,0,0,.5);margin-bottom:0;border-radius:4px;border:1px solid;text-align:center;vertical-align:middle;font-weight:bold;line-height:1.43;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;white-space:nowrap;cursor:pointer;}.btn-lg{padding:10px 0}.btn.btn-grey{border-color:#c4c4c4;background:white;color:#565a5c;}.btn.btn-big{padding:9px 25px;font-size:18px;}.btn.btn-pink{border-color:#ff5a5f;border-bottom-color:#e00007;background-color:#ff5a5f;color:#fff;}.btn.btn-pink:hover,.btn.btn-pink:focus{border-color:#ff7e82;border-bottom-color:#fa0008;background-color:#ff7e82;}#filter{overflow:hidden;background-color:#fff;-webkit-box-shadow:0 0 10px rgba(0,0,0,.2);-moz-box-shadow:0 0 10px rgba(0,0,0,.2);box-shadow:0 0 10px rgba(0,0,0,.2);}#filter>div{float:left;height:40px;width:50%;font-size:16px;text-align:center;}#filter>div.active{padding:10px;box-shadow:0 0px 10px rgba(0,0,0,.2);border-bottom:1px solid #ddd;}#filter>div.passive{padding:8px;border-bottom:1px solid #ddd;color:#888;}#filter>.top.active{border-right:1px solid #ddd;}#filter>.top.passive{border-left:2px solid #ddd;box-shadow:-4px 0px 10px rgba(0,0,0,.2);cursor:pointer}#filter>.last.active{border-left:1px solid #ddd;}#filter>.last.passive{border-right:0;box-shadow:4px 0px 10px rgba(0,0,0,.2);cursor:pointer}#quizzList{position:relative;list-style-type:none;padding:0;margin-top:10px;}#quizzList .quizz{overflow:hidden;background:#fff;border:1px solid;border-color:#e5e6e9 #dfe0e4 #d0d1d5;-webkit-border-radius:3px;padding:0;margin:0;margin-bottom:10px}#quizzList .quizz .cover{float:left;width:280px}#quizzList .quizz .cover img{width:100%;}#quizzList .quizz .infos{margin-left:280px;padding:10px;height:150px;position:relative;}#quizzList .quizz.quizzv2 .infos{height:147px}#quizzList .quizz.quizzv2 .white_shadow{position:absolute;-webkit-box-shadow:20px 0 15px 15px rgba(255,255,255,1);-moz-box-shadow:20px 0 15px 15px rgba(255,255,255,1);box-shadow:20px 0 15px 15px rgba(255,255,255,1);left:0;right:0;bottom:0}#quizzList .quizz .infos .title{font-size:20px;margin-top:-5px;}#quizzList .quizz .infos .description{font-size:14px;margin:10px 0;color:#555;}#quizzList .quizz .infos .time{color:#999;position:absolute;bottom:0;background:#fff;left:0;right:0;padding:12px 10px}#quizzList .quizz .cover .innertitle{display:none;position:absolute;bottom:0;left:0;background-color:rgba(74,163,252,.9);color:#fff;padding:9px 20px;font-size:22px;}@media (min-width:768px) and (max-width:900px) {.answer.illustrated{width:32.3%;}}@media screen and (max-width:768px){body{background-color:#e9eaed}#filter{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}#main{margin:0}.navbar.navbar-custom{margin-bottom:0;border-bottom:1px solid #ddd;}#quizzList{padding:5px;margin:0}#quizzList .quizz{padding:7px}#quizzList .quizz .cover{float:none;width:100%;position:relative}#quizzList .quizz .infos{margin:0;padding-bottom:0;height:auto}#quizzList .quizz.quizzv2 .infos{max-height:10px}#quizzList .quizz .infos .time{padding-top:5px}#quizzList .quizz .infos .title{display:none}#quizzList .quizz .cover .innertitle{display:block}#quizzList .quizz.quizzv2 .cover .innertitle{position:relative}#quizzList .quizz .infos .description{margin:0}#quizzList .quizz .infos .time{position:relative;padding:0}.Share .btn>span{display:none;}#questions .question .cover{margin:0 -20px;}#questions .question .cover .text{left:10px;right:10px;}#sidebar{width:100%;position:relative;padding:0 20px 20px 20px;}#intro .cover{width:inherit;float:none;margin:0 -20px;}#intro .description{margin:20px 0 0 0;}#start{width:100%;}#results .result .cover .text{position:relative;margin:0;box-shadow:none;font-size:16px;}#results .result .cover .text>h3{font-size:22px;}#LikePopup{width:95%;}}@media screen and (max-width:600px){.answer.illustrated{width:32.3%;}}@media screen and (max-width:340px){.navbar-brand>img{width:150px;margin-top:11px}}@media screen and (max-width:320px){.navbar-brand>img{width:120px;margin-top:15px;}#newsletter>.subscribe{display:none}#quizzList .quizz .cover .innertitle{font-size:20px}}@media screen and (max-width:280px){.navbar-brand>img{width:90px;margin-top:16px}#quizzList .quizz .cover .innertitle{font-size:18px}}.navbar-nav>li{float:left;line-height:52px;padding:0 15px;margin:-1px 0;font-weight:300;color:#555;cursor:pointer;font-size:16px;}.navbar-undermenu{display:none;position:absolute;top:52px;left:-1px;background:white;z-index:10;border:1px solid #ddd;}.navbar-undermenu>ul{padding-left:0;list-style:none;min-width:120px;}.navbar-undermenu>ul>a>li{padding:7px 15px;line-height:20px;color:#555}.navbar-undermenu>ul>a>li:hover{background-color:#ff5a5f;color:white}.navbar-undermenu>ul>a:hover{text-decoration:none}#loadMoreQuizz{text-align:center}#megabanner{margin-right:320px;position:relative;background-color:#fff;-webkit-box-shadow:0 4px 10px rgba(0,0,0,.2);-moz-box-shadow:0 4px 10px rgba(0,0,0,.2);box-shadow:0 4px 10px rgba(0,0,0,.2);margin-bottom:0;overflow:hidden;}#megabanner>.promotion{width:100%;height:300px;margin-top:-50px;position:relative;}#megabanner>.promotion>a>.item{width:100%;position:absolute;height:300px;left:0;}#megabanner>.promotion>a>.item>.cover{width:100%;}#megabanner>.promotion>a>.item>.cover>img{width:100%;}#megabanner>.promotion>a>.item>.title{position:absolute;bottom:0;z-index:1;width:100%;background-color:rgba(74,163,252,.8);color:white;padding:10px;padding-bottom:35px;font-size:20px;}.carousel-indicators{bottom:0!important;}#legal{margin-top:20px;font-size:13px;padding:20px;background-color:#fff;-webkit-box-shadow:0 4px 10px rgba(0,0,0,.2);-moz-box-shadow:0 4px 10px rgba(0,0,0,.2);box-shadow:0 4px 10px rgba(0,0,0,.2);}#legal>.copyright{margin-top:10px}#newsletter{background:#fff;overflow:hidden;margin:10px 0;padding:0;-webkit-box-shadow:0px 0 20px rgba(59,89,152,0.5);-moz-box-shadow:0px 0 20px rgba(59,89,152,0.5);box-shadow:0px 0 20px rgba(59,89,152,0.5);text-align:center;-webkit-transition:all 0.3s linear;transition:all 0.3s linear;}#newsletter.flash{height:223px}#newsletter>.facebook{padding:0;overflow:hidden}#newsletter>.facebook>.fb-like-box{margin-left:-9px!important}#newsletter>.subscribe{padding:10px}#newsletter>.subscribe>.input-block{overflow:hidden}#newsletter>.subscribe>.input-block>input{width:55%;float:left;border:1px solid #bbb;border-right:0;padding:5px 10px;font-size:16px;-webkit-box-shadow:inset 0 1px 1px 0 rgba(195,195,195,.5);}#newsletter>.subscribe>.subtitle{font-size:10px;color:#FE2E2E;}#submitEmail{width:45%;float:left;background-color:#5dab30;border:1px solid #2fab40;border-radius:2px;border-top-left-radius:0;border-bottom-left-radius:0;text-shadow:1px 1px 1px rgba(0,0,0,.2);cursor:pointer;text-align:center;line-height:32px;color:#fff;font-size:16px;}#submitEmail:hover{text-shadow:0px 0px 10px rgba(255,255,255,.8);border-color:#bbb;}#newsletter>.subscribe>.confirm{font-size:16px;text-shadow:1px 1px 1px rgba(0,0,0,.2)}#newsletter>.subscribe>.confirm>.glyphicon.glyphicon-ok{background-color:#5dab30;border:1px solid #2fab40;width:34px;color:#fff;line-height:32px;text-align:center;border-radius:17px;margin-right:10px;}
	@media screen and (max-width: 480px) {
		.navbar-nav>li{float:none;}
	}
        </style>
        <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "WebSite",
              "url": "http://hqapps.net/"
            }
        </script>
    </head>
    <body ng-app="my-app">
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '1565134950451411',
                    cookie     : false,
                    xfbml      : true,
                    version    : 'v2.8'
                });
            };
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-85002294-1', 'auto');
            ga('send', 'pageview');
        </script>

        <nav class="navbar navbar-default navbar-custom">
	  <div class="wrapper">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="//hqapps.net/video"><img src="http://hqapps.net/public/images/logo.png"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" ng-controller="CateListController">
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
	     
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
        <div style="text-align: center;"></div>
        <div class="wrapper">
            <div id="main" ng-controller="VideoController">
                <ul id="quizzList" data-ng-init="getListVideo('<?php echo (isset($cate->id)) ? $cate->id : ""; ?>')">
                    <li class="quizz quizzv2" ng-repeat="video in data" >
                        <div class="cover">
                            <a  ng-href="/video/{%video.slug%}.{%video.id%}.html" title="{% video.title %}">
                                <img  ng-src="{{asset('upload/images/316x166')}}/{% video.image %}" alt="{% video.title  %}">
                                <div class="innertitle">{% video.title | cut:true:50:' ...' %}</div>
                            </a>
                        </div>
                        <div class="infos">
                            <div class="white_shadow"></div>
                            <div class="title"><a href="/video/{%video.slug%}.{%video.id%}.html"">{% video.title | cut:true:50:' ...' %}</a></div>
                            <div class="description"></div>
                        </div>
                    </li>
                    
                    <div style="text-align: center;"></div>
                    <li class="quizz quizzv2">
                        <nav aria-label="...">
                            <ul class="pager">
                                <li class="previous" ng-class="{disabled: page==1}"> <a href="" ng-click = "previouspage('new')" class="previous">« Quay lại</a></li>
                                <li class="next" ng-class="{disabled: end}"><a href="" ng-click = "nextpage('new')" class="older">Xem tiếp »</a></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
            <div id="sidebar">
                <div id="newsletter">
                    <div class="facebook">
                        <div class="fb-page" data-href="https://www.facebook.com/dmhaylam" data-width="300px" data-height="230px" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/dmhaylam"><a href="https://www.facebook.com/dmhaylam">HQAPPS Ứng Dụng Vui Facebook! - HQAPPS.NET</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="legal">
                    <a href="http://hqapps.net/privacy.php">Privacy</a> -
                    <a href="http://hqapps.net/EULA.php">EULA</a>
                    <div class="copyright">© 2016 - 2017 5Birds Team.</div>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
        <script src="<?php echo asset('app/app.js') ; ?>"></script>
        <script src="<?php echo asset('app/controller/guests/CateListController.js') ; ?>"></script>
        <script  src="<?php echo asset('app/controller/guests/VideoController.js') ; ?>"> </script>
    </body>
</html>