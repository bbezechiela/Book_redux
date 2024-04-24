<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Saved_Books extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function book() {
        return $this->belongsTo(Books::class, 'book_id');
    }

    protected $table = 'saved_books';

    protected $fillable = [
        'user_id',
        'book_id'
    ];
}
