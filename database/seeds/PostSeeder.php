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
        factory(Post::class, 100)->make()->each(function ($post){
            $user = User::inRandomOrder()->first();
            $post->user_id = $user->id;
            $post->save();
        });
    }
}
