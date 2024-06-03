<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';
    
    protected $primaryKey = 'district_id';

    protected $fillable = [
        'district_id',
        'city_id',
        'district_name',
        'is_archived',
    ];
}
