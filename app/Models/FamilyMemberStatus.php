<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMemberStatus extends Model
{
    use HasFactory;

    protected $table = 'family_member_statuses';
    
    protected $primaryKey = 'family_member_status_id';

    protected $fillable = [
        'family_member_status_id',
        'family_member_status',
        'is_archived',
    ];
}
