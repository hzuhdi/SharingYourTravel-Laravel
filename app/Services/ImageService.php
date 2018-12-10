<?php
namespace App\Services;

class ImageService {

    public function getFileNameFromRequestAndSaveIt($file_from_request){
        $filename = $file_from_request->getClientOriginalName();
        $file_from_request->move(public_path()."/images/", $filename);
        //$file_from_request->resize(300, 300);
        return $filename;
    }

    public function removeExistingImage($image){
        unlink(public_path() . "/images/" . $image);
    }
}
