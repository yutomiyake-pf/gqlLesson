<?php

use App\Post;
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
        Post::truncate();
        foreach (User::all() as $user) {
            factory(Post::class, 4)->create(['author_id' => $user->id]);
        }
    }
}