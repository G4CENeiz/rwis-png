<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeRange extends Model
{
    use HasFactory;

    protected $table = 'income_ranges';
    
    protected $primaryKey = 'income_range_id';

    protected $fillable = [
        'income_range_id',
        'lowerbound',
        'upperbound',
        'is_archived',
    ];
}
