<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddVideoRequest;
use App\Http\Requests\EditVideoRequest;
use App\Http\Requests;
use App\Video;
use App\VideoCate;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Support\Facades\Storage;
use Google_Client; 
use Google_Service_Drive;
use Intervention\Image\Facades\Image;
class VideoController extends Controller
{
	public function getVideoListManager()
	{
		$cates = Category::get();
		return view('managers.videos.list',['cates'=>$cates]);
	}
	public function getVideoListAjax(Request $request, $max, $page)
	{
		
    	$numberRecord= $max;
        $vitri =($page -1 ) * $numberRecord;
 		$cateId = $request->cateid;
    	$keyword = $request->key;
        if($cateId == ""){
            $cateId = null;
        }

    	$videos = Video::join('users','users.id','=','videos.created_by')
    	->leftJoin('video_cate','video_cate.video_id','=','videos.id')
    	->select('videos.id','videos.slug','videos.image','users.firstname','videos.created_at','users.lastname','users.username','videos.title','videos.url','videos.view','videos.share')
        ->where(function($query) use ($keyword){
            $query->where('videos.title','LIKE','%'.$keyword.'%');
        })
        ->where('video_cate.cate_id','LIKE', $cateId)
    	->limit($numberRecord)->offset($vitri)    
    	->orderBy('videos.id','DESC')	
    	->groupBy('videos.id')
    	->get();
    	return $videos;
	}
	public function getTotalVideosAjax()
	{
		return Video::count();
	}


