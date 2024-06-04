<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    use HasFactory;

    protected $table = 'user_levels';
    
    protected $primaryKey = 'user_level_id';

    protected $fillable = [
        'user_level_id',
        'user_level_name',
        'is_archived',
    ];
}
