<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogFormat extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'json_base',
        'status'
    ];

    protected $casts = ['json_base' => 'json'];
}
