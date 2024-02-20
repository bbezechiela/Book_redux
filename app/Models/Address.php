<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function orders() {
        return $this->hasMany(Orders::class, 'address_id');
    }

    protected $table = 'address';

    protected $fillable = [
        'user_id',
        'name',
        'contact_number',
        // 'region',
        // 'city_municipality',
        // 'brgy_village',        
        // 'postal_code',
        // 'street_building_house',
        'address',
        'latitude',
        'longitude',
        'default_address'
    ];
}
