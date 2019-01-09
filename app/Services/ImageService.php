<?php

namespace App\Services;

use Image;



class ImageService {

    // returns a string (filename)
    public function saveImage($file_from_request){
        /*$filename = $file_from_request->getClientOriginalName();
        $image_resize = Intervention\Image\ImageManagerStatic::make($file_from_request->getRealPath());
        $image_resize->resize(300, 300);
        $image_resize->save(public_path('/images/' .$filename));*/
        /*$file_from_request->move(public_path()."/images/", $filename);*/

        /*TO DO up here to use intervention to resizing the image*/
        //Intervention Task
/*        $myImage = $file_from_request;
        $thumbnailImage = Image::make($myImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $thumbnailImage->resize(300,200);
        $thumbnailImage->save($thumbnailPath.time().$myImage->getClientOriginalName());*/

        //added
        $myImage = Image::make($file_from_request);
        $watermark = Image::make(public_path('/images/watermark2.png'));
        $myImage->resize(800,600);
        $watermarkSize = $myImage->width() - 20;
        $watermarkSize = $myImage->height() / 2;
        $resizePercentage = 70;//70% less then an actual image (play with this value)
        $watermarkSize = round($myImage->width() * ((100 - $resizePercentage) / 100), 2); //watermark will be $resizePercentage less then the actual width of the image

        $watermark->resize($watermarkSize, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $myImage->insert($watermark, 'center');

        $filename = $file_from_request->getClientOriginalName();
        $filename = time().$filename;
        $myImage->save(public_path()."/images/".$filename);

        //$myImage->save($originalPath.time().$file_from_request->getClientOriginalName());
        //

        /*$filename = $file_from_request->getClientOriginalName();
        $filename = time() . $filename;
        $file_from_request->move(public_path()."/images/", $filename);*/
        //$file_from_request->resize(300, 300);
        return $filename;
    }

    public function removeExistingImage($image){
        unlink(public_path() . "/images/" . $image);
    }
}
