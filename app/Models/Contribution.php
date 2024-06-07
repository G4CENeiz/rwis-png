<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    protected $table = 'contributions';
    
    protected $primaryKey = 'contribution_id';

    protected $fillable = [
        'contribution_id',
        'recipient_id',
        'general_ledger_id',
        'recipient_type',
        'is_archived',
    ];
}
