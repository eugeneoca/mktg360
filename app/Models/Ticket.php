<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ticket_type_id',
        'message',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function ticket_type(){
        return $this->belongsTo('App\Models\TicketType', 'ticket_type_id');
    }
}
