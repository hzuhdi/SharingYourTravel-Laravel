<?php
namespace App\Services;

class ImageService {

    public function getFileNameFromRequestAndSaveIt($file_from_request){
        $filename = $file_from_request->getClientOriginalName();
        $file_from_request->move(public_path()."/images/", $filename);
        return $filename;
    }

    public function removeExistingImage($image){
        unlink("images/" . $image);
    }
}
