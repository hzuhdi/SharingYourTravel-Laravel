<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogsTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_should_return_all_blogs()
    {
        $response = $this->json('GET', '/api/blogs');
        $response->assertStatus(200)->assertJsonCount(0);

        // creating a blog in db
        $blog = factory(\App\Blog::class)->create([
            'user_id' => function() {
                // create a User, because a blog need a user to exist
                $user = factory(\App\User::class)->create();
                return $user->id;
            }
        ]);

        $response = $this->json('GET', '/api/blogs');
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_should_return_a_blog()
    {
        $response = $this->json('GET', '/api/blogs/15000000000');
        $response->assertStatus(404);

        $blog = factory(\App\Blog::class)->create([
            'user_id' => function() {
                // create a User, because a blog need a user to exist
                $user = factory(\App\User::class)->create();
                return $user->id;
            }
        ]);

        $response = $this->json('GET', '/api/blogs/'.$blog->id);
        $response->assertStatus(200)->assertJson([
                'id' => $blog->id,
        ]);
    }

    public function test_should_update_a_blog()
    {
        $response = $this->json('PUT', '/api/blogs/15000000000');
        $response->assertStatus(404);

        $blog = factory(\App\Blog::class)->create([
            'user_id' => function() {
                // create a User, because a blog need a user to exist
                $user = factory(\App\User::class)->create();
                return $user->id;
            }
        ]);

        $title = "BONJOUR";
        $response = $this->json('PUT', '/api/blogs/'.$blog->id, ['title' => $title]);
        $response->assertStatus(200)->assertJson([
                'title' => $title,
        ]);

        $this->assertDatabaseHas('blogs', [
            'title' => $title
        ]);
    }

    public function test_should_delete_a_blog()
    {
        $response = $this->json('DELETE', '/api/blogs/15000000000');
        $response->assertStatus(404);

        $blog = factory(\App\Blog::class)->create([
            'user_id' => function() {
                // create a User, because a blog need a user to exist
                $user = factory(\App\User::class)->create();
                return $user->id;
            }
        ]);

        $this->assertDatabaseHas('blogs', [
            'id' => $blog->id
        ]);

        $response = $this->json('DELETE', '/api/blogs/'.$blog->id);
        $response->assertStatus(200)->assertJson([
                'id' => $blog->id,
        ]);

        $this->assertDatabaseMissing('blogs', [
            'id' => $blog->id
        ]);
    }

    // public function test_should_create_a_blog(){
    //     //TODO
    // }
}
