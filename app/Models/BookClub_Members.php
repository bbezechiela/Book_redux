<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Members extends Model
{
    use HasFactory;

    // model was created incase there's any necessary methods needed to interact with the table
    protected $table = 'book_club_members';

    protected $fillable = [
        'club_id',
        'user_id'
    ];
}
