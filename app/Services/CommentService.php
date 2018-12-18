<?php

namespace App\Services;

use App\Comment;


class CommentService {

	public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

	public function create($content, $user, $blog){
		$c = new Comment();
		$c->content = $content;
		$c->user_id = $user['id'];
		$c->blog_id = $blog['id'];
		$user->comments()->save($c);
		$blog->comments()->save($c);
		$c->save();
		return $c;
	}

   }