<?php

use App\Post;
use App\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * @var $post \App\Post
         */
        foreach (Post::all() as $post) {
            $post->comments()->saveMany(factory(App\Comment::class, rand(3,5))->make());
        }
    }
}
