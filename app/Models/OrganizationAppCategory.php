<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationAppCategory extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'sort_order',
        'app_category_id',
        'organization_id',
    ];

    public function appCategory()
    {
        return $this->belongsTo('App\AppCategory', 'app_category_id');
    }

    public function organization()
    {
        return $this->belongsTo('App\Organization', 'organization_id');
    }

}

