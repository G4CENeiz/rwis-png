<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LevelPermission extends Pivot
{
    protected $table = 'level_permissions';

    protected $fillable = [
        'user_level_id',
        'permission_id',
        'is_archived',
    ];
}
