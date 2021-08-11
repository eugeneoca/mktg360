<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status_id',
        'name',
        'file',
        'comment'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function status(){
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
}
