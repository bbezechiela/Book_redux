<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'product_id',
        'status'
    ];

    public function productRelation() {
        return $this->belongsTo(Books::class, 'product_id');
    }

    public function userRelation() {
        return $this->belongsTo(Users::class, 'user_id');        
    }

    
    
}
