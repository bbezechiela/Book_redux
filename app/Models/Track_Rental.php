<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track_Rental extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function book() {
        return $this->belongsTo(Books::class, 'book_id');
    }

    protected $table = 'track_rental';

    protected $fillable = [
        'book_id',
        'user_id',
        'status',
        'start_date',
        'end_date',
        'action',        
    ];
}
