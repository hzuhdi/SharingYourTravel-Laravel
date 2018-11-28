<?php
namespace App\Services;

use App\Blog;

class BlogService {

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    // create and return a Blog object
    public function create($title, $content, $countries, $image){
        $b = new Blog();
        $b->title = $title;
        $b->content = $content;
        $b->countries = $countries;
        if ($image){
            $filename = $this->imageService->getFileNameFromRequestAndSaveIt($image);
            $b->image = $filename;
        }
        return $b;
    }

    // update a given $blog
    public function update($blog, $title, $content, $countries, $image){
        $blog->title = $title;
        $blog->content = $content;
        if ($image){
            $this->imageService->removeExistingImage($blog->image);
            $filename = $this->imageService->getFileNameFromRequestAndSaveIt($image);
            $blog->image = $filename;
        }
        $blog->countries = $countries;
        $blog->update();
    }
}
