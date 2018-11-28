<?php
namespace App\Services;

class ImageService {

    public function getFileNameFromRequestAndSaveIt($file_from_request){
        $file = $file_from_request;
        $filename = $file->getClientOriginalName();
        $file_from_request->move("images/", $filename);
        return $filename;
    }
}
