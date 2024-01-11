<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub_Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_id',
        'name',
        'location',
        'date',
        'time',
        'description',
        'image_path'
    ];
}
