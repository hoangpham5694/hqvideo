@extends('managers.master')
@section('header')
    <title>Manager::Xem video</title>
        <meta name="csrf-token" content="{{ Session::token() }}"> 
	<link rel="stylesheet" href="{!! asset('template/css/mediaelementplayer.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('template/css/normalize.min.css') !!}">	
	<link rel="stylesheet" href="{!! asset('template/css/teplayer.css') !!}">
	<script src="{!! asset('template/js/_teplayer.min.js') !!}"></script>
	<script src="{!! asset('template/js/mediaelement-and-player.js') !!}"></script>
@endsection
@section('title','Xem video')
@section('content')
Tên video: {{$video->title}}
<br>
Thể loại: 
@foreach($cates as $cate)
	{{$cate->name}},
@endforeach
<h5>Local url</h5>
<div id='teplayer' class='te-player-container'></div>
	<iframe src="{{ url('managersites/video/viewvideo')}}/{!! $video->id !!}/local" width="600px%" height="550px" scrolling="no" frameborder="0" allowfullscreen=""></iframe>

	<h5>Drive url</h5>
<div id='teplayer' class='te-player-container'></div>
	<iframe src="{{ url('managersites/video/viewvideo')}}/{!! $video->id !!}/drive" width="600px%" height="550px" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
@endsection
@section('footer')

@endsection
