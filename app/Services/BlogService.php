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
        //content will be changed into summernote
        //$b->content = $content;
 /*       $detail=$request->summernoteInput;

        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getelementsbytagname('img');

        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', $image_name);
        }

        $detail = $dom->savehtml();
        $summernote = new Summernote;
        $summernote->content = $detail;
        $summernote->save();
            return view('summernote_display',compact('summernote'));*/


        //
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
}
