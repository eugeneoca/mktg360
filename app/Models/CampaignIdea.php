<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignIdea extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'status_id',
        'description',
        'cause',
        'primary_customer',
        'secondary_customer',
        'expected_result',
        'budget',
        'other_details',
        'option_id',
        'platform_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function status(){
        return $this->belongsTo('App\Models\Status', 'status_id');
    }

    public function options(){
        return $this->belongsToMany('App\Models\CampaignIdeaOptions', 'campaign_idea_has_options', 'campaign_idea_id', 'option_id')->withTimestamps();
    }

    public function platforms(){
        return $this->belongsToMany('App\Models\Platform', 'campaign_idea_has_platforms', 'campaign_idea_id', 'platform_id')->withTimestamps();
    }
}
