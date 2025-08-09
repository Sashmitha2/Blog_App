<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
    $category=App\Models\Category::find(43);
    return $category->posts;

    //$comment=App\Models\Comment::find(15);

    //return $comment->author;
    //return $comment->post;

     $post=App\Models\Post::find(15);
    //return $post->category;
    //return $post->author;
     //return $post->comments;
      //return $post->tags;

    $tag=App\Models\Tag::find(5);
    //return $tag->posts;

    $author=App\Models\User::find(8);
    //return $author->posts;
    //return $author->comments;

});
