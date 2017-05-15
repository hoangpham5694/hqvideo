<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
class HomeController extends Controller
{
    public function getIndex()
    {
      return view('guests.index');
    }
    public function getPlayVideo($id, $alias)
    {
      $video = Video::findOrFail($id);
      return view('guests.playvideo',['video'=>$video]);
    }
    public function getViewVideo($id)
    {
        $video = Video::findOrFail($id);
        return view('guests.viewvideo',['video'=>$video]);
    }
}
