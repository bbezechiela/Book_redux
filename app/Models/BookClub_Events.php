<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Events extends Model
{
    use HasFactory;

    protected $table = 'book_club_events';

    protected $fillable = [
        'club_id',
        'user_id',
        'name',
        'type',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'description',
        // 'image_path'
    ];
}
