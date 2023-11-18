<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    function user() {
        return $this->belongsTo(User::class, 'id');
    }

    function conversation() {
        return $this->belongsTo(Conversations::class, 'conversation_id');
    }

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message_content',
        'conversation_id'
    ];
    
}
