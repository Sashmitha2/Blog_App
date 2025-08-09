<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    use HasFactory;

    protected $fillable=[
        'comment',
        'meta_data',
        'author_id',
        'post_id',
    ];

    //one comment is written by a author(user)
    public function author(){
        return $this->belongsTo(User::class, 'author_id', "id");
    }

    //one comment is on a post
    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    
}
