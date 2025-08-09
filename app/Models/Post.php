<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

//post is the child calss and model is the parent class. we use protected word when we have inheritance
class Post extends Model
{
    use HasFactory;
    // attributes inside method
    protected $fillable=[
        'title',
        'content',
        'post_type',
        'meta_data',
        'category_id',
        'author_id',

    ];

    //a post is written by an author(user)
    public function author(){
        return $this->belongsTo(User::class,'author_id', 'id');
    }

    //a post belongs to a category
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    //a post might have many comments
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //a post might have many tags
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }



}
