<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionType extends Model
{
    use HasFactory;

    protected $table = 'contribution_types';
    
    protected $primaryKey = 'contribution_type_id';

    protected $fillable = [
        'contribution_type_id',
        'contribution_name',
        'description',
        'is_archived',
    ];
}
