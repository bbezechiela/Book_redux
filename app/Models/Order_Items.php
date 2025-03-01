<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Orders::class, 'order_id');
    }
    
    public function book() {
        return $this->belongsTo(Books::class, 'book_id');
    }

    public function address() {
        return $this->belongsTo(Address::class, 'pickup_address_id');
    }

    public function ratedItem() {
        return $this->hasMany(Reviews::class, 'item_id');
    }

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'book_id',
        'qty',
        'bar_code',
        'order_status',
        'shipping_status',
        'shipping_fee',
        'tracking_number',
        'pickup_address_id',
        'pickup_date'
    ];
}
