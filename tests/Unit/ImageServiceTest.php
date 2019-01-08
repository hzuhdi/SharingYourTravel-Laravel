<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class ImageServiceTest extends TestCase
{
    const MOCK_IMAGE_NAME = "image_test.png";

    public function setUp() {
        parent::setUp();
        $this->imageService = $this->app->make('App\Services\ImageService');
    }

    protected function publify_filename($filename){
        return public_path().'/images/'.$filename;
    }

    public function test_should_save_image()
    {
       $mock_image = UploadedFile::fake()->image(self::MOCK_IMAGE_NAME);
       $filename = $this->imageService->saveImage($mock_image);

       // testing that it return the good filename
       $this->assertSame($filename, time().self::MOCK_IMAGE_NAME);

       // testing that the file is saved in the good dir
       $this->assertFileExists($this->publify_filename($filename));

       // deleting the file now that tests are over
       unlink($this->publify_filename($filename));
    }
}
