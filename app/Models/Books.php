<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Books extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function item()
    {
        return $this->hasMany(Order_Items::class, 'book_id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }

    protected $fillable = [
        'user_id',
        'status',
        'unit',
        'book_photo',
        'back_cover',
        'interior_photo',
        'title',
        'author',
        'edition',
        'genre',
        'stock',
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
