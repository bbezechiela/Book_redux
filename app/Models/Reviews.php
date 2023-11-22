<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id',
        'rate_value',
        'condition_accuracy',
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
