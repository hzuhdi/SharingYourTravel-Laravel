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
            'username' => 'Bob',
            'password' => bcrypt('password')
        ]);
        // create other users to populate the db
        factory(User::class, 4)->create();
        // TODO 
    }
}
