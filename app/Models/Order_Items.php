<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Orders::class, 'order_id')->withDefault();
    }
    
    public function book() {
        return $this->belongsTo(Books::class, 'book_id');
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
        'order_status'
    ];
}
