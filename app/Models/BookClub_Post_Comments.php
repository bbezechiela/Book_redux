<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Post_Comments extends Model
{
    use HasFactory;

    protected $table = 'book_club_post_comments';

    protected $fillable = [
        'comment_content',
        'post_id',
        'user_id',
    ];
}
