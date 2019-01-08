<?php
namespace App\Services;

use App\User;
use App\Exceptions\BadCredentialsApi;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

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
        $user->password = $password ? $password : $user->password;
        $user->bio = $bio ? $bio : $user->bio;
        if ($image){
            if ($user->image)
                $this->imageService->removeExistingImage($user->image);
            $filename = $this->imageService->getFileNameFromRequestAndSaveIt($image);
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
}
