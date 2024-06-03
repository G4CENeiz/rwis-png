<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $table = 'villages';
    
    protected $primaryKey = 'village_id';

    protected $fillable = [
        'village_id',
        'district_id',
        'village_name',
        'is_archived',
    ];
}
