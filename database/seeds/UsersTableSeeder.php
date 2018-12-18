<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a single user so we can use it to log
        factory(User::class)->create([
            'email' => "bob@email.com",
            'password' => bcrypt('password'),
            'type' => 'admin'
        ]);
        //when seeder is ran, they automatically will put the bob as an admin
        // create other users to populate the db
        factory(User::class, 4)->create();
    }
}
