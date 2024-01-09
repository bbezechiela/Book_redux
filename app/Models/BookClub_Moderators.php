<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Moderators extends Model
{
    use HasFactory;

    // model was created incase theres any necessary methods needed to interact with the table

    protected $table = 'book_club_moderators';

    protected $fillable = [
        'club_id',
        'user_id'
    ];
}
