<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Join_Requests extends Model
{
    use HasFactory;

    protected $table = 'book_club_join_requests';

    protected $fillable = [
        'user_id',
        'book_club_id',
        'request_status'
    ];
}
