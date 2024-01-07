<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_club_name'
    ];
}
