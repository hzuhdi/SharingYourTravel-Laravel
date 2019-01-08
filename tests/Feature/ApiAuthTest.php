<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use JWTAuth;

class ApiAuthTest extends TestCase {
    use RefreshDatabase;

    const MOCK_EMAIL = "mock@mail.com";
    const MOCK_PASSWORD = "thisisamockpassword";
    const MOCK_WRONG_PASSWORD = "thisisnotthemockpassword";

    public function test_login_jwt(){
        // trying to login with unexisting account
        $response = $this->json('POST', '/api/login/', ['email' => self::MOCK_EMAIL, 'password' => self::MOCK_PASSWORD]);
        $response->assertStatus(401);

        // creating a mock account
        factory(\App\User::class)->create([
            'email' => self::MOCK_EMAIL,
            'password' => bcrypt(self::MOCK_PASSWORD),
        ]);

        // trying to login with this account
        $response = $this->json('POST', '/api/login/', ['email' => self::MOCK_EMAIL, 'password' => self::MOCK_PASSWORD]);
        $response->assertStatus(200)->assertJsonStructure(['token']);

        // trying to login with wrong password
        $response = $this->json('POST', '/api/login/', ['email' => self::MOCK_EMAIL, 'password' => self::MOCK_WRONG_PASSWORD]);
        $response->assertStatus(401);
    }

    public function test_should_return_user_associated_with_jwt(){
        // trying to get user without sending token
        $response = $this->json('GET', '/api/self/');
        $response->assertStatus(401);


        $user = factory(\App\User::class)->create([
            'email' => self::MOCK_EMAIL,
            'password' => bcrypt(self::MOCK_PASSWORD),
        ]);
        $token = JWTAuth::attempt(['email' => self::MOCK_EMAIL, 'password' => self::MOCK_PASSWORD]);

        // trying to get the user with token
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->json('GET', '/api/self/');

        $response->assertStatus(200)->assertJson([
                'email' => self::MOCK_EMAIL,
        ]);

        // trying to get user with invalid token
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . "invalidtoken",
        ])->json('GET', '/api/self/');
        $response->assertStatus(401);
    }
}
