<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use App\Photo;
use App\User;

class galleryController extends Controller
{
    private $photos_path;
 
    public function __construct()
    {
        $this->photos_path = public_path('/gallery_images');
    }

    function getPhotos(){
        $images = Photo::where('type',3)->get();
        return view('gallery',['photos' => $images]);
    }

    public function store(Request $request){
        $photos = $request->file('file');
 
        if (!is_array($photos)) {
            $photos = [$photos];
        }
 
        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }
 
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
 
            $photo->move($this->photos_path, $save_name);
 
            $upload = new Photo();
            $upload->filename = $save_name;
            $upload->resized_name = $resize_name;
            $upload->original_name = basename($photo->getClientOriginalName());
            $upload->type = $request->type;
            $upload->save();
        }
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }

    public function destroy(Request $request){
        $filename = $request->id;
        if(isset($request->manual)) $fname = "filename";
        else $fname = "original_name";
        $uploaded_image = Photo::where($fname, basename($filename))->first();
 
        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }
 
        $file_path = $this->photos_path . '/' . $uploaded_image->filename;
 
        if (file_exists($file_path)) {
            unlink($file_path);
        }
 
        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }
        
        
        if(isset($request->manual)) {
            return redirect('/gallery');
        }
        
        return Response::json(['message' => 'File successfully delete'], 200);
    }

    public function update(Request $request){
        $photo = $request->file('file');
  
        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }
        
        $file_name = '';
        switch($request->type){
            case('0'): $file_name = 'bg-home.jpg'; break;
            case('1'): $file_name = 'img-home.jpg'; break;
            case('2'): $file_name = 'bg-pages.jpg'; break;
        };

        $path = public_path('/image');
        $photo->move($path, $file_name);

        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }
}
