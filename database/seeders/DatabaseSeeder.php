<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //create 5 categories
        $categories=Category::factory(5)->create();

        //create 10 users (authors)
        $users=User::factory(10)->create();

        //create 15 tags
        $tags=Tag::factory(15)->create();

        //create 20 posts and associate each with random categories, users and tags
        Post::factory(20)->create()->each(function($post) use($users, $categories, $tags){

        //associate with a random user (auhtor)
        $post->author()->associate($users->random())->save();

        //associate with a random category
        $post->category()->associate($categories->random())->save();

        //attatch 1 to3 random category
        $post->tags()->attach(
            $tags->random(rand(1,3))->pluck('id')->toArray()
        );

        //create random comments for each post
        Comment::factory(rand(0,5))->create([
            'post_id'=>$post->id,
            'author_id'=>$users->random()->id //associate each comment with a random user
        ]);
        });

        // User::factory(10)->create();

       // User::factory()->create([
         ///   'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
    }
}
