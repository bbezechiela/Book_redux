<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Post_Likes extends Model
{
    use HasFactory;

    protected $table = 'book_club_post_likes';

    protected $fillable = [
        'post_id',
        'user_id',
    ];
}
