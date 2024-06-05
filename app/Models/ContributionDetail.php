<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionDetail extends Model
{
    use HasFactory;

    protected $table = 'contribution_details';
    
    protected $primaryKey = 'contribution_detail_id';

    protected $fillable = [
        'contribution_detail_id',
        'contribution_id',
        'contribution_type_id',
        'contribution_amount',
        'is_archived',
    ];
}
