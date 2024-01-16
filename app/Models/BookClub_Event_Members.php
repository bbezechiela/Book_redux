<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Event_Members extends Model
{
    use HasFactory;

    protected $table = 'book_club_event_members';

    protected $fillable = [
        'event_id',
        'user_id'
    ];
}
