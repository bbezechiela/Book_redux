<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function books() {
        return $this->hasMany(Books::class. 'user_id');
    }

    public function cart() {
        return $this->hasMany(Cart::class, 'user_id');
    }

    public function orders() {
        return $this->hasMany(Orders::class, 'order_id');
    }

    public function addressUser() {
        return $this->hasMany(Address::class, 'user_id');
    }

    function messages() {
        return $this->hasMany(Messages::class, 'sender_id');
    }

    protected $fillable = [
        'type',
        'username',
        'password',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        // 'address',
        'birthday',
        'gender',
        // 'age',
        'interest',        
        'profile_photo',
        'owner_name',
        'registration_number',
        'business_name',
        'date_registered',
        'permit'        
    ];
}
