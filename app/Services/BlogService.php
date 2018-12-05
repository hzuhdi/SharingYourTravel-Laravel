<?php
namespace App\Services;

use App\Blog;

class BlogService {

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    // create a blog with $user as author
    public function create($user, $title, $content, $countries, $image){
        $b = new Blog();
        $b->title = $title;
        $b->content = $content;
        $b->countries = $countries;
        if ($image){
            $filename = $this->imageService->getFileNameFromRequestAndSaveIt($image);
            $b->image = $filename;
        }
        $user->blogs()->save($b);
        $b->save();
        return $b;
    }

    // update a given $blog
    public function update($blog, $title, $content, $countries, $image){
        $blog->title = $title ? $title : $blog->title;
        $blog->content = $content ? $content : $blog->content;
        if ($image){
            if ($blog->image)
                $this->imageService->removeExistingImage($blog->image);
            $filename = $this->imageService->getFileNameFromRequestAndSaveIt($image);
            $blog->image = $filename;
        }
        $blog->countries = $countries ? $countries : $blog->countries;
        $blog->update();
        return $blog;
    }

    public function getLatestPost($amount){
        return Blog::orderBy('created_at', 'desc')->take($amount)->get();
    }

    public function getBlogsByCountry($country){
        return Blog::where('countries', $country)->get();
    }
}
