<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'post_id',
        'author_id',
        'parent_id',
        'title',
        'meta_title',
        'slug',
        'summary',
        'content',
        'is_archived',
        'published_at',
    ];
}
