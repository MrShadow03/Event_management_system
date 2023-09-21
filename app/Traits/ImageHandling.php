<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait ImageHandling {

    public function uploadImage($inputFileName, $dict, $defaultImageName = 'default.webp'){
        //check if has image
        $hasImageInput = request()->hasFile($inputFileName);
        if($hasImageInput){
            //get image
            $image = request()->file($inputFileName);
            //upload image
            $path = $image->store($dict, 'public');
            //return image path
            return $path;
        }
        //return default image path
        return $dict . '/' . $defaultImageName;
    }

    public function deleteOldImage($inputFileName, $oldImage = null, $defaultImageName = 'default.webp'){
        //check if has new image or default image
        $hasImageInput = request()->hasFile($inputFileName);
        $hasImageInDatabase = $oldImage != null;
        $oldImageName = $hasImageInDatabase ? explode('/', $oldImage)[1] : null;
        $isDefaultImage = $oldImageName && $oldImageName == $defaultImageName;
        //if has new image then delete old image if not default image
        if($hasImageInput && !$isDefaultImage){
            Storage::disk('public')->delete($oldImage);
        }
    }

    public function updateImage($inputFileName, $dict, $oldImage = null, $defaultImageName = 'default.webp'){
        $hasImageInput = request()->hasFile($inputFileName);
        $hasImageInDatabase = $oldImage != null;

        // Delete the old image and upload the new one if a new image is provided
        if ($hasImageInput) {
            $this->deleteOldImage($inputFileName, $oldImage, $defaultImageName);
            return $this->uploadImage($inputFileName, $dict, $defaultImageName);
        }

        // If there is no new image but an old one exists, return the old image
        if ($hasImageInDatabase) {
            return $oldImage;
        }

        // Return the default image path if no new image or old image
        return $dict . '/' . $defaultImageName;
    }
}
