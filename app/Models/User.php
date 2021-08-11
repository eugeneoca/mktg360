<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'site_url',
        'verification_token',
        'password',
        'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'password_confirmation',
        'verification_token',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role', 'role_id');
    }

    public function staffs(){
        return $this->belongsToMany('App\Models\Staff', 'staff', 'client_id', 'staff_id')->withTimestamps();
    }

    public function portals(){
        return $this->belongsToMany('App\Models\Portal', 'user_portal', 'user_id', 'portal_id')->withTimestamps();
    }

    public function profile(){
        return $this->belongsTo('App\Models\Profile', 'user_id');
    }
}
