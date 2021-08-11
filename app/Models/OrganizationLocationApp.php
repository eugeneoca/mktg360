<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationLocationApp extends Model
{
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    protected $fillable = [
        'start_url',
        'status',
        'intranet_only',
        'is_quick_launch',
        'mobile',
        'organization_location_id',
        'organization_app_category_id',
        'app_id'
    ];

    public function organizationAppCategory()
    {
        return $this->belongsTo('App\OrganizationAppCategory', 'organization_app_category_id');
    }

    public function organizationLocation()
    {
        return $this->belongsTo('App\OrganizationLocation', 'organization_location_id');
    }

    public function appInstallations()
    {
        return $this->hasMany('App\AppInstallation', 'organization_location_app_id');
    }

    public function app()
    {
        return $this->belongsTo('App\NavsApp', 'app_id');
    }

    public function permissionGroupApps()
    {
        return $this->hasMany('App\PermissionGroupApp', 'organization_location_app_id');
    }

    public function delete()
    {
        $this->appInstallations()->delete();
        $this->permissionGroupApps()->delete();
        return parent::delete();
    }
}
