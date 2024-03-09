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

    public function address() {
        return $this->belongsTo(Address::class, 'address_id');
    }

    public function items() {
        return $this->hasMany(Order_Items::class, 'order_id');
    }    

    protected $fillable = [
        'user_id',        
        'address_id',
        'order_number',
        'shipping_option',
        'payment_method',
        'order_status',
        'shipping_total',
        'total_payment'
    ];
}
