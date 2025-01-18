<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'heading',
        'body',
        'tags',
        'cover_image',
        'created_by',
        'category_id',
        'is_featured',
    ];

    //create casts of json arrays below
    protected $casts = [
        'tags' => 'array',
    ];

    //relationships
    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'created_by','id');
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
