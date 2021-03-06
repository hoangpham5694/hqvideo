<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
use App\Category;
class HomeController extends Controller
{
    public function getIndex()
    {
        return view('guests.index');
    }
    public function getPlayVideo($alias,$id )
    {
      $video = Video::findOrFail($id);
      if($video->status=="stop"){
        return view('errors.404',['message'=>'Xin lỗi, nội dung bạn tìm kiếm hiện không tồn tại']);
      }
      $video->view++;
      $video->save(); 
      return view('guests.playvideo',['video'=>$video]);
    }
    public function getViewVideo($id)
    {
        $video = Video::findOrFail($id);
        return view('guests.viewvideo',['video'=>$video]);
    }
    public function getListVideoWithCate($cateslug, $cateid)
    {
        $cate = Category::findOrFail($cateid);
        return view('guests.index',['cate'=>$cate]);
    }
    
}
