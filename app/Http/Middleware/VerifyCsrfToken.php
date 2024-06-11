<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        '/administration/contribution',
        '/administration/contribution/type',
        '/administration/contribution/detail',
        '/administration/ledger/',
        '/administration/payement/method',
        '/administration/payement/prove',
        '/administration/payement/status',
        '/administration/payement',
        '/administration',
    ];
}
