<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table = 'houses';
    
    protected $primaryKey = 'house_id';

    protected $fillable = [
        'house_id',
        'house_group_id',
        'land_area',
        'building_area',
        'domicile_street',
        'domicile_rt',
        'domicile_rw',
        'zip_code',
        'is_archived',
    ];
}
