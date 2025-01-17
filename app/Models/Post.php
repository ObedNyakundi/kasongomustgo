<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'heading',
        'body',
        'cover_image',
        'created_by',
        'category_id',
        'is_featured',
    ];
}
