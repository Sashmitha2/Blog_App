<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    //
    protected $fillable=[
        'title',
        'color',
        'meta_data',
    ];

    //one category has many posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
