<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserType extends Model
{
    const SUPER_ADMIN = 'CUNW_TECH_ADMIN';
    const ORG_ADMIN = 'ORGANIZATION_ADMIN';
    const USER = 'USER';

    use SoftDeletes;
    protected $fillable = [
        'name'
    ];
}
