<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoginType extends Model
{

    use SoftDeletes;

    const MOBILE_INTERNET = 'Mobile Internet';
    const DESKTOP_INTERNET = 'Desktop Internet';
    const WIDE_AREA_NETWORK = 'Network WAN';
    const NETWORK_LAN = 'Network LAN Internet';

    protected $fillable = [
        'name',
        'is_mobile',
        'is_intranet'
    ];
}
