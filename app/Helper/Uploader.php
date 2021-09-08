<?php 
namespace App\Helper;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use File as FileManager;
class Uploader {

    public static function upload2files($file1=null,$file2=null,$dir = null,$location){
        $path = null;
        $current_timestamp = null;
        $fullPath1 = null;
        $fullPath2 = null;
        if($file1 != null || $file2 != null)
        {
        $current_timestamp = $dir != null ? $dir : Carbon::now()->timestamp;
        $path = $location . "/" ;
        }
    
        if($file1)
        {
        $storagePath1 = Storage::disk('public')->put($path.$current_timestamp."/"."front", $file1);
        $fullPath1 = url('/') . '/storage/' . $storagePath1;
        }
        if($file2){
        $storagePath2 = Storage::disk('public')->put($path.$current_timestamp."/"."back", $file2);
       
        $fullPath2 = url('/') . '/storage/' . $storagePath2;
        }

        
        
        return ["full_path1" => $fullPath1,'full_path2'=>$fullPath2, "dir" => $current_timestamp];
    }
    public static function upload($file, $location)
    {
        $current_timestamp = Carbon::now()->timestamp;
        $path = $location . "/" . $current_timestamp;
        $storagePath = Storage::disk('public')->put($path, $file);
        $fullPath = url('/') . '/storage/' . $storagePath;
        return ["full_path" => $fullPath, "dir" => $current_timestamp];
    }

    public static function remove($location,$type, $directory)
    {
        $public_path = public_path('storage/' . $location . '/' .$directory."/".$type);
        if (FileManager::exists($public_path)) {
            FileManager::deleteDirectory($public_path);
        }
    }
}