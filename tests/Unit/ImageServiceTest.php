<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class ImageServiceTest extends TestCase
{
    const MOCK_IMAGE_NAME = "image_test.png";
    const MOCK_IMAGE_FULL_PATH = "/public/images/";

    public function setUp() {
        parent::setUp();
        $this->imageService = $this->app->make('App\Services\ImageService');
    }

    public function test_should_get_filename_from_file_and_save_it()
    {
       $mock_image = UploadedFile::fake()->image(self::MOCK_IMAGE_NAME);
       $filename = $this->imageService->getFileNameFromRequestAndSaveIt($mock_image);

       // testing that it return the good filename
       $this->assertSame($filename, self::MOCK_IMAGE_NAME);

       // testing that the file is saved in the good dir
       $this->assertFileExists(self::MOCK_IMAGE_FULL_PATH);

       // deleting the file now that tests are over
       unlink(self::MOCK_IMAGE_FULL_PATH);
    }
}
