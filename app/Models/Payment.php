<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    
    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'payment_id',
        'contribution_id',
        'payment_method_id',
        'payment_status_id',
        'payment_amount',
        'description',
        'is_archived',
    ];
}
