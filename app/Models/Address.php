<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = [
        'user_id',
        'name',
        'contact_number',
        'region',
        'city_municipality',
        'brgy_village',        
        'postal_code',
        'street_building_house',
        'default_address'
    ];
}
