<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public function staff_info(){
        return $this->hasOne('App\Models\User', 'id', 'staff_id');
    }
}
