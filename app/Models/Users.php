<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function cart() {
        return $this->hasMany(Cart::class, 'user_id');
    }

    public function address() {
        return $this->hasMany(Address::class, 'user_id');
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        // 'address',
        'birthday',
        'gender',
        // 'age',
        'interest',
        'username',
        'password',
        'profile_photo'        
    ];
}
