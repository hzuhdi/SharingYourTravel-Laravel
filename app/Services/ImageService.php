<?php

use Intervention\Image\ImageManagerStatic as Image;
namespace App\Services;


class ImageService {

    public function getFileNameFromRequestAndSaveIt($file_from_request){
        $filename = $file_from_request->getClientOriginalName();
        $image_resize = Intervention\Image\ImageManagerStatic::make($file_from_request->getRealPath());
        $image_resize->resize(300, 300);
        $image_resize->save(public_path('/images/' .$filename));
        /*$file_from_request->move(public_path()."/images/", $filename);*/
        return $filename;
    }

    public function removeExistingImage($image){
        unlink(public_path() . "/images/" . $image);
    }
}
