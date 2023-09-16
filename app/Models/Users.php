<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'birthday',
        'gender',
        'age',
        'interest',
        'username',
        'password',
        'profile_photo',
        'created_at',
        'updated_at'
    ];
}
