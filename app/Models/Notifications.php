<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $fillable = [
        'app_id',
        'organization_user_id',
        'message',
        'action_name',
        'data',
        'delivered_date'
    ];

    protected $casts = [
        'data'=> 'array'
    ];

    public function app()
    {
        return $this->belongsTo('App\NavsApp', 'app_id');
    }

    public function organizationUser()
    {
        return $this->belongsTo('App\OrganizationUser', 'organization_user_id');
    }
}
