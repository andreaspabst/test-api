<?php

use App\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users and Posts can be stored simoultanously with a seeder!
        // factory(App\User::class, 5)->create()->each(function ($user) {
        //     $user->posts()->saveMany(factory(App\Post::class, 10)->make());
        // });

        foreach (User::all() as $user) {
            $user->posts()->saveMany(factory(App\Post::class, 10)->make());
        }
    }
}
