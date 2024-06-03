<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    use HasFactory;

    protected $table = 'marital_statuses';
    
    protected $primaryKey = 'marital_status_id';

    protected $fillable = [
        'marital_status_id',
        'marital_status',
        'is_archived',
    ];
}
