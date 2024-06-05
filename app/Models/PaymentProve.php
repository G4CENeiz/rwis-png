<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentProve extends Model
{
    use HasFactory;

    protected $table = 'payment_proves';
    
    protected $primaryKey = 'payment_prove_id';

    protected $fillable = [
        'payment_prove_id',
        'payment_id',
        'is_archived',
    ];
}
