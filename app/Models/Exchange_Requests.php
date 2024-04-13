<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange_Requests extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function book()
    {
        return $this->belongsTo(Books::class, 'target_book_id');
    }

    protected $table = 'exchange_requests';

    protected $fillable = [
        'user_id',
        'target_book_id',
        'book_filename',
        'back_cover',
        'status',
        'isbn',
        'title',
        'author',
        'edition',
        'genre',
        'description',
        'allow',
        'message'
    ];
}
