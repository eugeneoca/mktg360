<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionGroupUser extends Model
{
    protected $fillable = ['organization_user_id', 'permission_group_id'];


    public function organizationUser()
    {
        return $this->belongsTo('App\OrganizationUser', 'organization_user_id');
    }

    public function permissionGroup()
    {
        return $this->belongsTo('App\PermissionGroup', 'permission_group_id');
    }
}
