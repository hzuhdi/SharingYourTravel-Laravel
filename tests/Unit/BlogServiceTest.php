<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

class BlogServiceTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    const MOCK_IMAGE_NAME = "image_test.png";

    public function setUp() {
        parent::setUp();
        $this->imageService = $this->app->make('App\Services\ImageService');
        $this->blogService = $this->app->make('App\Services\BlogService');
    }

    private function addPublicPathAndUnlink(String $imagename){
        unlink(public_path() . "/images/" . $imagename);
    }

    public function test_should_create_a_blog_in_database()
    {
        // we need a user in database to create a blog
        $user = factory(\App\User::class)->create();
        $title = $this->faker->sentence(6);
        $content = $this->faker->text;
        $countries = $this->faker->randomElement(['South America', 'North America', 'Europe', 'Middle East', 'Asia']);
        $image = UploadedFile::fake()->image(self::MOCK_IMAGE_NAME);
        $blog = $this->blogService->create($user, $title, $content, $countries, $image);

        // verifying that the database contains a new blog with good values
        $this->assertDatabaseHas('blogs', [
            'title' => $title,
            'content' => $content,
            'countries' => $countries,
            'image' => self::MOCK_IMAGE_NAME,
            'user_id' => $user->id
        ]);
    }

    //TODO test deleting previous image when updating
    //TODO test image not deleted if not maj
    public function test_should_update_a_blog_in_database(){
        // creating a blog in db to work with
        $blog = factory(\App\Blog::class)->create([
            'user_id' => function() {
                // create a User, because a blog need a user to exist
                $user = factory(\App\User::class)->create();
                return $user->id;
            }
        ]);

        $title = $this->faker->sentence(6);
        $content = $this->faker->text;
        $countries = $this->faker->randomElement(['South America', 'North America', 'Europe', 'Middle East', 'Asia']);
        $image = UploadedFile::fake()->image(self::MOCK_IMAGE_NAME);

        $blog = $this->blogService->update($blog, $title, $content, $countries, $image);

        // verifiying that the blog has been updated and persisted into DB
        $this->assertDatabaseHas('blogs', [
            'title' => $title,
            'content' => $content,
            'countries' => $countries,
            'image' => self::MOCK_IMAGE_NAME,
            'id' => $blog->id
        ]);

        $this->assertTrue(\App\Blog::count() == 1);
        $this->assertFileExists(self::MOCK_IMAGE_NAME);


        // deleting the image created for the test
        $this->addPublicPathAndUnlink(self::MOCK_IMAGE_NAME);
    }

    public function test_should_delete_previous_image_from_server(){
        // creating a blog in db to work with, with an image
        $blog = factory(\App\Blog::class)->create([
            'image' => self::MOCK_IMAGE_NAME,
            'user_id' => function() {
                // create a User, because a blog need a user to exist
                $user = factory(\App\User::class)->create();
                return $user->id;
            }
        ]);
        $full_path_first_image = public_path() . "/images/" . self::MOCK_IMAGE_NAME;
        $this->assertFileNotExists($full_path_first_image);

        // making sure the image is present on the server
        $mock_image = UploadedFile::fake()->image(self::MOCK_IMAGE_NAME);
        $filename = $this->imageService->getFileNameFromRequestAndSaveIt($mock_image);
        $full_path_first_image = public_path() . "/images/" . self::MOCK_IMAGE_NAME;
        $this->assertFileExists($full_path_first_image);

        // creating a new image, and updating the blog
        $image = UploadedFile::fake()->image("new " . self::MOCK_IMAGE_NAME);
        $blog = $this->blogService->update($blog, null, null, null, $image);

        $full_path_second_image = public_path() . "/images/" . "new " . self::MOCK_IMAGE_NAME;
        $this->assertFileExists($full_path_second_image);
        $this->assertFileNotExists($full_path_first_image);

        // deleting the image created for the test
        $this->addPublicPathAndUnlink(self::MOCK_IMAGE_NAME);
        $this->addPublicPathAndUnlink("new " . self::MOCK_IMAGE_NAME);
    }
}
