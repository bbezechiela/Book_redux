<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function cart() {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    protected $fillable = [
        'user_id',
        'cart_id',
        'address_id',
        'order_status'
    ];
}
