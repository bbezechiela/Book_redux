<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    protected $fillable = [
        'user_id',
        'clubname',
        'caption',
        'first_img',
        'second_img',
        'third_img',
        'fourth_img',
        'fifth_img',
    ];
}