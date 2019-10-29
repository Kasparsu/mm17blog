<?php

use App\Comment;
use App\Post;
use App\User;
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
        Post::all()->each(function ($post){
            factory(Comment::class, 10)->make(['post_id' => $post->id])->each(function ($comment){
                $user = User::inRandomOrder()->first();
                $comment->user_id = $user->id;
                $comment->save();
            });
        });

    }
}
