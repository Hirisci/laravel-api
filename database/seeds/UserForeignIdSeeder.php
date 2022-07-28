<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;



class UserForeignIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all();
        $posts = Post::where('user_id', NULL)->get();

        foreach ($posts as $post){
            $post->user_id = rand(1,count($user));
            $post->save();
        }
    }
}
