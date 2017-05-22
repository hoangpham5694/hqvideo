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
use FFMpeg;
use Psr\Logger\LoggerInterface;
use DateTime;
use Illuminate\Support\Facades\File;

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
        $status = $request->status;
        if($cateId == ""){
            $cateId = null;
        }
        if($status == ""){
            $status = null;
        }

    	$videos = Video::leftJoin('video_cate','video_cate.video_id','=','videos.id')
   //     ->leftjoin('categories','categories.id','=','video_cate.cate_id')
        ->join('users','users.id','=','videos.created_by')
    	
    	->select('videos.id','videos.slug','videos.duration','videos.image','users.firstname','videos.created_at','users.lastname','users.username','videos.title','videos.url','videos.status','videos.view','videos.share')
        ->where(function($query) use ($keyword){
            $query->where('videos.title','LIKE','%'.$keyword.'%');
        })
        ->where('video_cate.cate_id','LIKE', $cateId)
        ->where('videos.status','LIKE', $status)
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
        $video->url_drive=$request->txtUrlDrive;
		$video->created_by= $user->id;
		$cates = $request->cblCate;
        $video->status = "pending";
		//dd($cates);
		 $file = $request->file('fileImage');
     //   dd(strlen($file));
        if(strlen($file) >0){
            $filename = str_slug($request->txtTitle, "-").'-'.time().'_'.$file->getClientOriginalName();
            $destinationPath = 'upload/images';
              $img = Image::make($file);
            $file->move($destinationPath,$filename);
         //   $img = Image::make($destinationPath.'/'.$filename);

            $img->resize(800, 420);
            $img->save($destinationPath.'/800x420/'.$filename);
            $img->resize(316, 166);
            $img->save($destinationPath.'/316x166/'.$filename);
            $img->resize(300, 157);
            $img->save($destinationPath.'/300x157/'.$filename);
            $img->resize(198, 104);
            $img->save($destinationPath.'/198x104/'.$filename);
            $video->image= $filename;
        }
        
		$video->duration = $request->txtDuration;
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
            $filename = "hqapps_net.".$file->getClientOriginalExtension();
            $folderName= time().'_'.str_slug($file->getClientOriginalName(), "-");
            $destinationPath = 'upload/videos/'.$folderName;
            $urlDrive = "";
            // $file->move($destinationPath,$filename);
           Storage::disk('google')->put($folderName.$filename,   File::get($file) );
           $urlDrive = Storage::disk('google')->url($folderName.$filename);
          //  fopen($file, 'r+');
            $file->move($destinationPath,$filename);
            $ffprobe = FFMpeg\FFProbe::create(
                [
                 'ffmpeg.binaries'  => '/usr/bin/ffmpeg',
                 'ffprobe.binaries' => '/usr/bin/ffprobe',
                'timeout'          => 7200, // the timeout for the underlying process
                'ffmpeg.threads'   => 1,   // the number of threads that FFMpeg should use
            ]);

            $duration = $ffprobe->format(asset($destinationPath).'/'.$filename)->get('duration'); 

            $duration = (int)$duration;

            $sec= $duration%60;
            
            $min = ($duration - $sec)/60;
            if($sec < 10){
                $sec= "0".$sec;
            }
            if($min < 10){
                $min= "0".$min;
            }
            
            $returnDuration = $min.':'.$sec;


        return json_encode(['url'=>asset($destinationPath).'/'.$filename,'duration'=>$returnDuration,'url_drive'=>$urlDrive]);




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
        $video->url_drive = $request->txtUrlDrive;
		$video->status= $request->sltStatus;
		//dd($cates);
        $file = $request->file('fileImage');
        if(strlen($file) >0){
            $filename = str_slug($request->txtTitle, "-").'-'.time().'_'.$file->getClientOriginalName();
            $destinationPath = 'upload/images';
            $img = Image::make($file);
            $file->move($destinationPath,$filename);
         //   $img = Image::make($destinationPath.'/'.$filename);

            $img->resize(800, 420);
            $img->save($destinationPath.'/800x420/'.$filename);
            $img->resize(316, 166);
            $img->save($destinationPath.'/316x166/'.$filename);
            $img->resize(300, 157);
            $img->save($destinationPath.'/300x157/'.$filename);
            $img->resize(198, 104);
            $img->save($destinationPath.'/198x104/'.$filename);
            $video->image= $filename;
        }
		$video->duration = $request->txtDuration;
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
    public function getViewVideoManager($id, $url)
    {
        $video = Video::findOrFail($id);
        return view('managers.videos.viewvideo',['video'=>$video,'url'=>$url]);
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

    public function getNewVideosAjax($number)
    {
        $numberRecord = $number;
        $video = Video::select('id','title','description','slug','view','share','image','url','created_at')
        ->where('status','=','active')
        ->limit($numberRecord)->offset(0)->orderBy('id','DESC')->get();;
        return json_encode($video);
    }
    public function getHotVideosAjax($number)
    {
        $numberRecord = $number;

      //  $date = new DateTime();
     //   $date->add(DateInterval::createFromDateString('yesterday'));

      //  echo date("Y-m-d",strtotime("-30 days")) . "\n";

        $video = Video::select('id','title','description','slug','view','share','image','url','created_at')
        ->where('status','=','active')
        ->where('created_at','>=',date("Y-m-d",strtotime("-30 days")))
        ->limit($numberRecord)->offset(0)->orderBy('view','DESC')->get();
        return json_encode($video);
    }


    public function getSetStatusAjax($videoid, $status)
    {
         $video = Video::findOrFail($videoid);
         $video->status = $status;
         $video->save();
         return "Set status: ".$status;
    }




}
