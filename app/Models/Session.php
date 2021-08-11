<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    const SESSION_NAME = 'MKTG360_SESSION';

    protected $fillable = [
        'key',
        'start_date',
        'end_date',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
