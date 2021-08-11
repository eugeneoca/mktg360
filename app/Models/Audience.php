<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status_id',
        'description',
        'challenges',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function status(){
        return $this->belongsTo('App\Models\Status', 'status_id');
    }

    public function levels(){
        return $this->belongsToMany('App\Models\AudienceLevel', 'audience_has_levels', 'audience_id', 'level_id');
    }
}
