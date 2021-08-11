<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'dns_key',
        'status',
        'logo',
        'icon'
    ];

    public function organizationUsers()
    {
        return $this->hasMany('App\OrganizationUser', 'organization_id');
    }
    
    public function organizationAppCategories()
    {
        return $this->hasMany('App\OrganizationAppCategory', 'organization_id');
    }
    
    public function appCategories()
    {
        return $this->hasMany('App\AppCategory', 'organization_id');
    }

    public function organizationLocations()
    {
        return $this->hasMany('App\OrganizationLocation', 'organization_id');
    }

    public function apps()
    {
        return $this->hasMany('App\NavsApp', 'organization_id');
    }
}
