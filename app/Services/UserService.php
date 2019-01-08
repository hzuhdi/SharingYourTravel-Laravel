<?php
namespace App\Services;

use App\User;
use App\Exceptions\BadCredentialsApi;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Hash;

class UserService {

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    // return the user associated with the given JWT and throw associated error
    public function getAPIUser(){
        try {
            $current_user = JWTAuth::parseToken()->authenticate();
        } catch (JWTException $e) {
            throw new BadCredentialsApi();
        }
        return $current_user;
    }

    // update a user
    public function update($user, $email, $name, $password, $bio, $image){
        $user->email = $email ? $email : $user->email;
        $user->name = $name ? $name : $user->name;
        $user->password = $password ? Hash::make($password) : $user->password;
        $user->bio = $bio ? $bio : $user->bio;
        if ($image){
            if ($user->image)
                $this->imageService->removeExistingImage($user->image);
            $filename = $this->imageService->saveImage($image);
            $user->image = $filename;
        }
        $user->update();
        return $user;
    }

    public function update_type($user, $type){
        $user->type = $type ? $type : $user->type;
        $user->update();
        return $user;
    }

    // throw the associated error if the user has no rights on this blog
    public function checkRightsOnBlog($user, $blog){
        $isOwner = $blog->user->id === $user->id;
        if (!$isOwner && !$user->isAdmin())
            throw new BadCredentialsApi();
    }
}
