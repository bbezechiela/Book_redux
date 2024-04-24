<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class Books extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function review() {
        return $this->hasMany(Reviews::class, 'book_id');
    }
    
    public function reports() {
        return $this->hasMany(Report::class, 'book_id');
    }

    public function track() {
        return $this->hasMany(Track_Rental::class, 'book_id');
    }

    public function request() {
        return $this->hasMany(Exchange_Requests::class, 'target_book_id');
    }

    protected $fillable = [
        'user_id',
        'status',
        // 'unit',
        // 'book_photo',
        'book_filename',
        'back_cover',
        // 'interior_photo',
        'isbn',
        'title',
        'author',
        'edition',
        'genre',
        // 'stock',
        'condition',
        'description',
        // 'language',
        // 'price',
        'exchange_preferences',
        'rental_duration',
        'rental_terms_and_condition',
        'security_deposit',
        // 'weight',
        // 'width',
        // 'height',
        // 'length',
        // 'courier'
    ];
}
