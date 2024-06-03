<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseGroup extends Model
{
    use HasFactory;

    protected $table = 'house_groups';
    
    protected $primaryKey = 'house_group_id';

    protected $fillable = [
        'house_group_id',
        'is_archived',
    ];
}
