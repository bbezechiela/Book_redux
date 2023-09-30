<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_user',
        'status',
        'book_photo',
        'title',
        'author',
        'edition',
        'genre',
        'condition',
        'description',
        'language',
        'price',
        'exchange_preferences',
        'rental_duration',
        'rental_terms_and_condition',
        'security_deposit',
        'weight',
        'width',
        'height',
        'length',
        'courier'
    ];
}
