<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(2,6)),
        'body' => $faker->text(100),
        'user_id' => User::inRandomOrder()->first()->id
    ];
});
