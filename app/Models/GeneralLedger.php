<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralLedger extends Model
{
    use HasFactory;

    protected $table = 'general_ledgers';
    
    protected $primaryKey = 'general_ledger_id';

    protected $fillable = [
        'general_ledger_id',
        'issuer_id',
        'issuer_type',
        'is_archived',
    ];
}
