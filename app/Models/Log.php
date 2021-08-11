<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{

    use SoftDeletes,
    \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $fillable = [
        'log_format_id',
        'log_source_id',
        'severity',
        'json'
    ];

    protected $casts = ['json'=> 'json'];

    public function organization(){
        return $this->belongsTo('App\Organization', 'json->organizationID');
    }

    public function organizationUser(){
        return $this->belongsTo('App\OrganizationUser', 'json->organizationUserID');
    }

    public function source()
    {
        return $this->belongsTo('App\LogSource', 'log_source_id');
    }

    public function format()
    {
        return $this->belongsTo('App\LogFormat', 'log_format_id');
    }
}
