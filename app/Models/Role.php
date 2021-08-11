<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const ADMIN = 'ADMIN';
    public const MANAGER = 'MANAGER';
    public const VENDOR = 'VENDOR';
    public const CLIENT = 'CLIENT';
    public const STAFF = 'STAFF';
}
