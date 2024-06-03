<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profession extends Model
{
    use HasFactory;

    protected $table = 'professions';
    
    protected $primaryKey = 'profession_id';

    protected $fillable = [
        'profession_id',
        'profession_name',
        'is_archived',
    ];
}
