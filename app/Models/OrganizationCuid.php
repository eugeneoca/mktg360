<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationCuid extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'cuid',
        'cuid_alpha',
        'organization_id'
    ];

    public function organization()
    {
        return $this->belongsTo('App\Organization', 'organization_id');
    }
}
