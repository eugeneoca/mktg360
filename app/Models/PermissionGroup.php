<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    const DEFAULT_NAME = 'Default';

    protected $fillable = ['name', 'organization_location_id','system_created'];


    public function organizationLocation()
    {
        return $this->belongsTo('App\OrganizationLocation', 'organization_location_id');
    }

    public function groupApps()
    {
        return $this->hasMany('App\PermissionGroupApp', 'permission_group_id');
    }

    public function groupUsers()
    {
        return $this->hasMany('App\PermissionGroupUser', 'permission_group_id');
    }

    public function delete()
    {
        $this->groupUsers()->delete();
        $this->groupApps()->delete();
        return parent::delete();
    }
}
