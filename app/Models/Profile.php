<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_name',
        'site_url',
        'business_email',
        'address_line_1',
        'address_line_2',
        'state',
        'city',
        'country',
        'color_a',
        'color_b',
        'color_c',
        'color_d',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
