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

    public function test_should_get_filename_from_file_and_save_it()
    {
       $mock_image = UploadedFile::fake()->image(self::MOCK_IMAGE_NAME);
       $filename = $this->imageService->getFileNameFromRequestAndSaveIt($mock_image);

       // testing that it return the good filename
       $this->assertSame($filename, self::MOCK_IMAGE_NAME);

       // testing that the file is saved in the good dir
       $full_path = public_path() . "/images/" . self::MOCK_IMAGE_NAME;
       $this->assertFileExists($full_path);

       // deleting the file now that tests are over
       unlink($full_path);
    }
}
