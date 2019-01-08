<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use JWTAuth;

class BlogsTest extends TestCase
{

    use RefreshDatabase;
    use WithFaker;

    const MOCK_EMAIL = "bob@email.com";
    const MOCK_PASSWORD = "thisisapassword";
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
        $response = $this->json('GET', '/api/blogs/4000');
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
        // with no user
        $response = $this->json('PUT', '/api/blogs/'.$blog->id, ['title' => $title]);
        $response->assertStatus(401);

        // with non owner user
        $random_user = factory(\App\User::class)->create();
        $token = JWTAuth::fromUser($random_user);
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token])
            ->json('PUT', '/api/blogs/'.$blog->id, ['title' => $title]);
        $response->assertStatus(401);

        // with owner
        $token = JWTAuth::fromUser($blog->user);
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token])
            ->json('PUT', '/api/blogs/'.$blog->id, ['title' => $title]);
        $response = $this->json('PUT', '/api/blogs/'.$blog->id, ['title' => $title . $title]);
        $response->assertStatus(200)->assertJson([
                'title' => $title . $title
        ]);

        $this->assertDatabaseHas('blogs', [
            'title' => $title . $title
        ]);

        // with admin
        $admin = factory(\App\User::class)->create(['type' => 'admin']);
        $token = JWTAuth::fromUser($admin);
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token])
            ->json('PUT', '/api/blogs/'.$blog->id, ['title' => $title]);
        $response->assertStatus(200)->assertJson([
                'title' => $title
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

    public function test_should_create_a_blog(){
        $payload = [
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->text,
            'countries' => $this->faker->randomElement(['South America', 'North America', 'Europe', 'Middle East', 'Asia'])
        ];

        // it should not work: no token provided
        $response = $this->json('POST', '/api/blogs/', $payload);
        $response->assertStatus(401);

        // creating a user to post the article with
        $user = factory(\App\User::class)->create([
            'email' => self::MOCK_EMAIL,
            'password' => bcrypt(self::MOCK_PASSWORD),
        ]);
        $token = JWTAuth::attempt(['email' => self::MOCK_EMAIL, 'password' => self::MOCK_PASSWORD]);

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->json('POST', '/api/blogs/', $payload);
        $response->assertStatus(200)->assertJson($payload)->assertJson(['user_id' => $user->getId()]);
    }
}
