<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    public function request() {
        return $this->belongsTo(Exchange_Requests::class, 'request_id');
    }

    public function user() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    protected $fillable = [
        'book_id',
        'request_id',
        'user_id',
        'rate_value',
        'content_accuracy',
        'description_accuracy',
        'interaction',
        'description',
        'display_username',
        'first_img',
        'second_img',
        'third_img',
        'fourth_img',
        'fifth_img'
    ];
}
