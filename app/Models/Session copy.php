<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use SoftDeletes;

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    const NAVS_SESSION_NAME = 'NAVS-SESSION';

    protected $fillable = [
        'key',
        'ip_address',
        'start_date',
        'end_date',
        'navs_installation_id',
        'organization_id',
        'user_id',
        'login_type_id'
    ];

    public function navsInstallation()
    {
        return $this->belongsTo('App\NavsInstallation', 'navs_installation_id');
    }

    public function organization()
    {
        return $this->belongsTo('App\Organization', 'organization_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function loginType()
    {
        return $this->belongsTo('App\LoginType', 'login_type_id');
    }
}
