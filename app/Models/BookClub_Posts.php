<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Posts extends Model
{
    use HasFactory;

    protected $table = 'book_club_posts';

    protected $fillable = [
        'club_id',
        'user_id',
        'caption',
        'first_img',
        'second_img',
        'third_img',
        'fourth_img',
        'fifth_img',
    ];
}
