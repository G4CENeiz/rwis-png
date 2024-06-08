<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $table = 'residents';

    protected $primaryKey = 'resident_id';

    protected $fillable = [
        'resident_id',
        'nik',
        'name',
        'birth_place',
        'birth_date',
        'gender',
        'religion_id',
        'citizenship',
        'education_level_id',
        'blood_type',
        'profession_id',
        'goverment_employees',
        'income_range_id',
        'family_id',
        'family_member_status_id',
        'marital_status_id',
        'marriage_date',
        'is_archived',
    ];
}
