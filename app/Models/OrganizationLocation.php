<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationLocation extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'display_name',
        'location_type_name',
        'address1',
        'address2',
        'address3',
        'phone',
        'toll_free',
        'website',
        'fax',
        'city',
        'state',
        'zip',
        'status',
        'intranet_ip_address_range',
        'organization_id'
    ];

    public function organizationLocationApps(){
        return $this->hasMany('App\OrganizationLocationApp','organization_location_id');
    }

    public function permissionGroups()
    {
        return $this->hasMany('App\PermissionGroup','organization_location_id');
    }

    public function organization()
    {
        return $this->belongsTo('App\Organization', 'organization_id');
    }
}
