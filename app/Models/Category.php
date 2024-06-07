<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_id',
        'parent_id',
        'title',
        'meta_title',
        'slug',
        'content',
        'is_archived',
        'published_at',
    ];
}
