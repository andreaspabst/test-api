<?php

use App\User;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user) {
            $user->todos()->saveMany(factory(App\Todo::class, 15)->make());
        }
    }
}
