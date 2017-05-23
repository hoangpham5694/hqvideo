@extends('managers.master')
@section('header')
<title>Manager::Quản lý video</title>
@endsection
@section('title','Quản lý video')
@section('content')
<div ng-controller="VideoListController">
  <a  class="btn btn-outline btn-primary" href="{{ url('managersites/video/add') }}">Thêm video mới</a>
  <div class="row" >
    <div class="col-sm-4">
     <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Status:</label>
      <div class="col-sm-8">
        <select name="" ng-model="sltStatus" class="form-control" ng-change="changeStatus()" id="">
          <option value="">Tất cả</option>
         
          <option value="pending" >Pending</option>
          <option value="active" >Active</option>
          <option value="stop" >Stop</option>
        </select>
      </div>

    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Danh mục:</label>
      <div class="col-sm-8">
        <select name="" ng-model="sltCateId" class="form-control" ng-change="changeCate()" id="">
          <option value="">Tất cả</option>
          @foreach($cates as $cate)
          <option value="{{ $cate->id }}" >{{ $cate->name }}</option>
          @endforeach

        </select>
      </div>

    </div>
  </div>
  <div class="col-sm-4">
    <div class="input-group custom-search-form">
      <input type="text" ng-model="txtKeyword" ng-change="changeKey()" class="form-control" placeholder="Nhập Tên app... ">
      <span class="input-group-addon" id="sizing-addon2"> <i class="fa fa-search"></i></span>

    </div>
  </div>
</div>
<table class="table table-hover" >
  <thead>
    <tr>
      <th>Mã</th>
      <th>Tiêu đề</th>
      <th>Người tạo</th>
      <th>View</th>
      <th>Share</th>
      <th>Status</th>
      <th>Set status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <tr ng-repeat="video in videos">
    <td>{%video.id%}</td>
    <td>{%video.title%}</td>
    <td>{%video.username%}</td>
    <td>{%video.view%}</td>
    <td>{%video.share%}</td>
    <td>{%video.status%}      
    </td>
    <td> 
    <button ng-click="setStatus(video.id,'active')" class="btn btn-success btn-xs" ng-disabled="video.status == 'active'">Active</button> 
    <button ng-disabled="video.status == 'pending'" class="btn btn-warning btn-xs" ng-click="setStatus(video.id,'pending')">Pending</button>  
    <button ng-disabled="video.status == 'stop'" class="btn btn-danger btn-xs" ng-click="setStatus(video.id,'stop')">Stop</button>
   </td>
    <td>
     <a class="btn btn-xs btn-primary" ng-href="{{ url('managersites/video/detail') }}/{%video.id%}" >
       <i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Detail
     </a>
     <a class="btn btn-xs btn-primary" ng-href="{{ url('managersites/video/edit') }}/{%video.id%}" >
       <i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Sửa
     </a>
     <a class="btn btn-xs btn-danger" ng-click="delete(video.id)" >
       <i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Xóa
     </a>

   </td>
 </tr>
</tbody>
</table>

<div class="btn-toolbar" role="toolbar" aria-label="...">
  <div class="btn-group" role="group" aria-label="...">
  	<button type="button" ng-repeat="n in [1,total] | makeRange" ng-click="changePage(n)" class="btn btn-default" ng-disabled="page == n">{% n %}</button>
  </div>

</div>


</div>
@endsection
@section('footer')
<script src="<?php echo asset('app/controller/managers/VideoController.js') ; ?>"></script>  
@endsection
