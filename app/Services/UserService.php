<?php
namespace App\Services;

use App\User;

class UserService {

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
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
}
