<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;
     protected $fillable = [

        'user_id',
        'conference_register_id',
        'name',
        'email',
        'registration_no',
        'subject',
        'message',
        'status'

    ];
}
