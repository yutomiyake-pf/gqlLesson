<?php

use App\Comment;
use App\Post;
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
        Comment::truncate();
        foreach (Post::all() as $post) {
            factory(Comment::class, 5)->create(['post_id' => $post->id]);
        }
    }
}