    public function getAddVideoManager()
    {
    	$cates = Category::get();
    	return view('managers.videos.add',['cates'=>$cates]);
    }
    public function postAddVideoManager(AddVideoRequest $request)
    {
    	//dd($request);

    	$video = new Video();
    	$user = Auth::user();
    	$video->title = $request->txtTitle;
    	$video->slug =str_slug($request->txtTitle, "-");
    	$video->description = $request->txtDescription;
    	$video->view=0;
    	$video->share=0;
    	$video->url=$request->txtUrl;
		$video->created_by= $user->id;
		$cates = $request->cblCate;
		//dd($cates);
		 $file = $request->file('fileImage');
     //   dd(strlen($file));
        if(strlen($file) >0){
            $filename = str_slug($request->txtTitle, "-").'-'.time().'_'.$file->getClientOriginalName();
            $destinationPath = 'upload/images';
              $img = Image::make($file);
            $file->move($destinationPath,$filename);
         //   $img = Image::make($destinationPath.'/'.$filename);

            $img->resize(200, 124);
            $img->save($destinationPath.'/200x124/'.$filename);
            $img->resize(260, 137);
            $img->save($destinationPath.'/260x137/'.$filename);
            $img->resize(107, 57);
            $img->save($destinationPath.'/107x57/'.$filename);
            $img->resize(133, 70);
            $img->save($destinationPath.'/133x70/'.$filename);
            $video->image= $filename;
        }
        
		$video->duration = "";
		$video->save();
		foreach($cates as $value){
			$videoCate = new VideoCate();
			$videoCate->video_id = $video->id;
			$videoCate->cate_id = $value;
			//echo $value."<br>";
			$videoCate->save();
		}
		return redirect("managersites/video/list")->with(['flash_level'=>'alert-success','flash_message' => 'Thêm video thành công'] );

    }
    public function getUpload()
    {
        return view('managers.videos.upload');
    }
    public function postUpload(Request $request)
    {
        $file = $request->file('fileVideo');
     //   dd(strlen($file));
        if(strlen($file) >0){
            $filename = "hqapp_net.".$file->getClientOriginalExtension();;
            $destinationPath = 'upload/videos/'.time().'_'.str_slug($file->getClientOriginalName(), "-");
            $file->move($destinationPath,$filename);
           // $video->url= $filename;
      //      $disk = Storage::disk('local');
         //   $disk->put($filename, fopen($file, 'r+'));
        //    Storage::disk('google')->put($filename,  fopen($file, 'r+'));
         //   $url = Storage::disk('google')->url($filename);
            return asset($destinationPath).'/'.$filename;
            return $url;
        }else{
            return "Tải lên không thành công";
        }
       // echo $filename;
      // 
    }
    public function getDeleteVideosAjax($id)
    {
    	try{
    		DB::beginTransaction();
			$video = Video::findOrFail($id);
			$videoCates = VideoCate::where('video_id','=',$id)->delete();
		//	dd($videoCates);
    		$video->delete();
    		DB::commit();
    		return "Xóa video thành công";

    	}catch(Exception $e){
			DB::rollback();
			return "Lỗi trong quá trình thực hiện";
    	}
    }
    public function getEditVideoManager($id)
    {
    	$cates = Category::get();
    	$videoCates = VideoCate::where('video_id','=',$id)->get();
    	$video = Video::findOrFail($id);
    	return view('managers.videos.edit',['cates'=>$cates,'videoCates'=>$videoCates,'video'=>$video]);

    }
    public function postEditVideoManager($id, EditVideoRequest$request )
    {
    	$video = Video::findOrFail($id);

    
    	$video->title = $request->txtTitle;
    	$video->slug =str_slug($request->txtTitle, "-");
    	$video->description = $request->txtDescription;

    	$video->url=$request->txtUrl;
		
		//dd($cates);
        $file = $request->file('fileImage');
        if(strlen($file) >0){
            $filename = str_slug($request->txtTitle, "-").'-'.time().'_'.$file->getClientOriginalName();
            $destinationPath = 'upload/images';
            $img = Image::make($file);
            $file->move($destinationPath,$filename);
         //   $img = Image::make($destinationPath.'/'.$filename);

            $img->resize(200, 124);
            $img->save($destinationPath.'/200x124/'.$filename);
            $img->resize(260, 137);
            $img->save($destinationPath.'/260x137/'.$filename);
            $img->resize(107, 57);
            $img->save($destinationPath.'/107x57/'.$filename);
            $img->resize(133, 70);
            $img->save($destinationPath.'/133x70/'.$filename);
            $video->image= $filename;
        }
		$video->duration = "";
		$video->save();
         $cates = VideoCate::join("categories",'categories.id','=','video_cate.cate_id')
        ->select('video_cate.id','categories.name','video_cate.video_id')
        ->where('video_cate.video_id','=',$id)
        ->delete();
        $cates = $request->cblCate;
		foreach($cates as $value){
			$videoCate = new VideoCate();
			$videoCate->video_id = $video->id;
			$videoCate->cate_id = $value;
			//echo $value."<br>";
			$videoCate->save();
		}
		return redirect("managersites/video/list")->with(['flash_level'=>'alert-success','flash_message' => 'Sửa video thành công'] );
    }
    public function getDetailVideoManager($id)
    {
        $video = Video::findOrFail($id);
        $cates = VideoCate::join("categories",'categories.id','=','video_cate.cate_id')
        ->select('video_cate.id','categories.name','video_cate.video_id')
        ->where('video_cate.video_id','=',$id)
        ->get();
      //  dd($cates);
        return view('managers.videos.detail',['video'=>$video,'cates'=>$cates]);
    }
    public function getViewVideoManager($id)
    {
        $video = Video::findOrFail($id);
        return view('managers.videos.viewvideo',['video'=>$video]);
    }

    public function getTest()
    {
         Storage::disk('google')->put('test.txt', 'Hello World');
         $url = Storage::disk('google')->url("test.txt");
        return $url;
    }
    public function getRandomVideosAjax($number)
    {
        $numberRecord = $number;
        $video = Video::select('id','title','description','slug','view','share','image','url','created_at')->inRandomOrder()->limit($numberRecord)->offset(0)->get();;
        return json_encode($video);
    }
}
