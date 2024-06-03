<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $table = 'families';
    
    protected $primaryKey = 'family_id';

    protected $fillable = [
        'family_id',
        'nkk',
        'house_id',
        'address_street',
        'address_rt',
        'address_rw',
        'village_id',
        'zip_code',
        'is_archived',
    ];
}
