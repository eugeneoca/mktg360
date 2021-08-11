<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionGroupApp extends Model
{
    protected $fillable = ['permission_group_id', 'organization_location_app_id'];

    public function permissionGroup()
    {
        return $this->belongsTo('App\PermissionGroup', 'permission_group_id');
    }

    public function organizationLocationApp()
    {
        return $this->belongsTo('App\OrganizationLocationApp', 'organization_location_app_id');
    }
}
