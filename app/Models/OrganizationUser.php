<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationUser extends Model
{

    // PLEASE DO NOT CHANGE,USED TO MAKE HASH TOKEN
    const HASH_TOKEN = "_9-uN7Qm1UCkglgV7tVe5j+SeOKMzOV.l_7-C<fMdcigT)QK3k.'n%&{LfI!Y>";
    
    const STATUS_PENDING = 'PENDING';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    use SoftDeletes;

    protected $fillable = [
        "email",
        "display_name",
        "profile_photo",
        "title",
        "status",
        "windows_username",
        "user_id",
        "organization_id",
        'hash_token',
        'verified_at',
        'user_type_id'
    ];

    protected $hidden = [
        'hash_token',
    ];

    public static function generateHashToken($data){
        $entry = OrganizationUser::HASH_TOKEN . implode(',',$data);
        return hash('sha256',$entry);
    }

    public function userType()
    {
        return $this->belongsTo('App\UserType', 'user_type_id');
    }

    public function permissionGroups()
    {
        return $this->hasMany('App\PermissionGroupUser', 'organization_user_id');
    }

    public function organization()
    {
        return $this->belongsTo('App\Organization', 'organization_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
