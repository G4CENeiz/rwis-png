<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $table = 'post_comments';
    
    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'comment_id',
        'post_id',
        'parent_id',
        'title',
        'content',
        'is_archived',
        'published_at',
    ];
}
