<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    use HasFactory;

    protected $table = 'post_metas';
    
    protected $primaryKey = 'post_meta_id';

    protected $fillable = [
        'post_meta_id',
        'post_id',
        'key',
        'content',
        'is_archived',
        'published_at',
    ];
}
