<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // First create users
        $this->call(UserSeeder::class);
        // Then let the users post posts
        $this->call(PostSeeder::class);
        // Users have todos in our case as well
        $this->call(TodoSeeder::class);
        // And finally comment each post by a random user
        $this->call(CommentSeeder::class);
    }
}
